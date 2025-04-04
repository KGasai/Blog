<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends CI_Model {

	public function selectTags()
	{
		$this->db->from('tags');
        $result =$this->db->get();
        return $result -> result_array();
	}

}
