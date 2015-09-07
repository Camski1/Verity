<?php

	class Trend_get extends CI_Model{

		function trending(){
			$sql = "Select user.userID, userName, pic, COUNT(title) as count from user join stories on stories.userID = user.userID group by userID order by count desc limit 10;";
			$query = $this->db->query($sql);
			return $query->result();
		}
	}