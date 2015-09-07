<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerityMainController extends CI_Controller {
	
	function VerityMainController(){
           parent::__construct();
       } 

	public function index()   
	{ 
		$this->home(); 
	}

	public function home() 
	{	 
		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

			$profpic["allthat"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->getData();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('footer');

		}else{
			$this->load->model('model_get');
			$this->load->model('trend_get');
			$data["result"] = $this->model_get->getData();
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('popUp');
			$this->load->view('footer');
		}
		
	}

	public function popular() 
	{

		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

			$profpic["allthat"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->popular();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('footer');

		}else{

			$this->load->model('model_get');
			$this->load->model('trend_get');
			$data["result"] = $this->model_get->popular();
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('popUp');
			$this->load->view('footer');
		}
		
	}

	public function searchR() 
	{

		$info = $this->input->post('searchbar');
			

		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

			$profpic["allthat"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->search($info);
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('footer');

		}else{

			$this->load->model('model_get');
			$this->load->model('trend_get');
			$data["result"] = $this->model_get->search($info);
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('popUp');
			$this->load->view('footer');
		}
		
	}

	public function newest() 
	{	
		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

			$profpic["allthat"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->getData();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('footer');

		}else{
			$this->load->model('model_get');
			$this->load->model('trend_get');
			$data["result"] = $this->model_get->getData();
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('popUp');
			$this->load->view('footer');
		}

	}

	public function allTime() 
	{	
		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

			$profpic["allthat"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->popular();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('footer');

		}else{
			$this->load->model('model_get');
			$this->load->model('trend_get');
			$info["results"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->popular();
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popular', $data);
			$this->load->view('popUp');
			$this->load->view('footer');
		}
		
	}


	public function stories() 
	{	
		if ($this->session->userdata('is_logged_in')) {

			$info = $_GET['storyID'];
			$this->load->model('trend_get');
			$this->load->model('model_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

			$profpic["allthat"] = $this->model_get->userProfile();
			$data["results"] = $this->model_get->storyFind($info);
			$comms["results"] = $this->model_get->storyComm($info);
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('readStory', $data);
			$this->load->view('writeComment');
			$this->load->view('readComment',$comms);
			$this->load->view('footer');

		}else{
			$info = $_GET['storyID'];
			$this->load->model('trend_get');
			$this->load->model('model_get');
			$data["results"] = $this->model_get->storyFind($info);
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popUp');
			$this->load->view('readStory', $data);
			$this->load->view('footer');
		}
		
	}

	public function profiles() 
	{	
		if ($this->session->userdata('is_logged_in')) {

			$info = $_GET['userID'];
			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 


			$profpic["allthat"] = $this->model_get->userProfile();
			$data["result"] = $this->model_get->userStories($info);
			$prof["result"] = $this->model_get->profileFind($info);
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('profiles',$prof);
			$this->load->view('popular', $data);
			$this->load->view('footer');

		}else{
			$info = $_GET['userID'];
			$this->load->model('model_get');
			$this->load->model('trend_get');
			$data["result"] = $this->model_get->userStories($info);
			$trending["results"] = $this->trend_get->trending();
			$prof["result"] = $this->model_get->profileFind($info);
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popUp');
			$this->load->view('ProfUNS',$prof);
			$this->load->view('popular', $data);
			$this->load->view('footer');
		}
		
	}

	public function profile() 
	{	
		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 


			$profpic["allthat"] = $this->model_get->profileUser();
			$data["result"] = $this->model_get->userProfStories();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('profile',$profpic);
			$this->load->view('userStories', $data);
			$this->load->view('footer');

		}else{
			
		}
		
	}

	public function writePost() 
	{	
		if ($this->session->userdata('is_logged_in')) {

			$this->load->model('model_get');
			$this->load->model('trend_get');

			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 


			$profpic["allthat"] = $this->model_get->profileUser();
			$data["result"] = $this->model_get->userProfStories();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('writePost');
			$this->load->view('footer');

		}else{
			
		}
		
	}


	public function set_user() 
	{	
		$this->load->helper('date');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userName', 'User Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		
		//echo $this->input->post('userName');
		if($this->form_validation->run()){
			
			$info = array(
			'userID' => $this->input->post('userName').rand(5, 1005).time(),
			'userName' => $this->input->post('userName'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'),
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->form_insert($info);
			
			$this->home();
			
			
		}else{

			$this->home();
		}
	}

	public function find_user()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|callback_validate_user');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()){

			$info = array(
				'email' => $this->input->post('email'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($info);
			$this->home();
		}else{
			$this->home();
		}
	}

	public function validate_user(){
		$this->load->model('model_get');

		if ($this->model_get->userFind()) {
			return TRUE;
		}else{
			$this->form_validation->set_message('validate_user', 'Incorrect Email/Password');
			return FALSE;
		}

	}

	public function editProfile(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_get');
			$this->load->model('trend_get');
			$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 
			$profpic["allthat"] = $this->model_get->profileUser();
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('editProfile',$profpic);
			$this->load->view('footer');
			
		}else{

		}
		
	}


	public function updateProfile(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('about', 'About You', 'required');

		if($this->form_validation->run() == FALSE){
			
			$this->profile();
			
		}else{
			
			$type = str_replace("image/", ".", $_FILES['userfile']['type']);

			if ($type == ".jpeg" || $type == ".png") {
			$local = '/Users/Camski/Downloads/FullSail/verity/Verity/img/';
	        $imgName = $_FILES['userfile']['name'];
	        $tmp= $_FILES['userfile']['tmp_name'];
	        $img = time().rand(5,1200).$imgName;
	        move_uploaded_file($tmp,$local.$img);

	        $info = array(
			'profile' => $this->input->post('about'),
			'pic' => $img
			//'userfile' => $this->input->post('userfile')
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->updateUserInfo($info);

			$this->profile();
			}else{
			    $info = array(
				'profile' => $this->input->post('about')
				//'userfile' => $this->input->post('userfile')
				);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->updateUserInfo($info);

			$this->profile();
			}						        
			
			
			
		}
		
	}

	public function uploadPost(){
			
			$type = str_replace("image/", ".", $_FILES['userfile']['type']);

			if ($type == ".jpeg" || $type == ".png") {
			$local = '/Users/Camski/Downloads/FullSail/verity/Verity/img/';
	        $imgName = $_FILES['userfile']['name'];
	        $tmp= $_FILES['userfile']['tmp_name'];
	        $img = time().rand(5,1200).$imgName;
	        move_uploaded_file($tmp,$local.$img);
			}else{
			    $img = 'silhouette_female_centaur.jpg';
			}

			$this->load->model('model_get');
			$theID = $this->model_get->userIDFind();	
		
			$theI = $theID[0]->userID;     

			$info = array(
			'userID' => $theI,
			'title' => $this->input->post('title'),
			'story' => $this->input->post('editor1'),
			'link' => $this->input->post('source'),
			'storypic' => $img
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->insert_story($info);
			
			$this->profile();
			
		
		
	}

	public function deleteStory(){
		$info = $_GET['storyID'];
		$this->load->model('insert_model');
		$this->insert_model->deleteStry($info);
		$this->profile();
	}

	public function updateUserStory(){

		$info = $_GET['storyID'];
		$this->load->model('model_get');
		$data["results"] = $this->model_get->storyFind($info);
		$this->load->model('trend_get');
		$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 
		$profpic["allthat"] = $this->model_get->profileUser();
		$data["result"] = $this->model_get->userProfStories();
		$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
		$this->load->view('topNavSingedIn',$profpic);
		$this->load->view('subNav');
		$this->load->view('editPost',$data);
		$this->load->view('footer');
		
	} 

	public function upVote(){

		$info = $_GET['storyID'];
		$this->load->model('insert_model');
		$this->load->model('trend_get');
		$this->insert_model->ups($info);
		$this->load->model('trend_get');
		$this->load->model('model_get');

		$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 

		if ($this->session->userdata('is_logged_in')) {
			$profpic["allthat"] = $this->model_get->userProfile();
			$data["results"] = $this->model_get->storyFind($info);
			$comms["results"] = $this->model_get->storyComm($info);
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('readStory', $data);
			$this->load->view('writeComment');
			$this->load->view('readComment',$comms);
			$this->load->view('footer');
		}else{
			$info = $_GET['storyID'];
			$this->load->model('trend_get');
			$this->load->model('model_get');
			$data["results"] = $this->model_get->storyFind($info);
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popUp');
			$this->load->view('readStory', $data);
			$this->load->view('footer');
		}
			
		
		
	} 

	public function downVote(){

		$info = $_GET['storyID'];
		$this->load->model('trend_get');
		$this->load->model('insert_model');
		$this->insert_model->downs($info);
		$this->load->model('model_get');

		$theID = $this->model_get->userIDFind();	
			
			$theI = $theID[0]->userID; 


		if ($this->session->userdata('is_logged_in')) {
			$profpic["allthat"] = $this->model_get->userProfile();
			$data["results"] = $this->model_get->storyFind($info);
			$comms["results"] = $this->model_get->storyComm($info);
			$trending["results"] = $this->trend_get->trending();
			$foll["results"] = $this->model_get->followFind($theI);
			$this->load->view('topLNavSI', $profpic);
			$this->load->view('leftNavSignedIn');
			$this->load->view('leftNvTren', $trending);
			$this->load->view('leftNvFol',  $foll);
			$this->load->view('topNavSingedIn',$profpic);
			$this->load->view('subNav');
			$this->load->view('readStory', $data);
			$this->load->view('writeComment');
			$this->load->view('readComment',$comms);
			$this->load->view('footer');
		}else{

			$info = $_GET['storyID'];
			$this->load->model('trend_get');
			$this->load->model('model_get');
			$data["results"] = $this->model_get->storyFind($info);
			$trending["results"] = $this->trend_get->trending();
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popUp');
			$this->load->view('readStory', $data);
			$this->load->view('footer');

		}
			
		
	} 

	public function writeComm(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment', 'Comment');

		if($this->form_validation->run() == FALSE){
			
			$this->profile();
			
		}else{

			if ($this->session->userdata('is_logged_in')) {
				$this->load->model('model_get');
				$theID = $this->model_get->userIDFind();	
			
				$theI = $theID[0]->userID; 
				
				$info = array(
				'userID' => $theI,
				'comment' => $this->input->post('comment'),
				'storyID' => $this->input->post('id')
				);
				$this->load->model('trend_get');
				$this->load->model('insert_model');
				$this->insert_model->comm_insert($info);
				$info = $_GET['storyID'];
				$profpic["allthat"] = $this->model_get->userProfile();
				$data["results"] = $this->model_get->storyFind($info);
				$comms["results"] = $this->model_get->storyComm($info);
				$trending["results"] = $this->trend_get->trending();
				$foll["results"] = $this->model_get->followFind($theI);
				$this->load->view('topLNavSI', $profpic);
				$this->load->view('leftNavSignedIn');
				$this->load->view('leftNvTren', $trending);
				$this->load->view('leftNvFol',  $foll);
				$this->load->view('topNavSingedIn',$profpic);
				$this->load->view('subNav');
				$this->load->view('readStory', $data);
				$this->load->view('writeComment');
				$this->load->view('readComment',$comms);
				$this->load->view('footer');
			}else{
				$this->load->model('model_get');
				$theID = $this->model_get->userIDFind();	
			
				$theI = $theID[0]->userID; 
				
				$info = array(
				'userID' => $theI,
				'comment' => $this->input->post('comment'),
				'storyID' => $this->input->post('id')
				);
				$this->load->model('trend_get');
				$this->load->model('insert_model');
				$this->insert_model->comm_insert($info);
				$info = $_GET['storyID'];
				$profpic["allthat"] = $this->model_get->userProfile();
				$data["results"] = $this->model_get->storyFind($info);
				$trending["results"] = $this->trend_get->trending();
				$info = $_GET['storyID'];
		
			$this->load->view('leftNavUnSign', $trending);
			$this->load->view('topNavUnsign');
			$this->load->view('subNav');
			$this->load->view('popUp');
			$this->load->view('readStory', $data);
			$this->load->view('footer');

			}

			

			}						        

	}

	public function updateUserStoryRun(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title');
		$this->form_validation->set_rules('story', 'Story');
		$this->form_validation->set_rules('link', 'Link');

		if($this->form_validation->run() == FALSE){
			
			$this->profile();
			
		}else{
			
			$type = str_replace("image/", ".", $_FILES['userfile']['type']);

			if ($type == ".jpeg" || $type == ".png") {
			$local = '/Users/Camski/Downloads/FullSail/verity/Verity/img/';
	        $imgName = $_FILES['userfile']['name'];
	        $tmp= $_FILES['userfile']['tmp_name'];
	        $img = $imgName;
	        move_uploaded_file($tmp,$local.$img);

	        $info = array(
			'id' => $this->input->post('id'),
			'title' => $this->input->post('title'),
			'story' => $this->input->post('story'),
			'link' => $this->input->post('link'),
			'storypic' => $img
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->updateStry($info);

			$this->profile();
			}else{
			    $info = array(
			'id' => $this->input->post('id'),
			'title' => $this->input->post('title'),
			'story' => $this->input->post('story'),
			'link' => $this->input->post('link')
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->updateStry($info);

			$this->profile();
			}						        
			
			
			
		}
	}

	public function following(){

		$this->load->model('model_get');
		$theID = $this->model_get->userIDFind();	
			
		$theI = $theID[0]->userID; 
		$in = $_GET['userID'];
		$info = array(
			'userID' => $theI,
			'subName' => $in
			);
		$this->load->model('insert_model');
		$this->insert_model->followU($info);
		$this->profile();
	}

	public function un_follow(){

		$this->load->model('model_get');
		$theID = $this->model_get->userIDFind();	
			
		$theI = $theID[0]->userID; 
		$in = $_GET['userID'];
		$info = array(
			'userID' => $theI,
			'subName' => $in
			);
		$this->load->model('insert_model');
		$this->insert_model->unFollow($info);
		$this->profile();
	}

	public function logout(){
		$this->session->sess_destroy();

		$this->home();
		
	}


	
}
	




