<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Connector_twitter extends CI_Driver
{
    public function get_twitts()
    {
        return 'hello world!';
    }

    public function get_friends()
    {
        return '@vanya, @stepa ';
    }
}
