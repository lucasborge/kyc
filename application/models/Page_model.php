<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        private $tbl_client = "clients";

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_client ($nrn) {

                $this->db->select();
                $this->db->from ($this->tbl_client);
                $this->db->where ("NRN = " . $nrn);
                $query = $this->db->get ();
                return $query->result();
        }

        public function get_client_data($where, $start = null, $limit = null)
        {
                $this->db->select();
                $this->db->from ($this->tbl_client);

                foreach ($where as $field => $value) {
                        $this->db->like ($field, $value);
                }
                $this->db->order_by ('NRN', 'ASC');

                if (!is_null ($start) || !is_null ($limit)) {
                        $this->db->limit ($limit, $start);
                }
                
                $query = $this->db->get ();

                return $query->result();
        }

        public function get_client_count($where)
        {
                $this->db->select('count(*) as cnt');
                $this->db->from ($this->tbl_client);

                foreach ($where as $field => $value) {
                        $this->db->like ($field, $value);
                }
                $this->db->order_by ('NRN', 'ASC');

                $query = $this->db->get ();

                $res = $query->result();
                return $res[0]->cnt;
        }
}
?>