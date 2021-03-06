<?php

namespace Api\Model\Entity;

use Cake\Routing\Router;
use CakeDC\Users\Model\Entity\User;
use Cake\Core\Configure;

class AppUser extends User
{
    var $belongsTo = 'Company';

    /**
     * _getAvatar method Getter for user avatar Verify if exists avatar uploaded
     *
     * @return null|string
     */
    protected function _getAvatar()
    {
        $avatar = null;
        if (!empty($this->_properties['avatar'])) {
            return $this->getSystemUrl($this->_properties['avatar']);
        } else if (!empty($this->_properties['social_accounts'][0])) {
            $avatar = $this->_properties['social_accounts'][0]['avatar'];
        } else {
            $avatar = null;
        }

        return $avatar;
    }

    /**
     * _getAvatarPath method Getter for user avatar Verify if exists avatar uploaded
     *
     * @return null|string
     */
    protected function _getAvatarPath()
    {
        $avatar = false;
        if (!empty($this->_properties['avatar'])) {
            $avatar = Configure::read('Users.avatar.path') . $this->_properties['avatar'];
            if (strpos($this->_properties['avatar'], 'http') !== false) {
                $avatar = $this->_properties['avatar'];
            }
        } else if (!empty($this->_properties['social_accounts'][0])) {
            $avatar = $this->_properties['social_accounts'][0]['avatar'];
        }

        if (file_exists(WWW_ROOT . $avatar)) {
            return $avatar;
        }

        return 'no-user.png';
    }

    /**
     * Getter for user avatar
     * Verify if exists avatar uploaded
     * @return null|string
     */
    protected function _getBio()
    {
        $bio = null;
        if (!empty($this->_properties['description'])) {
            $bio = $this->_properties['description'];
        } else if (!empty($this->_properties['social_accounts'][0])) {
            $bio = $this->_properties['social_accounts'][0]['description'];
        }
        return $bio;
    }

    /**
     * _getFullName method this method will creata a full name to the user.
     *
     * @return null|string
     */
    protected function _getFullName()
    {
        return $this->_properties['first_name'] . ' ' . $this->_properties['last_name'];
    }

    /**
     * _getInvestmentStyleById method this method will creata a investment  to the user.
     *
     * @return null|string
     */
    protected function _getInvestmentStyleById()
    {
        $id = $this->_properties['investment_style_id'];
        if (array_key_exists($id, \Api\Model\Service\Core::$investmentStyle)) {
            return \Api\Model\Service\Core::$investmentStyle[$id];
        }
        return '';
    }

    /**
     * _getExperienceById method this method will creata a experince  to the user.
     *
     * @return null|string
     */
    protected function _getExperienceById()
    {
        $id = $this->_properties['experince_id'];
        if (array_key_exists($id, \Api\Model\Service\Core::$experience)) {
            return \Api\Model\Service\Core::$experience[$id];
        }
        return '';
    }

    /**
     * Get Site Url
     * @param $url
     * @return string
     */
    private function getSystemUrl($url)
    {
        if ($result = substr($url, 0, 7) == 'http://' || $result = substr($url, 0, 7) == 'https:/') {
            return $url;
        } else {
            return Router::url($url, true);
        }
    }

}
