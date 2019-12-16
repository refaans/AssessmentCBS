<?php
defined('BEASEPATH') OR exit('No direct script access allowed')

// Data set

class M_nbclassifier extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	// Fetching Data ---> P(X|Y) = the_result

	public function get_parameter($parameter, $val_param, $status){

		//count 
		$check_prob = "
			SELECT count(status) from nilai where $parameter = '$val_param' and status = $status "

		//apply laplace corection if probability = 0	
		if ($check_prob == 0){
			$sql = "
				SELECT (SELECT (count(status)+1) from nilai where $parameter = '$val_param' and status ='$status')/(count(status)+2) as the_result from nilai where status = '$status'; "
		} else{
			$sql = "
				SELECT (SELECT count(status) from nilai where $parameter = '$val_param' and status ='$status')/count(status) as the_result from nilai where status = '$status'; "
		}

		$query = $this->db->query($sql);
		return $query->row();

	}

}