<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller 

{
 public function index(){
     $this->load->model('sitemap_model');
     $this->load->helper('url');
     
     $data['berita'] = $this->sitemap_model->create();
     
     $this->load->view('sitemap_view.xml',$data);
 }
}