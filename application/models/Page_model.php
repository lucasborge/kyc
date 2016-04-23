<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        private $tbl_name = "clients";

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_client_data($where)
        {
                $this->db->select();
                $query = $this->db->get_where ($this->tbl_name, $where);
                return $query->result();
        }
}
?>