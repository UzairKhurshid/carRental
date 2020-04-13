<?php 

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function reg($enc_password)
    {
        $data=array
        (
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'role'=>$this->input->post('role'),
            'password'=>$enc_password
        );
        $this->security->xss_clean($data);
        $this->db->insert('account',$data);
    }

    public function login()
    {
        $name=$this->input->post('name');
        $password=$this->input->post('password');
        $role=$this->input->post('role');

        $res=$this->db->get('account');
        $res=$res->result_array();

        $data=NULL;
        foreach($res as $row)
        {
            if($row['name'] == $name  && $row['password'] == $password && $row['role'] == $role ) 
            {
                $data=$row['id'];
            }
        }
        return $data;
    }

}


?>