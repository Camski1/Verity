<?php
	$this->load->helper("form");
	echo "<div id='writeStory'>";
	echo validation_errors();
	echo form_open_multipart("http://localhost:8888/Verity/index.php/VerityMainController/updateProfile");

	foreach ($allthat as $rows) {
	$about = $rows->profile;
	$img = $rows->pic;
    }

	echo form_label("About You:", "about");
	    echo "<br/>";
	    $data = array(
	        "name" => "about",
	        "id" => "about",
	        "value" => "{$about}",
	        'rows' => '20',
      		'cols' => '122'
	    );
	    echo form_textarea($data);

	    echo "<br/>";

	    echo form_label("Profile Picture JPEG/PNG:", "userfile");

	    $data = array(
	        "name" => "userfile",
	        "id" => "userfile",
	        "value" => "{$img}"
	    );
	    echo form_upload($data);
	    echo "<br/>";

	    echo form_submit('mysubmit', 'Submit!');



	echo form_close();
	echo "</div>";
?> 