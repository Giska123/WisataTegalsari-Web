<?php
 
class validasi_model extends CI_Model {

public $id = "daftar_id";
public function __construct()
    {
        $this->load->database();
    }

public function check($id) 
{
    $this->db->where('kontak', $id);
    return $this->db->get('daftar')->row();
    
}

public function update($data) {
    
    $st=$this->db->select('*')
        ->from('daftar')
        ->Where('kontak', $data['kontak'])
        ->where('nama_instansi', $data['nam_instansi'])
        ->get()->result_array();// you can use row()
    if(count($st)>0)
    {
        if($st[0]['status']==0){
            return 1;
        }
        else
        {
            return $st[0];
        }
    }
    else
    {
        return false;
    }
}

function status($status, $kontak){
   $data['status'] = $status;
   $this->db->where('kontak', $kontak);
   $this->db->update('daftar', $data);
}

}