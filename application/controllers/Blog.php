<?php

/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 3/3/16
 * Time: 8:27 AM
 */
class Blog extends CI_Controller {

    public function index()
    {
        echo 'Hello World!';
    }

    //测试参数传入
    public function params($p1, $p2)
    {
        echo $p1;
        echo "<br>";
        echo $p2;
    }

    //自定义路由规则，重写默认的使用URI中的分段来决定调用哪个方法这种行为
    public function _remap($method)
    {
        if ($method === 'some_method')
        {
            $this->$method();
        }
        else
        {
            //如果调用一个随便不存在的方法，则一律调用index，而不再是404
            $this->index();
        }
    }
}