<?php
class admin extends CI_Controller{
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('Admin_model');
    }

	
	

	
	//***************************Cars********************************************************* */


	public function dashboard()
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->getAllCars();

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/index.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	

	public function addNewCar()
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->form_validation->set_rules('carName','carName','required');
			if($this->form_validation->run() === FALSE){
					
				$this->load->view('templates/admin/header.php');
				$this->load->view('templates/admin/navbar.php');
				$this->load->view('templates/admin/sidebar.php');
				$this->load->view('templates/admin/addNewCar.php');
				$this->load->view('templates/admin/footer.php');
				
			}
			else{
				$img=$this->do_upload();
				$this->Admin_model->addNewCar($img);
				redirect('Admin/addNewCar');
			}
		}
		else
		{
			redirect('Auth/login');
		}
	}


	public function deleteCar($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->deleteCar($id);
			redirect('Admin/dashboard');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function editCar($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->editCar($id);

				$this->load->view('templates/admin/header.php');
				$this->load->view('templates/admin/navbar.php');
				$this->load->view('templates/admin/sidebar.php');
				$this->load->view('templates/admin/updateCar.php',$query);
				$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function updateCar()
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->form_validation->set_rules('carName','carName','required');
			if($this->form_validation->run() === FALSE){
					
				redirect('Admin/dashboard');
				
			}
			else
			{
				$img=$this->do_upload();
				$this->Admin_model->updateCar($img);
				redirect('Admin/dashboard');
			}
		}
		else
		{
			redirect('Auth/login');
		}
	}


	function do_upload() {
        
        $config = array(
            'upload_path' => "assets/uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => false,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "5000",
            'max_width' => "5000"
            );
    
        $this->load->library('upload', $config);

        if($this->upload->do_upload('img'))
        {
            $imgdata = array('upload_data' => $this->upload->data());
    
            $imgname = $imgdata['upload_data']['file_name'];
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            echo '<pre>';
            print_r($error);
            echo '<pre>';
            exit;
        }

        return $imgname;
    }

	//***************************Accounts********************************************************* */

	public function accounts()
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->getAllAccounts();

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/accounts.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	public function delAccount($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->delAccount($id);
			redirect('Admin/accounts');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	public function editAccount($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->editAccount($id);

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/editAccount.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function updateAccount()
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->form_validation->set_rules('name','name','required');
			if($this->form_validation->run() === FALSE)
			{
				redirect('Admin/accounts');
			}	
			else
			{
				$this->Admin_model->updateAccount();
				redirect('Admin/accounts');
			}
		}
		else
		{
			redirect('Auth/login');
		}
	}



	
	//***************************Contact Us********************************************************* */

	public function contactUs()
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->getAllContactUs();

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/contactUs.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function delContact($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->delContact($id);
			redirect('Admin/contactUs');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function replyContact($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->replyContact($id);

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/replyContact.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	public function sendReply()
	{
		echo "underDevelopment";
	}



	//******************************Deals*********************************** */



	public function deals()
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['d']=$this->Admin_model->getAllDeals();

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/deals.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	public function passCarToDeal($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$data['carid']= $id;
			
			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/addNewDeal.php',$data);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}


	public function addNewDeal()
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->form_validation->set_rules('dealName','dealName','required');
			if($this->form_validation->run() === FALSE){
					redirect('Admin/dashboard');
			}
			else{
				$this->Admin_model->addNewDeal();
				redirect('Admin/dashboard');
			}
		}
		else
		{
			redirect('Auth/login');
		}
	}
	

	public function deleteDeal($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->deleteDeal($id);
			redirect('Admin/deals');
		}
		else
		{
			redirect('Auth/login');
		}
	}
	
	public function editDeal($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->editDeal($id);

				$this->load->view('templates/admin/header.php');
				$this->load->view('templates/admin/navbar.php');
				$this->load->view('templates/admin/sidebar.php');
				$this->load->view('templates/admin/updateDeal.php',$query);
				$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function updateDeal()
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->form_validation->set_rules('dealName','dealName','required');
			if($this->form_validation->run() === FALSE){
					
				redirect('Admin/deals');
				
			}
			else
			{
				$this->Admin_model->updateDeal();
				redirect('Admin/deals');
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
		if($this->session->userdata('role') == "admin")
		{
			$query['data']=$this->Admin_model->reservations();

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/reservations.php',$query);
			$this->load->view('templates/admin/footer.php');
		}
	}
	public function delReservation($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->delReservation($id);
			redirect('Admin/reservation');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	
	public function reservedDeals()
	{
		if($this->session->userdata('role') == "admin")
		{

			$query['data']=$this->Admin_model->reservedDeals();

			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/reservedDeals.php',$query);
			$this->load->view('templates/admin/footer.php');
	
		}
	}

	public function delReserveDeal($id)
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->delReserveDeal($id);
			redirect('Admin/reservedDeals');
		}
		else
		{
			redirect('Auth/login');
		}
	}
	







	//**************************Profile ******************************* */

	public function profile()
	{
		if($this->session->userdata('role') == "admin")
		{
			$data['d']=array
			(
				'id'=>$this->session->userdata('id'),
				'name'=>$this->session->userdata('name'),
				'role'=>$this->session->userdata('role')
			);
			$this->load->view('templates/admin/header.php');
			$this->load->view('templates/admin/navbar.php');
			$this->load->view('templates/admin/sidebar.php');
			$this->load->view('templates/admin/profile.php',$data);
			$this->load->view('templates/admin/footer.php');
		}
		else
		{
			redirect('Auth/login');
		}
	}

	public function updateProfile()
	{
		if($this->session->userdata('role') == "admin")
		{
			$this->Admin_model->updateProfile();
			redirect('Admin/profile');
			
		}
		else
		{
			redirect('Auth/login');
		}
	}




}