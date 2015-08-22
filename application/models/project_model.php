<?php

class Project_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	
	
	
	
	function save($data){

		$this->db->trans_start();
		$this->db->insert('projects', $data);
		$id = $this->db->insert_id();
		
		$this->db->trans_complete();
		return $id;
	}
	
	function save_detail($data){

		$this->db->trans_start();
		$this->db->insert('project_detail_categories', $data);
		$id = $this->db->insert_id();
		
		$this->db->trans_complete();
		return $id;
	}
	
	function save_detail_img($data){

		$this->db->trans_start();
		$this->db->insert('project_detail_images', $data);
		$id = $this->db->insert_id();
		
		$this->db->trans_complete();
		return $id;
	}
	
	function read_id($id)
	{
		$this->db->select('a.*, b.creative_wp_name, c.location_name, b.user_id, b.creative_img', 1); // ambil seluruh data
		$this->db->join('creatives b', 'b.creative_id = a.creative_id');
		$this->db->join('locations c', 'c.location_id = b.location_id');
		$this->db->where('a.project_id', $id);
		$query = $this->db->get('projects a', 1); // parameter limit harus 1
		$result = null; // inisialisasi variabel. biasakanlah, untuk mencegah warning dari php.
		foreach($query->result_array() as $row)	$result = ($row); // render dulu dunk!
		return $result; 
	}
	
	
}