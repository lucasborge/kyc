<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tele_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        private $tbl_secondary = "telephone_directory";
        private $tbl_sync_telephone = "sync_telephone";

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_telephone_data($where, $nrn_status = false)
        {
                $str = "";
                foreach ($where as $field => $value) {
                        $str .= " and " . $field . " like '%" . $value . "%'";
                }

                $query = $this->db->query("select * from " . $this->tbl_secondary . " where 1 " . $str . " limit 10");

                return $query->result();
        }

        public function unsync_telephone_data ($nrn)
        {
                $this->db->query("update " . $this->tbl_secondary . " set NRN = '' where NRN = '" . $nrn . "'");
                return 1;
        }

        public function get_telephone ($id) 
        {
                $this->db->select();
                $this->db->from ($this->tbl_secondary);
                $this->db->where ("id = " . $id);
                $query = $this->db->get ();

                return $query->result();
        }

        public function set_telephone_sync($id, $nrn)
        {
                $this->db->query("update " . $this->tbl_secondary . " set NRN = '" . $nrn. "' where id = '" . $id . "'");
                return $this->get_telephone ($id);
        }

        public function get_sync_tele_status ($nrn)
        {
                $this->db->select('count(*) as cnt');
                $this->db->from ($this->tbl_secondary);
                $this->db->where ("NRN = " . $nrn);
                $query = $this->db->get ();

                $res = $query->result();
                return $res[0]->cnt;
        }

        public function get_sync_tele ($nrn)
        {
                $this->db->select();
                $this->db->from ($this->tbl_secondary);
                $this->db->where ("NRN = " . $nrn);
                $query = $this->db->get ();

                return $query->result();
        }

}
?>