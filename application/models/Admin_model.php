<?php
class Admin_model extends CI_Model{
    
	
	//**********************Cars**************************** */
	public function getAllCars()
	{
		$query=$this->db->get('car');
		return $query->result_array();
	}

	public function addNewCar($img)
	{
		$data=array
		(
			'companyName'=>$this->input->post('companyName'),
			'carName'=>$this->input->post('carName'),
			'model'=>$this->input->post('model'),
			'noOfSeats'=>$this->input->post('noOfSeats'),
			'price'=>$this->input->post('price'),
			'description'=>$this->input->post('description'),
			'img'=>$img
		);
		$this->security->xss_clean($data);
		$this->db->insert('car',$data);
	}


	public function deleteCar($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('car');
	}


	public function editCar($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('car');
		return $query->row_array();
	}

	public function updateCar($img)
	{
		$id=$this->input->post('id');
		$data=array
		(
			'companyName'=>$this->input->post('companyName'),
			'carName'=>$this->input->post('carName'),
			'model'=>$this->input->post('model'),
			'noOfSeats'=>$this->input->post('noOfSeats'),
			'price'=>$this->input->post('price'),
			'description'=>$this->input->post('description'),
			'img'=>$img
		);
		$this->security->xss_clean($data);
		$this->db->where('id',$id);
		$this->db->update('car',$data);
	}


	//**********************Accounts********************* */
	public function getAllAccounts()
	{
		$query=$this->db->get('account');
		return $query->result_array();
	}
	
	
	public function delAccount($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('account');
	}
	
	public function editAccount($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('account');
		return $query->row_array();
	}

	public function updateAccount()
	{
		$id=$this->input->post('id');
		$data=array
		(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'role'=>$this->input->post('role'),
			'password'=>$this->input->post('password')
		);
		$this->security->xss_clean($data);
		$this->db->where('id',$id);
		$this->db->update('account',$data);
	}

	//**********************Contact Us******************************* */

	public function getAllContactUs()
	{
		$query=$this->db->get('contactUs');
		return $query->result_array();
	}
	

	public function delContact($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('contactUs');
	}

	public function replyContact($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('contactUs');
		return $query->row_array();
	}


	//**************************Deals********************************************** */

	public function getAllDeals()
	{
		$query=$this->db->get('deal');
		return $query->result_array();
	}


	public function addNewDeal()
	{
		$data=array
		(
			'dealName'=>$this->input->post('dealName'),
			'discount'=>$this->input->post('discount'),
			'quantityCar'=>$this->input->post('quantityCar'),
			'days'=>$this->input->post('days'),
			'carID'=>$this->input->post('carID')
		);
		$this->security->xss_clean($data);
		$this->db->insert('deal',$data);
	}

	public function deleteDeal($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('deal');
	}
	
	public function editDeal($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('deal');
		return $query->row_array();
	}

	public function updateDeal()
	{
		$id=$this->input->post('id');
		$data=array
		(
			'dealName'=>$this->input->post('dealName'),
			'discount'=>$this->input->post('discount'),
			'quantityCar'=>$this->input->post('quantityCar'),
			'days'=>$this->input->post('days'),
			'carID'=>$this->input->post('carID')
		);
		$this->security->xss_clean($data);
		$this->db->where('id',$id);
		$this->db->update('deal',$data);
	}


	public function updateProfile()
	{
		$id=$this->input->post('id');
		$data=array
		(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'password'=>$this->input->post('password')
		);
		$this->security->xss_clean($data);
		$this->db->where('id',$id);
		$this->db->update('account',$data);
	}


	//**************************Reservation********************************************** */

	public function reservations()
    {
      $query=$this->db->get('booking');
      return $query->result_array();
    }

    public function reservedDeals()
    {
      $query=$this->db->get('reserveDeal');
      return $query->result_array();
    }


    public function delReservation($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('booking');
  }
  
  public function delReserveDeal($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('reserveDeal');
	}


}