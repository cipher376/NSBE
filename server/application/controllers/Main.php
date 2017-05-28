<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
  **This class should only display the footer and header of the page
  **Angular will load the rest of the page
  **An application can have several layouts 
***/

class Main extends CI_Controller {

	//Index is the default page layout
	public function index()
	{
		$this->load->view('layout/home.php');
	}

	public function login()
	{
		$this->load->view('layout/login.php');

		
	}

}
