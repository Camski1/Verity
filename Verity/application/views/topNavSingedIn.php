
</div> 

			<div class="signIU"><h2>Rules</h2></div>
		</div>

<div id="top_nav">
			<form action='http://localhost:8888/Verity/index.php/VerityMainController/searchR' method='post' accept-charset='utf-8' enctype='multipart/form-data'>
				<input type="search" name="searchbar" placeholder="Search...">
				<input type="submit" value="Search">
			</form>
<?php 
					foreach ($allthat as $rows) {
					$userName = $rows->userName;
					$img = $rows->pic;
					$userID = $rows->userID;
				}
				echo "

		

			<ul class='myMenu'>
			    <li><a href='#''><img src='http://localhost:8888/Verity/img/$img'></a>
			    	<ul>
			        	<li><a href='http://localhost:8888/Verity/index.php/VerityMainController/profile'>Profile</a></li>
			            <li><a href='http://localhost:8888/Verity/index.php/VerityMainController/logout'>Logout</a></li>
			        </ul>
			    </li>
			</ul>"
	?>		
			
		</div>   