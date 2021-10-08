<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class apirawat extends CI_Controller {
    
	public function index()
	{
		$this->load->view('css');
		$this->load->view('apirawat_view');
		$this->load->view('js');
	}
}