<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Matakuliah_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['matakuliah'] = $this->Matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit($kode_matakuliah) {
        $data['matakuliah'] = $this->Matakuliah_model->get_matakuliah_by_kode($kode_matakuliah);
        
        if (!$data['matakuliah']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function update($kode_matakuliah) {
        // Validasi input
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($kode_matakuliah);
        } else {
            $data = array(
                'nama_matakuliah' => $this->input->post('nama_matakuliah'),
                'jenis'           => $this->input->post('jenis'),
                'prodi'           => $this->input->post('prodi')
            );

            $update_status = $this->Matakuliah_model->update_matakuliah($kode_matakuliah, $data);

            if ($update_status) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui data');
            }
            
            redirect('matakuliah');
        }
    }
    public function hapus($kode_matakuliah) {
        $this->Matakuliah_model->delete_matakuliah($kode_matakuliah);
        redirect('matakuliah');
    }
}
