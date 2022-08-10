<?php
class berita_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function history_berita($read = FALSE) 
    {
        if ($read === FALSE) 
        {
            $query = $this->db->query('SELECT * FROM berita WHERE status_berita ="publish" ORDER BY berita_id DESC');
            return $query->result_array();
        }
            $query = $this->db->get_where('berita', array('slug' => $read));
            return $query->row_array();
    }
}       
?>