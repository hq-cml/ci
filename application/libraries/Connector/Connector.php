<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Connector extends CI_Driver_Library
{
    public $valid_drivers;
    public $CI;

    function __construct()
    {
        $this->CI = &get_instance();
        $this->valid_drivers = array('twitter', 'facebook');
    }

    public function get_friends()
    {
        return $this->twitter->get_friends() . $this->facebook->get_friends();
    }
}
