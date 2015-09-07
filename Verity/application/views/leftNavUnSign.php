<!DOCTYPE>
<html>
	<head>
		<title>Verity</title>
		<link rel="stylesheet" type="text/css" href="http://localhost:8888/Verity/css/main.css" />
		
	</head>
	<body>
		<div id="left_nav">
			<a href="<?php echo base_url(); ?>VerityMainController/home"><img src="http://localhost:8888/Verity/img/logo.svg"></a>
			<button id="btn1" class='btn1' type="button">Sign In</button>
			<button id="btn1" class='btn1' type="button">Sign Up</button>
			
			<div id="left_center"> 

				<h3>Trending</h3>
<?php 
					foreach ($results as $rows) {
					$userName = $rows->userName;
					$img = $rows->pic;
					$userID = $rows->userID;
					

					echo " 
					<div class='trends'><a href='http://localhost:8888/Verity/index.php/VerityMainController/profiles?userID=$userID'><img src='http://localhost:8888/Verity/img/$img'><h3>$userName</h3></div></a>
					";
					}

?> 
				
				
				
				
			</div>
			<script type="text/javascript" src="http://localhost:8888/Verity/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="http://localhost:8888/Verity/js/main.js"></script>

			<div class="signIU"><h2>Rules</h2></div>
		</div>



