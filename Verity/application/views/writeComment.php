<?php
$info = $_GET['storyID'];

echo "

<div id='comment'>
	<form action='http://localhost:8888/Verity/index.php/VerityMainController/writeComm?storyID=$info' method='post' accept-charset='utf-8' enctype='multipart/form-data'>
		<input type='hidden' name='id' id='id' value='$info'><br>
		<textarea name='comment' placeholder='Comment'></textarea><br>
		<input type='submit' value='Post'>
	</form> 
</div>
";
?>