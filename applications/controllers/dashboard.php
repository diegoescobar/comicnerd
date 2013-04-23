<?php 
class dashboard extends CI_Controller {

	function index(){
	
	
	}

	function alerts(){
	
	
	}
	
	function notifications(){
		$time = date('Y-m-d',strtotime('wednesday this week')); 

		$this->db->query('SELECT * FROM user_series WHERE series_id IN (SELECT id FROM comics_weekly WHERE release_date ={$time} )');
	
	}

}