<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Model
{

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
    public function selectPosts()
    {
        $this->db->from('posts');
        $result = $this->db->get();
        return $result->result_array();
    }

    public function selectThePost($id_post)
    {
        $this->db->from('posts');
        $this->db->where('id_post', $id_post);
        $result = $this->db->get();
        return $result->result_array();
    }

}
