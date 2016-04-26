<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
		parent::__construct();
		$this->load->database();

		$this->load->model("page_model");
		$this->load->helper("url");
		$this->load->library("pagination");
	 }

	public function index()
	{
		$this->load->view('login');
	}

	public function searchusers()
	{
		$this->load->view('searchusers');
	}

	public function get_client ()
	{
		$nrn = $this->input->post('nrn');

		$where = array ();
		if  ($nrn)
			$where['NRN'] = $nrn;

		$client = $this->page_model->get_client_data ($where);
		echo json_encode($client);
		return;
	}

	public function searchlist()
	{
		if ($this->uri->segment(3))
		{
			list($nrn, $lname, $fname) = preg_split("/_/", $this->uri->segment(3));
		} else {
			$nrn = $this->input->post('nrn');
			$lname = $this->input->post('last_name');
			$fname = $this->input->post('first_name');
		}

		$where = array ();
		if  ($nrn)
			$where['NRN'] = $nrn;
		if  ($lname)
			$where['STR_LN'] = $lname;
		if  ($fname)
			$where['STR_FN1'] = $fname;

		$config = array();

		$config['base_url'] = base_url() . "pages/searchlist/{$nrn}_{$lname}_{$fname}" ;
		$total_rows = $this->page_model->get_client_count ($where);
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 30;
		$config['uri_segment'] = 4;
		$config['num_links'] = 2;//round ($total_rows / $config['per_page']);
		$config['display_pages'] = true;
		$config['first_link'] = "first";
		$config['last_link'] = "last";
		$config['first_tag_open'] = "<span>";
		$config['first_tag_close'] = "</span>";
		$config['last_tag_open'] = "<span>";
		$config['last_tag_close'] = "</span>";
		$config['num_tag_open'] = "<span>";
		$config['num_tag_close'] = "</span>";
		$config['next_tag_open'] = "<span>";
		$config['next_tag_close'] = "</span>";
		$config['prev_tag_open'] = "<span>";
		$config['prev_tag_close'] = "</span>";
		$config['cur_tag_open'] = "<span class='current-page'>";
		$config['cur_tag_close'] = "</span>";

		$this->pagination->initialize($config);

		$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['clients'] = $this->page_model->get_client_data ($where, $start, $config['per_page']);
		$data['links'] = $this->pagination->create_links();
		$data['start'] = $start;

		if (count ($data['clients']) > 1) {
			$this->load->view('searchlist', $data);
		} else if (count ($data['clients']) == 1) {
			$this->load->view('approve', $data);
		} else {
			$this->load->view('nodata');
		}
		
	}
}
