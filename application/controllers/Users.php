<?php
class Users extends CI_Controller{

	public function __construct()
    {
      parent::__construct();
	  $this->load->model('User_model');
    }

	//**************************Dashboard************************** */

	public function dashboard()
	{
		if($this->session->userdata('role') == "user")
		{
			$query['data']=$this->User_model->getAllCars();

			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/index.php',$query);
			$this->load->view('templates/users/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	//**************************Deals**************************** */

	public function deals()
	{
		if($this->session->userdata('role') == "user")
		{
			$query['d']=$this->User_model->getAllDeals();
			

			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/deals.php',$query);
			$this->load->view('templates/users/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	//******************************Contact Us******************************** */

	public function contactUs()
	{
		if($this->session->userdata('role') == "user")
		{
			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/contactUs.php');
			$this->load->view('templates/users/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	//***************************About US********************************* */

	public function aboutUs()
	{
		if($this->session->userdata('role') == "user")
		{
			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/aboutUs.php');
			$this->load->view('templates/users/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	//****************************reservation********************************************** */

	public function passCarToReserve($id)
	{
		if($this->session->userdata('role') == "user")
		{
			$query['d']=array
			(
				"userID"=>$this->session->userdata('id'),
				"carID"=>$id
			);

			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/reserve.php',$query);
			$this->load->view('templates/users/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}
	

	public function reserve()
	{
		if($this->session->userdata('role') == "user")
		{
			$this->form_validation->set_rules('days','days','required');
			if($this->form_validation->run() === FALSE){
					redirect('Users/dashboard');
			}
			else{
				$this->User_model->reserve();
				redirect('Users/dashboard');
			}
		}
		else
		{
			redirect('Auth/login');
		}
	}

	

	public function reserveDeal()
	{
		if($this->session->userdata('role') == "user")
		{
			$this->form_validation->set_rules('dealID','dealID','required');
			if($this->form_validation->run() === FALSE){
					redirect('Users/dashboard');
			}
			else{
				
				$userID=$this->session->userdata('id');
				
				$this->User_model->reserveDeal($userID);
				redirect('Users/dashboard');
			}
		}
		else
		{
			redirect('Auth/login');
		}
	}

	//************************Reservations************************** */

	public function reservations()
	{
		if($this->session->userdata('role') == "user")
		{
			$id=$this->session->userdata('id');
			$query['data']=$this->User_model->reservations($id);

			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/reservations.php',$query);
			$this->load->view('templates/users/footer.php');
		}
	}
	public function delReservation($id)
	{
		if($this->session->userdata('role') == "user")
		{
			$this->User_model->delReservation($id);
			redirect('User/reservation');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	
	public function reservedDeals()
	{
		if($this->session->userdata('role') == "user")
		{
			$id=$this->session->userdata('id');
			$query['data']=$this->User_model->reservedDeals($id);

			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/reservedDeals.php',$query);
			$this->load->view('templates/users/footer.php');
	
		}
	}

	public function delReserveDeal($id)
	{
		if($this->session->userdata('role') == "user")
		{
			$this->User_model->delReserveDeal($id);
			redirect('Users/reservedDeals');
		}
		else
		{
			redirect('Auth/login');
		}
	}
	



 


	//************************Profile************************** */


	public function profile()
	{
		if($this->session->userdata('role') == "user")
		{
			$data['d']=array
			(
				'id'=>$this->session->userdata('id'),
				'name'=>$this->session->userdata('name'),
				'role'=>$this->session->userdata('role')
			);
			$this->load->view('templates/users/header.php');
			$this->load->view('templates/users/navbar.php');
			$this->load->view('templates/users/sidebar.php');
			$this->load->view('templates/users/profile.php',$data);
			$this->load->view('templates/users/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function updateProfile()
	{
		if($this->session->userdata('role') == "user")
		{
			$this->User_model->updateProfile();
			redirect('Users/profile');
			
		}
		else
		{
			redirect('Auth/login');
		}
	}

	
	
}
