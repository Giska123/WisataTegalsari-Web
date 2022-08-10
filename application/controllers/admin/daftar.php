<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('admin/daftar_model');
        $this->load->library('session');
        $this->load->helper('url');
        
    }
    
    public function index() {
        $data=array('title'=>'dasbor admin');
        
		$this->load->view('admin/layout/wrapper',$data);
    }

    public function pengunjung() {
        $query = $this->daftar_model->daftar_kunjung();
        $data = array('title'=>'Daftar Pengunjung',
                      'daftar' => $query,
                      'isi' =>'admin/daftar/daftar_pengunjung');
        
        $this->load->view('admin/layout/wrapper',$data);
        }

    public function filter(){
        {
            $data['daftar'] = $this->daftar_model->bulan();
            $data = array('title'=>'Rekap Daftar Pengunjung',
                          'daftar' => $this->daftar_model->bulan(),
                          'isi' =>'admin/daftar/rekap');
        
            $this->load->view('admin/layout/wrapper',$data);
        }
        }

    public function rekap() {
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $nilairekap = $this->input->post('nilairekap');

        if ($nilairekap = 1) {
            $data['title'] = "Rekap Per Bulan";
            $data['subtitle'] = "Bulan :".$bulan. 'tahun :'.$tahun;
            $data['datafilter'] = $this->daftar_model->bulanan($tahun,$bulan);
            $data['isi'] ="admin/daftar/rekap";

            $this->load->view('admin/layout/wrapper', $data);
        }
    } 
} 