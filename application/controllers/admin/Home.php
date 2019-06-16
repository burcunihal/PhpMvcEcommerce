<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		//oturum açma 
		
		
		if(!$this->session->userdata('oturum_data')){
			redirect(base_url().'admin/login');
		}
	}
	
	

	
	public function index()
	
	{
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_siderbar');
		$this->load->view('admin/_main_content');
		$this->load->view('admin/_footer');
	}
	public function login()
	{
		$this->load->view('admin/login_formu');
	}
}
