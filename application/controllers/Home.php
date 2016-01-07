<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $head;
	var $foot;

		public function __construct()
	{
		parent::__construct();
		//$this->load->library(array('Data_lib','session'));
		$this->load->helper(array('url'));
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$this->head =  $this->load->view('common/head',$data,true);
		$this->foot =  $this->load->view('common/foot',$data,true);
		$this->left =  $this->load->view('common/left',$data,true);
	}

	public function index()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('home', $data);
	}


	public function add_company()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('add_company', $data);
	}

	public function add_drive()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('add_drive', $data);
	}

	public function add_department()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('add_department', $data);
	}


	public function register()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('register', $data);
	}

	public function user_registeration()
	{
		echo "hello";
		die;
		$university_roll_number = '';


		if ($x = $this->input->post('university_roll_number')) {
			$university_roll_number = $x;
		}

		echo $university_roll_number;

		// 	$data = array(
		// 		'coupon_id' => $coupon_id,
		// 		'user_id' => $user_id,
		// 		'coupon_code' => $coupon_code
		// 		);
		// $result = $this->data_lib->addUserCoupon($data);
		// if ($result) {
		// 	redirect(base_url('Home/user_coupons'));
		// }
		// else {
		// 	die("Some error Occured..:(");
		// }

	}

	public function add_subject()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('add_subject', $data);
	}



}
