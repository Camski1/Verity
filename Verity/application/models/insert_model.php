<?php
class insert_model extends CI_Model{
	function __construct() {
	parent::__construct();
	}

	function form_insert($info){
	
	$this->db->insert('user', $info);
	
	} 

	function comm_insert($info){
	
	$this->db->insert('comments', $info);
	
	}

	function insert_story($info){
	
	$this->db->insert('stories', $info); 
	}

	function updateUserInfo($info){

		$cont = $this->session->all_userdata();
		$email = $cont['email'];
	
		$this->db->where('email',$email);
        $this->db->update('user',$info);

	}

	function deleteStry($info){

		$this->db->where('id', $info);
		$this->db->delete('stories');

	}

	function updateStry($info){
		$this->db->where('id',$info['id']);
        $this->db->update('stories',$info);
	}

	function sendPost($info){
		$sql = "Select * from stories order by likes DESC limit 9;";
		$query = $this->db->query($sql);
	}

	function ups($info){
		$sql = "update stories set likes = likes +1 where id = $info;";
		$query = $this->db->query($sql);
	}

	function downs($info){
		$sql = "update stories set likes = likes -1 where id = $info;";
		$query = $this->db->query($sql);
	}

	function followU($info){
	
	$this->db->insert('following', $info);
	
	} 
	
	function unFollow($info){

		$id = $info['userID'];
		$sub = $info['subName'];

		$sql = "delete from following where userID = '$id' and subName = '$sub';";
		$query = $this->db->query($sql);
	}

}
?> 