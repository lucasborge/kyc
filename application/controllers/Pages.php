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
	 }

	public function index()
	{
		$this->load->view('login');
	}

	public function searchusers()
	{
		$this->load->view('searchusers');
	}

	public function searchlist()
	{
		$nrn = $this->input->post('nrn');
		$lname = $this->input->post('last_name');
		$fname = $this->input->post('first_name');

		$where = array ();
		if  ($nrn)
			$where['NRN'] = $nrn;
		if  ($lname)
			$where['STR_FN1'] = $lname;
		if  ($fname)
			$where['STR_FN2'] = $fname;

		$clients = $this->page_model->get_client_data ($where);

		$data['clients'] = $clients;
		
		if (count ($clients) > 1) {
			$this->load->view('searchlist', $data);
		} else {
			$this->load->view('approve', $data);
		}
		
	}
}
