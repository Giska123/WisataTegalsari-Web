<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validasi extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('validasi_model');
        $this->load->helper('url','form');
		$this->load->library('form_validation','session');
       

    }
    public function index()
    {
        $data=array('title'=>'Validasi kunjungan',
                    'isi'  =>'layout/validasi'
                            );
            $this->load->view('layout/wrapper',$data);	
    }


    public function confirm() {

        $this->form_validation->set_rules('nama_instansi', 'Nama Instansi','trim|required');
        $this->form_validation->set_rules('kontak', 'Kontak','trim|required');
        $this->form_validation->set_rules('status', 'Status','trim|required');
        
        if ($this->form_validation->run() == TRUE ) 
        {  
            $admin = $this->validasi_model->check($this->input->post('kontak'));

                if (!$admin) {
                    $this->session->set_flashdata('msg3','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Tidak Ditemukan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>');
                    redirect('validasi/index');
                }

                else {
                
                $status = $this->input->post('status');
                $kontak = $this->input->post('kontak'); 
                $this->validasi_model->status($status, $kontak);
                    $validasi = array (
                        'nama_instansi' => $admin->nama_instansi,
                        'alamat' => $admin->alamat, 
                        'tanggal' => $admin->tanggal,
                        'jumlah' => $admin->jumlah,
                        'tujuan' => $admin->tujuan,
                        'kontak' => $admin->kontak,
                        'status' => $admin->status
                    );

                $this->session->set_userdata($validasi);
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil Konfirmasi Kehadiran
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>');
                redirect(base_url(''));
                }

        } else {
            $data=array('title'=>'Validasi kunjungan',
                        'isi'  =>'layout/validasi'
                            );
            $this->load->view('layout/wrapper',$data);
        }
    }


}
        
