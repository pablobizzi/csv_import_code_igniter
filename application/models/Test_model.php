<?php
class Test_model extends CI_Model {
  
    function __construct() {
        parent::__construct();
    }

    function insert_csv($data) {
        $this->db->insert('something', $data);
    }
}