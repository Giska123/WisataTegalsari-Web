<?php
class berita_model extends CI_Model {
    
public function __construct() {
   
    $this->load->database();
}


// Menampilkan data berita
public function history_berita() 
{
$query = $this->db->query('SELECT berita.berita_id, berita.judul, berita.tanggal, berita.status_berita FROM berita ORDER BY berita_id DESC');
return $query->result_array();
}

// Model untuk menambah berita
public function tambah($data) {
    return $this->db->insert('berita', $data);
    }

// detail berita
public function detail($id) {
    $query = $this->db->get_where('berita', array('berita_id' => $id));
    return $query->row_array();
    }



// Update berita
public function update($id) 
{
        $data['detail'] = $this->db->get_where('berita',['berita_id' => $id])->row_array();
       
        // cek jika ada gambar yang di upload
        $upload_image = $_FILES['gambar'];

        if($upload_image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '1048';
            $config['upload_path'] = 'upload/files/';

           
          
            $this->load->library('upload', $config);
            
           if($this->upload->do_upload('gambar')) {
               $old_image = $data['detail']['gambar'];
               $path = 'upload/files/';

               if($old_image != 'default.jpeg') {
                   unlink(FCPATH.$path.$old_image);
               } 
               
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar',$new_image);

            } else {
                   $this->upload->display_errors();                
                   
               }
           }
           
           $slug = url_title($this->input->post('judul'), 'dash', TRUE);
           $data = array(
                    'judul' => $this->input->post('judul', true),
                    'slug' => $slug,
                    'isi' => $this->input->post('isi',  true),
                    'sumber' => $this->input->post('sumber', true),
                    'tanggal' => $this->input->post('tanggal', true),
                    'status_berita' => $this->input->post('status_berita', true)
        
            );
            
           $this->db->set($data);
           $this->db->where('berita_id', $this->input->post('berita_id', true));
           return $this->db->update('berita', $data);
    }


public function edit_berita($data, $id) {
    $this->db->where('berita_id', $id);
    return $this->db->update('berita', $data);
}



 // Hapus berita
public function delete_berita($id) {
    $this->db->where('berita_id',$id);
    return $this->db->delete('berita');
    }

}
?>