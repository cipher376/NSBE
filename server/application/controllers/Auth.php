<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *To perform authentication and session management
 *
 **/
class ConferenceUser{
	    public $id;
		public $fullname;
		public $nsbno;
		public $school;
		public $phone;
		public $emergencyPhone;
		public $specialTreatment;
		public $accomodation;
		public $paymentMethod;
		public $mobileMoneyNo;
		public $mobileMoneyReferenceNo;
		public $dateOfPayment;
}

class User{
	 public $email ;
	 public $password;
}

class Auth extends CI_Controller {
	
	protected $ulogin='';
	protected $conUsers = '';

	public function __construct()
	{
		parent::__construct();
		
		//$this->load->library('session');
		$this->ulogin  = new uLogin('Login', 'appLoginFail');
		if (!sses_running())
	         sses_start();

	     $this->load->dbforge();
	     $this->load->helper('url');

	     //instantiating models
	     $this->conUser = new ConferenceUser();
	     $this->user = new User();
	}

	
	//Index is the default page layout
	public function Login()
	{
		$this->user->email = $_POST['email'];
		$this->user->password = $_POST['password'];
        // Here we verify the nonce, so that only users can try to log in
		// to whom we've actually shown a login page. The first parameter
		// of Nonce::Verify needs to correspond to the parameter that we
		// used to create the nonce, but otherwise it can be anything
		// as long as they match.
		if (isset($_POST['nonce']) && ulNonce::Verify('login', $_POST['nonce'])){
			// We store it in the session if the user wants to be remembered. This is because
			// some auth backends redirect the user and we will need it after the user
			// arrives back.
			//echo "login successful";
			
			///echo $this->input->post('email');

			if (isset($_POST['autologin']))
				$_SESSION['appRememberMeRequested'] = true;
			else
				unset($_SESSION['appRememberMeRequested']);
               
			// This is the line where we actually try to authenticate against some kind
			// of user database. Note that depending on the auth backend, this function might
			// redirect the user to a different page, in which case it does not return.
			$this->ulogin->Authenticate($_POST['email'],  $_POST['password']);
			if ($this->ulogin->IsAuthSuccess()){
				$_SESSION["loggedIn"] = true;
				echo "success";
			}else echo "failed";
		}else echo 'refresh';
		//$this->load->view('layout/home.php');
	}

	public function Logout()
	{
		// When a user explicitly logs out you'll definetely want to disable
        // autologin for the same user. For demonstration purposes,
        // we don't do that here so that the autologin function remains
        // easy to test.
        //$ulogin->SetAutologin($_SESSION['username'], false);
		unset($_SESSION['uid']);
		unset($_SESSION['username']);
		unset($_SESSION['loggedIn']);
		$this->load->view('layout/login.php');
	}

	public function TwoFactorAuth(){

	}

	public function VerifyCode(){

	}

	public function Register(){
		
		$this->user->email = $_POST['email'];
		$this->user->password= $_POST['password'];
		$this->conUser->fullname= $_POST['fullname'];
		$this->conUser->nsbno= $_POST['nsbno'];
		$this->conUser->school= $_POST['school'];
		$this->conUser->phone= $_POST['phone'];
		$this->conUser->emergencyPhone= $_POST['emergencyPhone'];
		$this->conUser->specialTreatment= $_POST['specialTreatment'];
		$this->conUser->accomodation= $_POST['accomodation'];
		$this->conUser->paymentMethod= $_POST['paymentMethod'];
		$this->conUser->mobileMoneyNo= $_POST['mobileMoneyNo'];
		$this->conUser->mobileMoneyReferenceNo= $_POST['mobileMoneyReferenceNo'];
		$this->conUser->dateOfPayment='';
		//check for the required fields
		//return error message if empty

		if(empty($this->user->email)||empty($this->user->password)||empty($this->conUser->fullname)||empty($this->conUser->phone)||empty($this->conUser->emergencyPhone)||empty($this->conUser->accomodation)){
			echo 'failed';
			return;
		}


		if ( !$this->ulogin->CreateUser( $this->user->email,  $this->user->password) ){
		    echo'failed';
		    return;
		}

		$this->db->select_max('id');
     $query = $this->db->get('ul_logins');  // Produces: SELECT MAX(age) as age FROM members
     foreach($query->result() as $row){
      $this->conUser->id= $row->id;
     }
     
     if(!empty($this->conUser->id)){
     	if(!$this->db->insert('user_data', $this->conUser)){
			echo'failed';
			return;
		}else{
			echo 'success';

			//send email to the user 
			if(empty($this->conUser->mobileMoneyReferencyNo)){
				//payment is not made
			}
		}
     }

	}

	public function DeleteAccount(){
		// Delete account
		if ( !$this->ulogin->DeleteUser( $_SESSION['uid']) )
			$msg = 'account deletion failure';
		else
			$msg = 'account deleted ok';

		// Logout
		appLogout();
	}

	public function UpdateAccount(){

	}
	public function RegisterThirdParty(){

	}

	//Required by ulogin
	private function appLoginFail(){
	// Note, in case of a failed login, $uid, $username or both
	// might not be set (might be NULL).
		echo 'login failed<br>';
	}
	public static function isLogin(){
		if(isset($_SESSION['loggedIn'])&&$_SESSION['loggedIn']&&!$this->ulogin->IsUserBlocked($_SESSION['uid'])){
			echo 'true';
			return ;
		}else echo 'false';
	}

	public function getUser(){
		//get user id 
		 $query = $this->db->get_where('ul_logins',array('username',$_GET['email']));  // 
		 foreach($query->result() as $row){
           $this->conUser->id= $row->id;
          }
          die($this->conUser->id);
        
		$this->db->where('id',  $this->conUser->id);
		$this->db->select('fullname, nsbno, school','phone','emergencyPhone','specialTreatment','accomodation','paymentMethod','mobileMoneyNo','mobileMoneyReferenceNo','dateOfPayment','paymentImage');
        $this->db->from('user_data');
        $query = $this->db->get();  
       
        foreach($query->result() as $row){
          print_r($row);
          return;
        }
     
        
	}
}
