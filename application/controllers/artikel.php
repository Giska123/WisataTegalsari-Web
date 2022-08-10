<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller 

{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('berita_model');
	
	}

public function baca($read) 
	{
		$data['berita'] = $this->berita_model->history_berita();
		$data['detail'] = $this->berita_model->history_berita($read);
		$data=array('title' =>$data['detail']['judul'],
					'berita' => $this->berita_model->history_berita(),
					'detail' => $this->berita_model->history_berita($read),
					'isi' =>'home/read_view'
					);
		$this->load->view('layout/wrapper',$data);
	}

	public function daftar() {
		$data=array('title'=>'Artikel-Artikel',
					'berita' => $this->berita_model->history_berita(),
					'isi'  =>'layout/listartikel'
						);
		$this->load->view('layout/wrapper',$data);
	}
}