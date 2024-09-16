<?php
class Trongate_security extends Trongate {

    /**
     * Ensures the user is allowed access for the specified scenario.
     *
     * @param string $scenario The scenario for access control. Default is 'admin panel'.
     * @return string Returns a (trongate) token or initializes the 'not allowed' procedure.
     */
    public function _make_sure_allowed(string $scenario = 'admin panel'): string {
        //returns EITHER (trongate)token OR initialises 'not allowed' procedure

        switch ($scenario) {
            case 'agent':
                $this->module('app');
                $token = $this->app->_make_sure_allow_agent();
                break;
                case 'admin':
                   $this->module('admin');
                   $token = $this->app->_make_sure_allow_admin();
                   break;
                   case 'costumer':
                    $this->module('costumer');
                    $token = $this->app->_make_sure_allow_costumer();
                    break;
            default:
                $this->module('trongate_administrators');
                $token = $this->trongate_administrators->_make_sure_allowed();
                break;
        }

        return $token;
    }
}
