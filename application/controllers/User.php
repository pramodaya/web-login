<?php
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($_SESSION['user_logged']==FALSE){
			$this->session->set_flashdata('error','please login first to view');
			redirect('auth/login');
		}
	}
	public function profile(){
		$this->load->view('profile');
	}
}



?>