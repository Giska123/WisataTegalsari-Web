<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function index()
    {
        $data=array('title'=>'pendaftaran kunjungan',
                    'isi'  =>'layout/footer'
                            );
        $this->load->view('layout/wrapper',$data);
    
    }
}