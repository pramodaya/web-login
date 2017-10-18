<?php
/**
* 
*/
class Auth extends CI_Controller{

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("auth/login","refresh");
	}
	
	public function login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		if($this->form_validation->run()==TRUE){
			//check user in database
			$data=array(
				'username'=>$_POST['username'],
				'password'=>md5($_POST['password'])
			);

			$this->load->model('auth_model');
			$query=$this->auth_model->get_user($data);
			
			

			$user =$query->row();
				//if user exist
			if($user->email){
				$this->session->set_flashdata("success","You are logged in");
				//set session variable
				$_SESSION['user_logged']=TRUE;
				$_SESSION['username']=$user->username;

				//redirect to profile page
				redirect("user/profile",'refresh');

			}else{
				$this->session->set_flashdata("error","No such account exist");
				redirect("auth/login");

			}


		}


		$this->load->view('login');
	}
	public function register(){
		if(isset($_POST['register'])){
			//validation
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone','Phone','required|min_length[5]');


			//if validation runs
			if($this->form_validation->run()==TRUE){
			//add to database	
			$this->load->model('auth_model');
			$data=array(
				'username'=>$_POST['username'],
				'email'=>$_POST['email'],
				'password'=>md5($_POST['password']),
				'gender'=>$_POST['gender'],
				'created_date'=>date('y-m-d'),
				'phone'=>$_POST['phone']
				);
			$this->auth_model->add_user($data);
			
			//flash success message
			$this->session->set_flashdata("success", "Your account has been registerd, you can login now");
			redirect("auth/login");
		 }
		}
		$this->load->view('register',"refresh");
	}
}


?>