<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model(array('model'));
    } 

	public function index()
	{
		echo "Welcome users.";
	}

	public function scan($id,$name){
		var_dump($id);
		var_dump($name);
		var_dump($this->uri->segment(2));
		$this->load->view('scan');
	}
}
