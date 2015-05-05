<?php

/**
* home主页控制器
*/
class HomeController extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('home');
	}
}

?>