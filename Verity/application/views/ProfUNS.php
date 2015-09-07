<div id="profile">

<?php 
	foreach ($result as $rows) {
	$userName= $rows->userName;
	$img = $rows->pic;
	$profile = $rows->profile;
	$id = $rows->userID;

	echo "
	
	<img src='http://localhost:8888/Verity/img/$img'>
	<p>Hi I'm $userName,<br>$profile</p>
	";
}
 

?>

			 
			</div>