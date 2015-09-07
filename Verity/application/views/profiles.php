<div id="profile">



<?php 
	foreach ($result as $rows) {
	$userName= $rows->userName;
	$img = $rows->pic;
	$profile = $rows->profile;
	$id = $rows->userID;

	$this->load->model('model_get');
	$theID = $this->model_get->userIDFind();	
			
	$theID = $theID[0]->userID; 

	$checkFoll = array(
		'userID' => $theID,
		'subName' => $id
	);
	$dataFoll= $this->model_get->ifFollowing($checkFoll);

	$TF = $dataFoll[0]->TF;

	if ($TF == 1) {
		$BTN = "<div class='follow'><a href='http://localhost:8888/Verity/index.php/VerityMainController/un_follow?userID=$id'>Unfollow</a></div>";
	}else{
		$BTN = "<div class='follow''><a href='http://localhost:8888/Verity/index.php/VerityMainController/following?userID=$id'>Follow</a></div>";
	}

	echo "
	
	$BTN
	<img src='http://localhost:8888/Verity/img/$img'>
	<p>Hi I'm $userName,<br>$profile</p>
	";
}
 

?>

				 
			</div>