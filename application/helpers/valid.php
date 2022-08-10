<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');

function confirm()
{
    $id = 'daftar_id';
    $CI =& get_instance();
    $CI->load->model('validasi_model');
    $result= $CI->validasi_model->check($id);
}

?>