<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 

{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('admin/daftar_model');
	
	}

	public function index()
	{
		$data=array('title'=>'Desa Tegalsari',
					'berita' => $this->berita_model->history_berita(),
					'isi'  =>'home/index_home'
						);
		$this->load->view('layout/wrapper',$data);	
	}
	


	public function daftar()
 {    
     $this->form_validation->set_rules('tgl_daftar', 'Tanggal Daftar'); 
     $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required');           
     $this->form_validation->set_rules('alamat', 'Alamat', 'required');           
     $this->form_validation->set_rules('tanggal', 'Tanggal Kunjungan', 'required');  
     $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
     $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');          
     $this->form_validation->set_rules('kontak', 'Kontak', 'required');
	 $this->form_validation->set_rules('status', 'Status', 'required');
     $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

     if ($this->form_validation->run() == FALSE) 
     {
         $this->load->view('');
     }
     else
     {

         $data = array(
                         'nama_instansi' => set_value('nama_instansi'),
                         'alamat' => set_value('alamat'),
                         'tanggal' => set_value('tanggal'),
                         'jumlah' => set_value('jumlah'),
                         'tujuan' => set_value('tujuan'),
                         'kontak' => set_value('kontak'),
						 'status' => set_value('status')
                     );
					
					$this->daftar_model->daftar($data);
					$this->session->set_flashdata('msg2','<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil Mendaftar Kunjungan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  	</div>');
					redirect(base_url().'');
	   }
 }

 
}
