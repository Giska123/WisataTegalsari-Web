<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Sitemap_model extends CI_Model {
 
 private static $_table = 'berita';
 
 public function create() {

  $query = $this->db->select('*')->from(self::$_table)->order_by('tanggal', 'DESC')->get();

  $results = array();
        if ($query->num_rows() > 0) {
         $results = $query->result_array();
        }
        return $results;
 }
}
?>