<?php 


class Auth extends CI_Controller
{

    public function __construct()
    {
		parent::__construct();
    }

	public function login()
	{
		if($this->session->userdata('role') == "admin")
		{
            redirect('Admin/dashboard');
		}
		else if($this->session->userdata('role') == "user")
		{
            redirect('Users/dashboard');
		}
		else
		{
			$this->form_validation->set_rules('name','name','required');
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/auth/login.php');
			}
			else 
			{
				$name=$this->input->post('name');
				$role=$this->input->post('role');
				$res=$this->Auth_model->login();
				
				if(empty($res))
				{
					//array is empty
					redirect('Auth/login');
				}
				else
				{
					if($role==="admin")
					{
						$adminSessionData=array
						(
							"id"=>$res,
							"name"=>$name,
							"role"=>$role,
							"Logged_in"=>"TRUE"
						);
						$this->session->set_userdata($adminSessionData);
						$this->session->set_flashdata('user_login','Successfully Logged In');
						redirect('Admin/dashboard');
					}
					else if($role === "user")
					{
						$userSessionData=array
						(
							"id"=>$res,
							"name"=>$name,
							"role"=>$role,
							"Logged_in"=>"TRUE"
						);
						$this->session->set_userdata($userSessionData);
						$this->session->set_flashdata('user_login','Successfully Logged In');
						redirect('Users/dashboard');
					}
				}
			}
		}
	}

	public function logout()
	{
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('name');
			$this->session->unset_userdata('role');
			$this->session->unset_userdata('Logged_in');
            redirect('Auth/login');
		
	}

	public function reg()
	{
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/auth/reg.php');
		}
		else
		{
			$enc_password=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$this->Auth_model->reg($enc_password);

			$this->session->set_flashdata('user_registered','Successfully Registered');
			redirect('Auth/login');
		}
		
	}

}


?>