<div id="popUp">
				<div id="popUpCont">
					<h1>Terms of Use</h1>
					<hr>
					<p>Commander William Adama: There's a reason you separate 
					military and the police. One fights the enemies of the state, 
					the other serves and protects the people. When the military 
					becomes both, then the enemies of the state tend to 
					become the people.</p>
					<hr>
					

 <?php 
    
    $this->load->helper("form");
    
    echo validation_errors();

    $attributes = array('class' => 'email', 'id' => 'popUpCont');
    echo form_open("http://localhost:8888/Verity/index.php/VerityMainController/find_user",$attributes); 

    echo form_label("Email:", "email");
    echo "<br/>";
    $data = array(
        "name" => "email",
        "id" => "email",
        "value" => ""
    );
    echo form_input($data);
    echo "<br/>";
    echo form_label("Password:", "password");
    echo "<br/>";
    $data = array(
        "name" => "password",
        "id" => "password",
        "value" => ""
    );
    echo form_password($data);
    echo "<br/>";
    echo form_submit('thissubmit', 'Submit');

    echo form_close();
    echo "<hr>";
 	

	////////////////////////////////////////////////////

    
    $attribute = array('class' => 'email', 'id' => 'rightForm');
    echo form_open('http://localhost:8888/Verity/index.php/VerityMainController/set_user',$attribute);

    echo form_label("User Name:", "userName");
    echo "<br/>";
    $data = array(
        "name" => "userName",
        "id" => "userName",
        "value" => ""
    );
    echo form_input($data);

    echo "<br/>";

    echo form_label("Email:", "email");
    echo "<br/>";
    $data = array(
        "name" => "email",
        "id" => "email",
        "value" => ""
    );
    echo form_input($data);

    echo "<br/>";

    echo form_label("Password:", "pass");
    echo "<br/>";
    $data = array(
        "name" => "pass",
        "id" => "pass",
        "value" => ""
    );
    echo form_password($data);

    echo "<br/>";

    echo form_label("Re-Password:", "Re_pass");
    echo "<br/>";
    $data = array(
        "name" => "re_pass",
        "id" => "re_pass",
        "value" => ""
    );
    echo form_password($data);

    echo "<br/>";

    

    echo form_submit('mysubmit', 'Submit');

    echo form_close();
    ?>	
    <div class="can"><a href="<?php echo base_url(); ?>VerityMainController/home">Cancel</a></div>

		            <!--<form id="rightForm">
			            <label for="username">Username</label><br>
			            <input id="FName" type="text" name="username" title="username" placeholder="Username" required><br>

			            <label for="email">Email</label><br>
			            <input id="FName" type="email" name="email" title="email" placeholder="Email" required><br>

			            <label for="pass">Password</label><br>
			            <input id="LName" type="text" name="pass" title="Password" placeholder="Password" required><br>

			            <label for="re-pass">Re-Password</label><br>
			            <input id="LName" type="text" name="re-pass" title="Re-Password" placeholder="Re-Password" required><br>

			            <a href="signedIn.html">Submit</a>
			            <a href="<?php //echo base_url(); ?>VerityMainController/home">Cancel</a>
			            
		            </form>-->
	            </div> 

			</div>