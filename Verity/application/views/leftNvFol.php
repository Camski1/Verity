
				
				<div id='foll'>
<?php 
					foreach ($results as $rows) {
					$userName = $rows->userName;
					$img = $rows->pic;
					$userID = $rows->subName;
					

					echo " 
					<div class='trends'><a href='http://localhost:8888/Verity/index.php/VerityMainController/profiles?userID=$userID'><img src='http://localhost:8888/Verity/img/$img'><h3>$userName</h3></div></a>
					"; 
					}

?>
		</div>
				
						
			