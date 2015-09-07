<?php 

	
    
	foreach ($result as $rows) {
	$title = $rows->title;
	$img = $rows->storypic;
	$storyID = $rows->id;
	$date = $rows->date;
	$storyID = $rows->id;

	echo "
	
	<div class='stories'>
	<a href='http://localhost:8888/Verity/index.php/VerityMainController/stories?storyID=$storyID'><div>
	<img class='story' src='http://localhost:8888/Verity/img/$img'>
	<img class='clock' src='http://localhost:8888/Verity/img/clock.svg'> $date
	<hr>
	<h2>$title</h2>
	</div></a>
	<a class='userED' href='http://localhost:8888/Verity/index.php/VerityMainController/updateUserStory?storyID=$storyID'>Edit</a> 
	<a class='userED' href='http://localhost:8888/Verity/index.php/VerityMainController/deleteStory?storyID=$storyID'>Delete</a>
	</div>
	
	";


}


?>
