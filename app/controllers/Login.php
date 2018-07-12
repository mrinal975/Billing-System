<?php

class Login extends DController
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function login(){
		$this->load->view('web\login_own');

	}

}
?>