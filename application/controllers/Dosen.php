<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $data['dosen'] = $this->Dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $this->form_validation->set_rules('nidn', 'NIDN', 'required|is_unique[dosen.nidn]');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[dosen.email]');
        $this->form_validation->set_rules('telp', 'Telepon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = [
                'nidn'          => $this->input->post('nidn'),
                'nama_dosen'    => $this->input->post('nama_dosen'),
                'alamat'        => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email'         => $this->input->post('email'),
                'telp'          => $this->input->post('telp')
            ];

            if ($this->Dosen_model->insert_dosen($data)) {
                $this->session->set_flashdata('success', 'Data dosen berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan data.');
            }
            
            redirect('dosen');
        }
    }

    public function edit($nidn) {
        $data['dosen'] = $this->Dosen_model->get_dosen_by_nidn($nidn);
        if (!$data['dosen']) {
            show_404();
        }
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function update($nidn) {
        $data = [
            'nama_dosen'    => $this->input->post('nama_dosen'),
            'alamat'        => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email'         => $this->input->post('email'),
            'telp'          => $this->input->post('telp')
        ];

        if ($this->Dosen_model->update_dosen($nidn, $data)) {
            $this->session->set_flashdata('success', 'Data dosen berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data.');
        }

        redirect('dosen');
    }

    public function hapus($nidn) {
        if ($this->Dosen_model->delete_dosen($nidn)) {
            $this->session->set_flashdata('success', 'Data dosen berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        }

        redirect('dosen');
    }
}
