<?php
foreach ($results as $rows) {
	$title = $rows->title;
	$img = $rows->storypic;
	$story = $rows->story;
	$link = $rows->link;
	$likes = $rows->likes;
	$userName = $rows->userName;
	$userID = $rows->userID;

	$PM = '';
	if ($likes > 0) {
		$PM = '+';
	}else{
 
	}

	$info = $_GET['storyID'];

	echo "
	<div id='view_stroy'>
		<img src='http://localhost:8888/Verity/img/$img'>
		<h1>$title</h1>
		<a href='http://localhost:8888/Verity/index.php/VerityMainController/profiles?userID=$userID'><h3>$userName</h3></a>
		<p>$story</p>
		<a href='link'><h3>Source</h3></a>

	</div>	

	<div id='votes'>
		<h3>$PM $likes</h3>
		<a href='http://localhost:8888/Verity/index.php/VerityMainController/upVote?storyID=$info'><img class='mid' src='http://localhost:8888/Verity/img/up.svg'></a>	
		<a href='http://localhost:8888/Verity/index.php/VerityMainController/downVote?storyID=$info'><img class='voteRight'src='http://localhost:8888/Verity/img/down.svg'></a>	
	</div> 
	";
}
?>

	
			
				
				
				
			

		