<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
  **This class should only display the footer and header of the page
  **Angular will load the rest of the page
  **An application can have several layouts 
***/

class Partials extends CI_Controller {
	//Add other pages which requires different layout here
	public function about(){
		$this->load->view('Partials/about.php');
	}
	
	public function contact(){
		$this->load->view('Partials/contact.php');
	}
	public function register(){
		$this->load->view('Partials/register.php');
	}
	public function gallery(){
		$this->load->view('Partials/gallery.php');
	}

	public function agenda(){
		$this->load->view('Partials/agenda.php');
	}
	public function accomodation(){
		$this->load->view('Partials/accomodation.php');
	}

	public function precollegiates(){
		$this->load->view('Partials/precollegiates.php');
	}

	public function collegiates(){
		$this->load->view('Partials/collegiates.php');
	}
	public function professionals(){
		$this->load->view('Partials/professionals.php');
	}


}
