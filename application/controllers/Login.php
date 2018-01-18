<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent ::__construct();
        $this->load->model('m_login');
    }
    function index(){
        if($this->session->userdata('logged_in'))
        {
        redirect('dashboard', 'refresh');
        }else{
        $this->load->helper(array('form'));
        $this->load->view('pages/login');
        }
    }
    function cek_login(){
        $email = $this->input->post('email');
		$password = $this ->input->post('password');
		$where = array(
			'email' => $email,
            'password' => $password
		);
		$res = $this->m_login->signin($where, 'user')->result();
		if($res){
            $session_data = array(
					'id' => $res[0]->id,
					'email' => $res[0]->email,
				);
				$this->session->set_userdata('logged_in', $session_data);
				redirect('dashboard', 'refresh');
		}else{
			echo "<script>alert('Email or Password is Wrong!');document.location='" . base_url() . "login'</script>";
			redirect('/', 'refresh');
		}

    }

    public function logout(){
		session_destroy();
		redirect('/', 'refresh');
	}

}