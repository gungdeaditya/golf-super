<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('m_main');
			$this->load->helper(array('url','text'));
	}

	public function index(){
				$data['sql']= $this->m_main->getall();
				$this->load->view('pages/golf', $data);
	}

		public function detail($id){
			$where = array('id' => $id);
			$data['article'] = $this->m_main->detail($where,'articles')->result();
			$this->load->view('pages/detail', $data);
	}

	// public function dashboard(){
	// 	$data['sql']= $this->m_main->getarticles();
	// 	$this->load->view('pages/dashboard',$data);
  // }

	// public function add(){
	// 	$this->load->view('pages/add-article');
  // }

	// public function edit($id){
  //       $where = array('id' => $id);
  //       $data['article'] = $this->m_main->edit($where,'articles')->result();
  //       $this->load->view('pages/add-article',$data);
  // }

	// public function update(){
	// 	if($this->logged_in()){
	// 		$title = $this->input->post('title');
	// 		$content = $this->input->post('content');
	// 		$config = array(
	// 			'upload_path' => "./uploads/",
	// 			'allowed_types' => "gif|jpg|png|jpeg",
	// 			'max_width' => 0,
	// 			'max_height' => 0,
	// 			'max_size' => 0,
	// 			'encrypt_name' => TRUE,
	// 		);
	// 		if ( ! is_dir($config['upload_path']) ){
	// 			echo 'invalid dir';
	// 		}else{
	// 			$this->load->library('upload', $config);
	// 			if($this->upload->do_upload('featuredimage'))
	// 			{
	// 				$data = array(
	// 					'post_title' => $title,
	// 					'post_desc' => $content,
	// 					'post_img' => $this->upload->data('file_name'),
	// 					'post_approved' => false,
	// 					'post_created' => date('Y-m-d H:i:s'),
	// 					'post_createdby' => $_SESSION['logged_in']['id'],
	// 				);
	// 				$res = $this->m_dashboardpost->addpost($data, 'posts');
	// 				if($res){
	// 					echo "<script> alert('Success create new post.');document.location='" . base_url() . "dashboard'</script>";
	// 				}else{
	// 					echo "<script> alert('Failed to create new post.');document.location='" . base_url() . "dashboard'</script>";
	// 				}
	// 			}
	// 			else
	// 			{
	// 				echo 'Something wrong to adding new post!';
	// 			}
	// 		}
	// 	}else{
	// 		redirect('/dashboard', 'refresh');
	// 	}

	// 	$id = $this->input->post('id');
	// 	$title = $this->input->post('title');
	// 	$content = $this->input->post('content');
	// 	$created_by = $this->input->post('created_by');
	// 	$img = $this->input->post('img');

	// 	$data = array(
	// 	'title' => $title,
	// 	'content' => $content,
	// 	'created_by' => $created_by,
	// 	'img' => $img);
		
	// 	$where = array(
	// 		'id' => $id
	// 	);
	 
	// 	$res = $this->m_main->update($where,$data,'articles');

	// 	if($res){
	// 		echo "<script> alert('Update sukses!');document.location='" . base_url() . "Main/dashboard'</script>";
	// 	}else{
	// 		$this->load->view('pages/500');
	// 	}
	//  }

	// public function hapus($id){
	// 	$this->m_main->hapus($id);
	// 	redirect('Main/dashboard');
	// }

}