<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('m_dashboard');
            $this->load->helper(array('url','text'));
            $this->load->helper("file");
	}

  public function index()
	{
		if($this->session->userdata('logged_in')){
			$data['sql'] = $this->m_dashboard->getall();
			// var_dump($data);
			$this->load->view('pages/dashboard',$data);
		}else{
			redirect('/login', 'refresh');
		}
	}

	public function add(){
        $data['pil']='Tambah';
		$this->load->view('pages/add-article',$data);
    }

	public function insert(){
        if($this->session->userdata('logged_in')){
			$title = $this->input->post('title');
			$content = $this->input->post('content');
            $created_by = $this->input->post('created_by');
            $img = $this->input->post('img');
			
            $data = array(
						'title' => $title,
						'content' => $content,
						'img' => $img,
						'created_by' => $created_by
					);
					$res = $this->m_dashboard->addpost($data, 'articles');
					if($res){
						echo "<script> alert('Success create new post.');document.location='" . base_url() . "dashboard'</script>";
					}else{
						echo "<script> alert('Failed to create new post.');document.location='" . base_url() . "dashboard'</script>";
					}
            // $this->load->library('upload', $config);
 
            // if ( ! $this->upload->do_upload('berkas')){
            //     // $error = array('error' => $this->upload->display_errors());
            //     echo "<script> alert('Failed to create new post.');document.location='" . base_url() . "dashboard'</script>";
            // }else{
            //     $data = array(
			// 			'title' => $title,
			// 			'content' => $content,
			// 			'img' => $this->upload->data(),
			// 			'created_by' => $created_by,
			// 		);
			// 		$res = $this->m_dashboard->addpost($data, 'articles');
            //     // $data = array('upload_data' => $this->upload->data());
            //     echo "<script> alert('Success create new post.');document.location='" . base_url() . "dashboard'</script>";
            // }
		}else{
			redirect('/dashboard', 'refresh');
		}
    }

    // public function insert(){
    //     if($this->session->userdata('logged_in')){
	// 		$title = $this->input->post('title');
	// 		$content = $this->input->post('content');
    //         $created_by = $this->input->post('created_by');
    //         $img = $this->input->post('img');
	// 		$config = array(
	// 			'upload_path' => "./uploads/",
	// 			'allowed_types' => "gif|jpg|png|jpeg",
	// 			'max_width' => 0,
	// 			'max_height' => 0,
	// 			'max_size' => 0
	// 			// 'encrypt_name' => TRUE,
	// 		);
	// 		if ( ! is_dir($config['upload_path']) ){
	// 			echo 'invalid dir';
	// 		}else{
	// 			$this->load->library('upload', $config);
	// 			if($this->upload->do_upload('img'))
	// 			{
	// 				$data = array(
	// 					'title' => $title,
	// 					'content' => $content,
	// 					'img' => $this->upload->data('file_name'),
	// 					'created_by' => $created_by,
	// 				);
	// 				$res = $this->m_dashboard->addpost($data, 'articles');
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
    //         }
    //         // $this->load->library('upload', $config);
 
    //         // if ( ! $this->upload->do_upload('berkas')){
    //         //     // $error = array('error' => $this->upload->display_errors());
    //         //     echo "<script> alert('Failed to create new post.');document.location='" . base_url() . "dashboard'</script>";
    //         // }else{
    //         //     $data = array(
	// 		// 			'title' => $title,
	// 		// 			'content' => $content,
	// 		// 			'img' => $this->upload->data(),
	// 		// 			'created_by' => $created_by,
	// 		// 		);
	// 		// 		$res = $this->m_dashboard->addpost($data, 'articles');
    //         //     // $data = array('upload_data' => $this->upload->data());
    //         //     echo "<script> alert('Success create new post.');document.location='" . base_url() . "dashboard'</script>";
    //         // }
	// 	}else{
	// 		redirect('/dashboard', 'refresh');
	// 	}
    // }

	public function edit($id){
        $where = array('id' => $id);
        $data['pil']='Edit';
        $data['article'] = $this->m_dashboard->edit($where,'articles')->result();
        $this->load->view('pages/add-article',$data);
  }


  public function update(){
	  	if($this->session->userdata('logged_in')){
			$id = $this->input->post('id');
			$title = $this->input->post('title');
			$content = $this->input->post('content');
            $created_by = $this->input->post('created_by');
            $img = $this->input->post('img');
			
            $data = array(
						'title' => $title,
						'content' => $content,
						'img' => $img,
						'created_by' => $created_by
					);
			$where = array(
			'id' => $id
		);
	 
		$res = $this->m_dashboard->update($where,$data,'articles');

		if($res){
			echo "<script> alert('Update sukses!');document.location='" . base_url() . "dashboard'</script>";
		}else{
			$this->load->view('pages/500');
		}
            // $this->load->library('upload', $config);
 
            // if ( ! $this->upload->do_upload('berkas')){
            //     // $error = array('error' => $this->upload->display_errors());
            //     echo "<script> alert('Failed to create new post.');document.location='" . base_url() . "dashboard'</script>";
            // }else{
            //     $data = array(
			// 			'title' => $title,
			// 			'content' => $content,
			// 			'img' => $this->upload->data(),
			// 			'created_by' => $created_by,
			// 		);
			// 		$res = $this->m_dashboard->addpost($data, 'articles');
            //     // $data = array('upload_data' => $this->upload->data());
            //     echo "<script> alert('Success create new post.');document.location='" . base_url() . "dashboard'</script>";
            // }
		}else{
			redirect('/dashboard', 'refresh');
		}
	}

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

	public function hapus($id){
		$this->m_dashboard->hapus($id);
		redirect('dashboard');
	}

}