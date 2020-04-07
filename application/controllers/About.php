<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth page
 */
class About extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		redirect('home');
	}

	public function career(){
		$this->load->view('about/career/index');
	}
}
?>