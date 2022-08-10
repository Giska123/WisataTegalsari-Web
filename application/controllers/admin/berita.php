<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller 

{

public function __construct() {
parent::__construct();

$this->load->model('admin/berita_model','berita_model');
$this->load->library('upload','session');
$this->load->helper('url');

}

public function index() {
    $data=array('title'=>'dasbor admin');
        
	$this->load->view('admin/layout/wrapper',$data);
}

public function history() {
    
$query = $this->berita_model->history_berita();
$data=array('title'=>'History Berita',
            'berita' => $query,
            'isi' =>'admin/berita/berita_view');

$this->load->view('admin/layout/wrapper',$data);

}

// Controler tambah berita di sini
public function tambah() {
    
        
    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
    $this->form_validation->set_rules('isi', 'Isi berita', 'required');
    $this->form_validation->set_rules('sumber', 'Sumber');
    if (empty($_FILES['gambar']['name']))
    {
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
    }
        if ($this->form_validation->run() == FALSE) 
        {
            $data=array('title'=>'Buat Berita',
                        'isi' =>'admin/berita/tambah_berita');
            $this->load->view('admin/layout/wrapper',$data);
         
        } 
        else 
        {
            $this->load->library('upload');

            if (!empty($_FILES['gambar']['name']))
        {
        
            $config['upload_path']          = 'upload/files/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = '1048';

            $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar'))
        {
            $img = $this->upload->data();
            $slug = url_title($this->input->post('judul'), 'dash', TRUE);

            $data = array(
                    'judul' => $this->input->post('judul'),
                    'slug' => $slug,
                    'tanggal' => $this->input->post('tanggal'),
                    'gambar' =>$img['file_name'],
                    'sumber' => $this->input->post('sumber'),
                    'isi' => $this->input->post('isi'),
                    'status_berita' => $this->input->post('status_berita'),
            );
            $this->berita_model->tambah($data);
            redirect(base_url().'admin/berita/');
        }
        else
        {
            echo $this->upload->display_errors();
        }
    
}
}
}


public function edit($id) {
    $data['detail'] = $this->berita_model->detail($id);
    $data=array('title'=>'Edit Berita:'.$data['detail']['judul'],
                'detail' => $this->berita_model->detail($id),
                'isi' =>'admin/berita/edit_berita');
    $this->load->view('admin/layout/wrapper',$data);
}

public function update(){

    $id=$this->input->post('berita_id');
    
    $this->load->library('upload');

            if (!empty($_FILES['gambar']['name']))
        {
        
            $config['upload_path']          = 'upload/files/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = '1048';

            $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar'))
        {
            $img = $this->upload->data();
            $slug = url_title($this->input->post('judul'), 'dash', TRUE);

            $data = array(
                    'judul' => $this->input->post('judul'),
                    'slug' => $slug,
                    'tanggal' => $this->input->post('tanggal'),
                    'gambar' =>$img['file_name'],
                    'sumber' => $this->input->post('sumber'),
                    'isi' => $this->input->post('isi'),
                    'status_berita' => $this->input->post('status_berita'),
            );
            $this->berita_model->edit_berita($data, $id);
            $admin = array('title'=>'Admin Tegalsari',
                            'isi' =>'');

            $this->load->view('admin/layout/wrapper',$admin);
        }
        else
        {
            echo $this->upload->display_errors();
        }
    }
}

   

    // Menghapus berita
    public function delete($id) {
    $this->berita_model->delete_berita($id);
    redirect(base_url().'admin/berita/history');
    }

}
