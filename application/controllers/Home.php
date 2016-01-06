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
	}	

	public function index()
	{
		
		
		
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('home', $data);
	}
}
