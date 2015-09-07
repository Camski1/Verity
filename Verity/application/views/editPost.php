
<?php
	$this->load->helper("form");
	echo validation_errors();

	$stid = $_GET['storyID'];

	foreach ($results as $rows) {
		$title = $rows->title;
		$img = $rows->storypic;
		$story = $rows->story;
		$link = $rows->link;
	}

	echo "
	<div id='writeStory'>
	<form action='http://localhost:8888/Verity/index.php/VerityMainController/updateUserStoryRun' method='post' accept-charset='utf-8' enctype='multipart/form-data'>
		<input type='hidden' name='id' id='id' value='$stid'><br>

		<label for='title'>Title</label><br>
		<input type='text' name='title' placeholder='Title' value='$title'><br>

		<label for='link'>Source</label><br>
		<input type='text' name='link' placeholder='Source' value='$link'><br>

		<label for='story'>Post</label><br>
		<textarea name='story' id='story' rows='10' cols='80'>
        $story
   		</textarea><br>

		<label for='userfile'>Image (JPG/PNG)</label>
		<input name='userfile' type='file'/><br/>

		<input type='submit' value='Post'>

	</form>
</div>
	";


?>




