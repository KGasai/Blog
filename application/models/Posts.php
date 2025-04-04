<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Model {

	public function insertPost($title_post, $text_post, $id_tag, $path_img)
{
    $data = array(
        'title_post' => $title_post,
        'text_post' => $text_post,
        'id_tag' => $id_tag,
        'path_img' => $path_img
    );
    
    $this->db->insert('posts', $data);
}

}
