<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function createPost()
    {
        $this->load->model('tags');
        $data['tags'] = $this->tags->selectTags();
        $this->load->view('templates/head.php');
        $this->load->view('templates/navbar_admin');
        $this->load->view('form_create', $data);
        $this->load->view('templates/footer');
    }

    public function addPost()
    {
        if (isset(($_POST))) {
            $data = array();

            if (!empty($_FILES['img_post']['name'])) {
                $img_post = $_FILES['img_post'];
                $img_upload = $img_post['tmp_name'];
                $path_img = 'post_images/' . basename($img_post['name']); 

                if (move_uploaded_file($img_upload, $path_img)) {
                    $data['path_img'] = $path_img;
                } else {
                    $data['upload_error'] = 'Ошибка загрузки файла';
                }
            }

            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }

            $this->load->model('posts');
            if ($this->posts->insertPost($data)) {
                redirect('main/index');
            } else {
                echo 'Возникла ошибка при добавление поста';
            }
        }
    }

    public function editPost()
    {
        if (isset($_GET)) {
            $data = array('id_post' => $_GET['id_post']);
            $this->load->view('templates/head');
            $this->load->view('templates/navbar_admin');
            $this->load->view('form_editpage', $data);
            $this->load->view('templates/footer');
        }
    }

    public function updatePost()
    {
        if (isset($_POST)) {
            $data = array();

            if (!empty($_FILES['img_post']['name'])) {
                $img_post = $_FILES['img_post'];
                $img_upload = $img_post['tmp_name'];
                $path_img = 'post_images/' . basename($img_post['name']); // безопасное имя файла

                if (move_uploaded_file($img_upload, $path_img)) {
                    $data['path_img'] = $path_img;
                } else {
                    $data['upload_error'] = 'Ошибка загрузки файла';
                }
            }

            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }

            $this->load->model('posts');
            $this->posts->updatePost($data['id_post'], $data);
            redirect('main/index');
        }
    }
    public function removePost()
    {
        if (isset($_GET)) {
            $id_post = $_GET['id_post'];
            $this->load->model('posts');
            $this->posts->removePost($id_post);
            redirect('main/index');
        }
    }
}
