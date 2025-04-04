<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function createPost()
	{
        $this -> load->model('tags');
        $data['tags'] = $this ->tags ->selectTags();
		$this->load->view('templates/head.php');
		$this->load->view('templates/navbar_admin');
		$this->load->view('form_create',$data);
		$this->load->view('templates/footer');
	}

    public function addPost(){
        if(isset(($_POST)) && isset($_FILES)){
			$title_post = $_POST['title_post'];
			$text_post = $_POST['text_post'];
            $id_tag = $_POST['id_tag'];
            $img_post = $_FILES['img_post'];
            $img_upload = $img_post['tmp_name'];
            $path_img = 'post_images/'.$img_post['name'];
            
            move_uploaded_file($img_upload, $path_img);

            $this -> load->model('posts');
            $this -> posts ->insertPost($title_post , $text_post, $id_tag, $path_img);
            redirect('main/index');
        }
	}
}
