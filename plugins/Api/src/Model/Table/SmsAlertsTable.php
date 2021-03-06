<?php
namespace Api\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SmsAlerts Model
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SmsAlertsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('sms_alerts');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GlobalAlerts');
        $this->belongsTo('TimeAlerts');
        $this->belongsTo('AppUsers', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['global_alert_id'], 'GlobalAlerts'));
        $rules->add($rules->existsIn(['time_alert_id'], 'TimeAlerts'));
        $rules->add($rules->existsIn(['user_id'], 'AppUsers'));

        return $rules;
    }
}
