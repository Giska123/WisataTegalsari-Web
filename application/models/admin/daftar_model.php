<?php

class daftar_model extends CI_Model
{
    public function daftar_kunjung()
    {
        $query = $this->db->query('SELECT daftar.daftar_id, daftar.tgl_daftar, daftar.nama_instansi, daftar.alamat, daftar.tanggal, daftar.jumlah, daftar.tujuan, daftar.kontak, daftar.status FROM daftar ORDER BY daftar_id DESC');
        return $query->result_array();
       
    }

    public function daftar($data) {
        return $this->db->insert('daftar', $data);
        }
    

    public function bulanan($tahun,$bulan) {
        
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->where('status',"1");
        $this->db->where('Month(tanggal)', $bulan);
        $this->db->where('Year(tanggal)', $tahun);

        $query = $this->db->get();
        return $query->result();

    }
    public function bulan($tahun,$bulan) 
    {
        $query = $this->db->query('SELECT * FROM daftar WHERE status = 1 , YEAR(tanggal) = $tahun and  MONTH(tanggal) = $bulan ORDER BY tanggal ASC');
        return $query->result();
        
    }

}