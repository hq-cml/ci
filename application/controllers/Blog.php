<?php

/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 3/3/16
 * Time: 8:27 AM
 */
class Blog extends CI_Controller {
    //如果打算在控制器中使用构造函数,必须先调用父类构造函数
    //原因是构造函数将会覆盖父类的构造函数，所以要手工的调用它
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function index()
    {
        //向页面添加动态数据
        $data['todo_list'] = array('hello', 'world', '!');
        //加载并显示页面blogview
        $this->load->view('blogview', $data);
    }

    //测试参数传入
    public function params($p1, $p2)
    {
        echo $p1;
        echo "<br>";
        echo $p2;
    }

    /*
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
    */

    public function blog()
    {
        $this->load->model('blog_model','',TRUE);

        $data['query'] = $this->blog_model->get_last_ten_entries();
        print_r($data);
        //$this->load->view('blog', $data);
    }

    public function blog_insert()
    {
        $this->load->model('blog_model', '', TRUE);

        $result = $this->blog_model->insert_entry();
        var_dump($result);
    }
}