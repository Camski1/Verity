<?php 

	class Model_get extends CI_Model{

		function getData(){
			$sql = "Select * from stories ORDER BY id desc;";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function popular(){
			$sql = "Select * from stories order by likes desc;";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function search($info){
			$sql = "select * from stories where title like '%$info%' ORDER BY id desc;";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function trending(){
			$sql = "Select * from user LIMIT 2;";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function followFind($info){
			$sql = "select * from following join user on following.subName = user.userID where following.userID = ?;";
			$query = $this->db->query($sql, array($info));
			return $query->result(); 
		}

		function storyFind($info){
			$sql = "select * from stories join user on stories.userID = user.userID where stories.id = ?;";
			$query = $this->db->query($sql, array($info));
			return $query->result();
		} 

		function ifFollowing($info){

			$id = $info['userID'];
			$sub = $info['subName'];

			$sql = "select count(subName) as TF from following where userID = '$id' and subName = '$sub';";
			$query = $this->db->query($sql);
			return $query->result();
		} 

		function storyComm($info){
			$sql = "select * from comments join user on comments.userID = user.userID where storyID = ?;";
			$query = $this->db->query($sql, array($info));
			return $query->result();
		} 

		function profileFind($info){
			$sql = "Select * from user where userID = ?";
			$query = $this->db->query($sql, array($info));
			return $query->result();
		} 

		function profileUser(){
			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$sql = "Select * from user where email = '$email'";
			$query = $this->db->query($sql);
			return $query->result();
		}
 
		function userStories($info){
			$sql = "Select * from stories where stories.userID = ?";
			$query = $this->db->query($sql, array($info));
			return $query->result();

		}

		function userProfStories(){

			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$sql = "select * from user join stories on user.userID = stories.userID where user.email = '$email'";
			$query = $this->db->query($sql);
			return $query->result();

		}

		function userIDFind(){

			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$sql = "select userID from user where email='$email'";
			$query = $this->db->query($sql);
			return $query->result();

		}


		function userFind(){
			$this->db->where('email', $this->input->post('email'));
			$this->db->where('password', $this->input->post('password'));
			$query = $this->db->get('user');

			if ($query->num_rows() == 1) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		function userProfile(){

			if ($this->session->userdata('is_logged_in')) {
			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$sql = "Select * from user where user.email = '$email'";
			$query = $this->db->query($sql, $email);
			return $query->result();
		}else{}
		}

	}	