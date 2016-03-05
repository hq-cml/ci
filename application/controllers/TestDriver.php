<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestDriver extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->driver('connector');
    }

    public function friends()
    {
        echo '我社交网络的朋友: ';
        echo $this->connector->get_friends();
        //同时从两个站点获得
    }

    public function twitts()
    {
        echo $this->connector->twitter->get_twitts();
        // Twitter记录
    }
}
