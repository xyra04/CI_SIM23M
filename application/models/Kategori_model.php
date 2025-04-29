<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function get_all_kategori() {
        return $this->db->get('kategori_berita')->result_array();
    }
    public function get_kategori_by_id($id) {
        return $this->db->get_where('kategori_berita', ['idkategori' => $id])->row_array();
    }
    public function insert_kategori($data) {
        return $this->db->insert('kategori_berita', $data);
    }
    public function update_kategori($id, $data) {
        $this->db->where('idkategori', $id);
        return $this->db->update('kategori_berita', $data);
    }
    public function delete_kategori($id) {
        $this->db->where('idkategori', $id);
        return $this->db->delete('kategori_berita');
    }
}
