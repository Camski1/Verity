<?php
foreach ($results as $rows) {
	$userName = $rows->userName;
	$pic = $rows->pic;
	$userID = $rows->userID;
	$comment = $rows->comment;



	echo "
	<div id='comments'>
		<div class='trends'><a href='http://localhost:8888/Verity/index.php/VerityMainController/profiles?userID=$userID'><img src='http://localhost:8888/Verity/img/$pic'><h3>$userName</h3></div></a>
		<p>$comment</p>
	</div>
	";


}
?>











