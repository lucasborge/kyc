<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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

		$this->load->model("profile_model");
		$this->load->helper("url");
	 }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function setprofile()
	{
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$mobilenumber = $this->input->post('mobilenumber');
		$password = $this->input->post('password');
		$nrn = $this->input->post('region_number');

		$client = $this->profile_model->get_client($nrn);

		$pdata = array ('FIRST_NAME' => $firstname, 'LAST_NAME' => $lastname, 'EMAIL' => $email, 'COUNTRY' => $country, 'MOBILE_NUMBER' => $mobilenumber, 'PASSWORD' => $password, 'NRN' => $nrn);

		if (count ($client) == 0)
			$status = $this->profile_model->set_client($pdata);
		else
			$status = $this->profile_model->update_client($pdata, $nrn);

		$client = $this->profile_model->get_client($nrn);

		$data['client'] = $client;

		$this->load->view('profile', $data);
	}

	public function register_private()
	{
		$id = $this->input->post('id');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$home = $this->input->post('home');
		$birth = $this->input->post('birth');
		$place = $this->input->post('place');
		$national = $this->input->post('national');
		$nrn = $this->input->post('nrn');
		$passno = $this->input->post('passno');
		$driverno = $this->input->post('driverno');
		$per_addr1 = $this->input->post('per_addr1');
		$per_addr2 = $this->input->post('per_addr2');
		$per_addr3 = $this->input->post('per_addr3');
		$post_code = $this->input->post('post_code');
		$country = $this->input->post('country');
		$postal_addr = $this->input->post('postal_addr');
		$profesion = $this->input->post('profesion');
		$employer = $this->input->post('employer');

		$pdata = array ('FIRST_NAME' => $firstname, 'MIDDLE_NAME' => $middlename, 'LAST_NAME' => $lastname, 'EMAIL' => $email, 'MOBILE_NUMBER' => $mobile, 'HOME_NUMBER' => $home, 'DOB' => $birth, 'POB' => $place, 'NATIONALITY' => $national, 'PASSPORTNO' => $passno, 'DRIVERNO' => $driverno, 'ADDRESS1' => $per_addr1, 'ADDRESS2' => $per_addr2, 'ADDRESS3' => $per_addr3, 'POST_CODE' => $post_code, 'COUNTRY' => $country, 'POSTAL_ADDRESS' => $postal_addr, 'PROFESION' => $profesion, 'EMPLOYER' => $employer);

		$status = $this->profile_model->update_client($pdata, $nrn);

		print_r($pdata);
		exit;
	}

	public function upload_image()
	{
		$nrn = $_REQUEST['nrn'];
		$type = $_REQUEST['type'];

		if (isset($_FILES[0])) {
			$file = $_FILES[0];
			$upload_dir = "asset/upload/id/";
			$filename = basename($file['name']);
			preg_match("/.*\.([a-zA-Z0-9]+)$/", $filename, $filenameinfo);
			$ext = $filenameinfo[1];
			$newfilename = $type . $nrn . "." . $ext;

			if (move_uploaded_file($file['tmp_name'], $upload_dir . $newfilename)) {
				$fileurl = "/" . $upload_dir . $newfilename;
				echo json_encode(array('status' => true, 'url' => $fileurl));
			} else {
				echo json_encode(array('status' => false, 'url' => ""));
			}
		} else {
			echo json_encode(array('status' => false, 'url' => "", 'msg' => "Please select correct file!"));
		}
		exit;
	}

}
