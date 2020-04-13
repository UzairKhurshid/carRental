<?php
class User_model extends CI_Model{
	public function __construct()
    {
      parent::__construct();
	  $this->load->database();
    }
  
    

    public function getAllCars()
    {
      $query=$this->db->get('car');
      return $query->result_array();
    }




    public function getAllDeals()
    {
      $query=$this->db->get('deal');
      return $query->result_array();
    }



    
    public function reserve()
    {
      $data=array
      (
        'quantityCar'=>$this->input->post('quantityCar'),
        'days'=>$this->input->post('days'),
        'userID'=>$this->input->post('userID'),
        'carID'=>$this->input->post('carID')
      );
      $this->security->xss_clean($data);
      $this->db->insert('booking',$data);
    }




    public function reserveDeal($userID)
    {
      $data=array
      (
        'dealID'=>$this->input->post('dealID'),
        'userID'=>$userID
      );
      $this->security->xss_clean($data);
      $this->db->insert('reserveDeal',$data);
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
 


    public function reservations($id)
    {
      $query=$this->db->query("SELECT booking.id, booking.quantityCar,booking.days, car.companyName, car.carName, car.price
      FROM booking
      INNER JOIN car ON booking.carID=car.id
      Where booking.userID=$id");
      
      return $query->result_array();
    }

    public function reservedDeals($id)
    {
      $query=$this->db->query("SELECT reservedeal.id , deal.dealName, deal.discount, deal.quantityCar , deal.days
      FROM reservedeal
      INNER JOIN deal ON reservedeal.dealID=deal.id
      Where reservedeal.userID=$id");
      
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


