<!DOCTYPE>
<html>
	<head> 
		<title>Verity</title>
		<link rel="stylesheet" type="text/css" href="http://localhost:8888/Verity/css/main.css" /> 
		<script type="text/javascript" src="http://localhost:8888/Verity/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="http://localhost:8888/Verity/js/main.js"></script>
		<script type="text/javascript" src="http://localhost:8888/Verity/ckeditor/ckeditor.js"></script>
		
		
	</head>
	<body>


		<div id='left_nav'>
			<a href='<?php echo base_url(); ?>VerityMainController/home'><img src='http://localhost:8888/Verity/img/logo.svg'></a>
			<div id='proNav' class='trends'><a href='http://localhost:8888/Verity/index.php/VerityMainController/profile'><img src='
<?php 
					foreach ($allthat as $rows) {
					$userName = $rows->userName;
					$img = $rows->pic;
					$userID = $rows->userID;
				}
				
 echo "http://localhost:8888/Verity/img/$img"?>'>

 
 			<h3>Profile</h3></div></a>
			<div id='proNav' class='trends'><a href='<?php echo base_url(); ?>VerityMainController/writePost'><img src='http://localhost:8888/Verity/img/write.svg'><h3>Write Post</h3></div></a>
			
			<div id='left_center'>
