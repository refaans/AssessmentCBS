<?php

class M_data extends CI_Model{
	function fetching_data(){
		return $this->db->get('nilai');
	}
}