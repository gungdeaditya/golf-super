<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('m_main');
	}

  public function index(){
			$data['sql']= $this->m_main->getarticles();
			$this->load->view('pages/golf', $data);
  }

	public function detail($id){
		$where = array('id' => $id);
		$data['article'] = $this->m_main->detail($where,'articles')->result();
		$this->load->view('pages/detail', $data);
  }

	public function login(){
		$data['sql']= $this->m_main->getarticles();
		$this->load->view('pages/dashboard',$data);
  }

	public function dashboard(){
		$data['sql']= $this->m_main->getarticles();
		$this->load->view('pages/dashboard',$data);
  }

	public function add(){
		$this->load->view('pages/add-article');
  }

	public function edit($id){
        $where = array('id' => $id);
        $data['article'] = $this->m_main->edit($where,'articles')->result();
        $this->load->view('pages/add-article',$data);
  }

	public function update(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$created_by = $this->input->post('created_by');
		$img = $this->input->post('img');

		$data = array(
		'title' => $title,
		'content' => $content,
		'created_by' => $created_by,
		'img' => $img);
		
		$where = array(
			'id' => $id
		);
	 
		$res = $this->m_main->update($where,$data,'articles');

		if($res){
			echo "<script> alert('Update sukses!');document.location='" . base_url() . "Main/dashboard'</script>";
		}else{
			$this->load->view('pages/500');
		}
	 }

	public function hapus($id){
		$this->m_main->hapus($id);
		redirect('Main/dashboard');
	}

}