<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {
	public function index(){
		//echo password_hash("123456",PASSWORD_DEFAULT);
		// $this->load->model("users_model");
		// print_r($this->users_model->get_user_data("pmartins"));
		$data = array(
			"scripts" => array(
				"util.js",
				"login.js"
			)
		);
		$this->template->show('login', $data);
	}
}
