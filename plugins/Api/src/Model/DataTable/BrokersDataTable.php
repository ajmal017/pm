<?php

namespace Api\Model\DataTable;

use Cake\Routing\Router;
use Api\Model\Service\Core;
use Cake\ORM\TableRegistry;

class BrokersDataTable
{

    public function ajaxManageBrokersSearch($requestData)
    {
        $Brokers = TableRegistry::get('Api.Brokers');
        $brokers = $Brokers->find('all');

        $detail = $brokers;
        $count = $brokers->count();
        $totalData = isset($count) ? $count : 0;

        $totalFiltered = $totalData;
        $this->autoRender = false;

        if (isset($requestData['search']['value']) && !empty($requestData['search']['value'])) {
            $search = $requestData['search']['value'];
            $detail = $detail
                    ->where([
                'OR' => [
                    ['(Brokers.id) LIKE' => '%' . $search . '%'],
                    ['(Brokers.first_name) LIKE' => '%' . $search . '%'],
                    ['(Brokers.fee) LIKE' => '%' . $search . '%'],
                    ['(Brokers.exchange_fee) LIKE' => '%' . $search . '%'],
                    ['(Brokers.trade_fee) LIKE' => '%' . $search . '%'],
                    ['(Brokers.market) LIKE' => '%' . $search . '%']
            ]]);
            $brokers_count = $detail;
            $totalFiltered = $brokers_count->count();
        }

        $columns = array(
            0 => 'id',
            1 => 'first_name',
            2 => 'last_name',
            3 => 'fee',
            4 => 'exchange_fee',
            5 => 'trade_fee',
            6 => 'market'
        );

        $sidx = $columns[$requestData['order'][0]['column']];
        $sord = $requestData['order'][0]['dir'];
        $start = $requestData['start'];
        $length = $requestData['length'];
        $page = ($start) ? $start / $length : 1;
        $results = $detail
                ->order($sidx . ' ' . $sord)
                ->limit((int) $length)
                ->page($page);
        $i = 0;
        $data = array();
        foreach ($results as $row) {
            $checked = (!$row['enable']) ? "checked" : "";
            if ($row['enable']) {
                $enable = Router::url(['_name' => 'enable_broker', 'id' => $row["id"]]);
            } else {
                $enable = Router::url(['_name' => 'disable_broker', 'id' => $row["id"]]);
            }
            $edit = Router::url(['_name' => 'edit_broker', 'id' => $row["id"]]);
            $fee = $row['fee'];
            if($row['percent']){
                $fee = $row['fee']/100;
            }
            $fees = ((float)$fee+(float)$row['exchange_fee']+(float)$row['trade_fee']);

            $nestedData = [];
            $nestedData[] = $row["id"];
            $nestedData[] = $row["first_name"];
            $nestedData[] = $row["fee"];
            $nestedData[] = $row["exchange_fee"];
            $nestedData[] = $row["trade_fee"];
            $nestedData[] = $row["market"];
            $nestedData[] = $fees;
            $nestedData[] = '<label class="switch switch-info btn-sm">
                                        <input class="disable" onchange="window.location.assign(&quot;' . $enable . '&quot;)" type="checkbox"' . $checked . ' >
                                        <span class="switch-label" data-on="YES" data-off="NO"></span>
                                    </label>';
            $nestedData[] = '<a href="' . $edit . '"'
                    . ' class="edit btn btn-3d btn-sm btn-reveal btn-success">'
                    . '<i class="glyphicon glyphicon-pencil"></i>'
                    . '<span>Edit</span>'
                    . '</a>';
            $nestedData[] = '<button class="btn btn-danger btn-3d btn-sm" '
                    . 'data-toggle="modal" data-target="#confirm-delete" '
                    . 'data-name="' . $row["name"] . '" '
                    . 'data-url="delete/' . $row["id"] . '" '
                    . 'type="submit">'
                    . 'Delete'
                    . '</button>';
            $data[] = $nestedData;
        }

        $json_data = array(
            "draw" => intval($requestData['draw']),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        return json_encode($json_data);
    }

}
