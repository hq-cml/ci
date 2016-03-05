<?php

/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 3/5/16
 * Time: 9:23 AM
 */
class Blog_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('blog', 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->title    = $_REQUEST['title']; // please read the below note
        $this->content  = $_REQUEST['content'];
        $this->date = time();

        $this->db->insert('blog', $this);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date = time();

        $this->db->update('blog', $this, array('id' => $_POST['id']));
    }

}
