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

    public function selectPostsByTg($id_tag)
    {
        $this->db->from('posts');
        $this->db->where('id_tag', $id_tag);
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

    public function removePost($id_post)
    {
        $this->db->from('posts');
        $this->db->where('id_post', $id_post);
        $result = $this->db->delete();
        return $result;
    }

    public function updatePost($id_post, $data)
    {
        $this->db->where('id_post', $id_post);
        $this->db->set($data);
        $result = $this->db->update('posts');
        return $result;
    }

}
