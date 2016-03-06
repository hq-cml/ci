<?php
class Pages extends CI_Controller {
    public function index(){
        $this->output->enable_profiler(TRUE);
        echo "hello world";
    }

    public function my_show_404(){
        show_404();
    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function my_404(){
        set_status_header(404, "my not found!");
    }

    public function my_show_error(){
        show_error('Test something wrong', 500, 'HAHA');
    }

    public function my_log_message(){
        log_message('error', 'Some error.');
    }

    //基准测试类
    public function bench(){
        $this->benchmark->mark('my_test_start');

        // Some code happens here
        sleep(2);

        $this->benchmark->mark('my_test_end');

        echo $this->benchmark->elapsed_time('my_test_start', 'my_test_end');
        $this->output->enable_profiler(TRUE);
    }
}