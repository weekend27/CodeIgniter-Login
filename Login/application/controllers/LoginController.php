<?php

/**
* 登录控制器
*/
class LoginController extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('login');
	}

	public function checkLogin(){
		$this->form_validation->set_rules('username','Username','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|callback_verifyUser');

		if($this->form_validation->run() == false){		//运行验证程序
			$this->load->view('login');
		}else{
			redirect('HomeController/index');	//跳转到home主页		
		}
	}

	public function verifyUser(){
		$name = $this->input->post('username');		//取得输入数据
		$pass = $this->input->post('password');		//取得输入数据

		$this->load->model('LoginModel');

		if($this->LoginModel->login($name,$pass)){
			return true;
		}else{
			$this->form_validation->set_message('verifyUser','Incorrect Email or Password, please try again!');
			return false;
		}
	}
}

?>