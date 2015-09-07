<?php 

	
    
	foreach ($result as $rows) {
	$title = $rows->title;
	$img = $rows->storypic;
	$storyID = $rows->id;
	$date = $rows->date;
	$storyID = $rows->id;

	echo "
	<a href='http://localhost:8888/Verity/index.php/VerityMainController/stories?storyID=$storyID'><div class='stories'>
	<img class='story' src='http://localhost:8888/Verity/img/$img'>
	<img class='clock' src='http://localhost:8888/Verity/img/clock.svg'> $date
	<hr>
	<h2>$title</h2>
	</div></a>
	";
}


?>
			
			