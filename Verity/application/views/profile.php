<div id="profile">

<?php 
	foreach ($allthat as $rows) {
	$userName= $rows->userName;
	$img = $rows->pic;
	$profile = $rows->profile;

	echo "
	<div id='editProf'><a href='http://localhost:8888/Verity/index.php/VerityMainController/editProfile'><p>Edit</p></a></div>
	<img class = 'fix' src='http://localhost:8888/Verity/img/$img'>
	<p class = 'fix'>Hi I'm $userName,<br>$profile.</p>
	";
} 


?>

				 
			</div>