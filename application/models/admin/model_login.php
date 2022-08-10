<?php 
 
class model_login extends CI_Model{	

	public $id = 'admin_id';
    
	public function __construct()
	{
		
		$this->load->database();
	}
 
	public function login($id) 
{
    $this->db->where('password', $id);
    return $this->db->get('admin')->row();

    
}
}