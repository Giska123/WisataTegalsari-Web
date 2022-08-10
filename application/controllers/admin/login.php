<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('admin/model_login');
		$this->load->helper('url','form');
		$this->load->library('form_validation','session');
 
	}

	public function index() {

		$this->load->view('admin/login_view');	
	}

	public function masuk() {

        $this->form_validation->set_rules('username', 'Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');
            
            if ($this->form_validation->run() == TRUE ) 
            { 
                $admin = $this->model_login->login($this->input->post('password'));
                
                if (!$admin) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Tidak Valid</div>');
                    $this->load->view('admin/login_view');
                }

            else {
            $login = array(
                'username' => $admin->username,
                'password' => $admin->password
            );
            $this->session->set_userdata($login);
            $data=array('title'=>'dasbor admin',
						'isi'=>'');
			$this->load->view('admin/layout/wrapper',$data);
            }

        } else {
            $this->load->view('admin/login_view');
        }
    }
}