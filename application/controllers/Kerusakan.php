<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerusakan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Kerusakan';
        $data['kerusakan'] = $this->kerusakan->getKerusakan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kerusakan/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Kerusakan';
        $data['kode'] = $this->kerusakan->getKode();
        $data['gejala'] = $this->gejala->getGejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kerusakan/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Kerusakan';
        $data['kerusakan'] = $this->kerusakan->getKerusakanId($id);
        $data['gejala'] = $this->gejala->getGejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kerusakan/ubah');
        $this->load->view('templates/footer');
    }

    public function gejala($id)
    {
        $data['title'] = 'Ubah Data Gejala';
        $data['kerusakan'] = $this->kerusakan->getKerusakanId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kerusakan/gejala');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->kerusakan->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('kerusakan');
    }

    public function update($id)
    {
        $this->kerusakan->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('kerusakan');
    }

    public function delete($id)
    {
        $this->kerusakan->delete($id);
        redirect('kerusakan');
    }

    public function ubahRelasi()
    {
        $gejala_id = $this->input->post('gejalaId');
        $kerusakan_id = $this->input->post('kerusakanId');

        $data = [
            'kerusakan_id' => $kerusakan_id,
            'gejala_id' => $gejala_id
        ];

        $result = $this->db->get_where('relasi', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('relasi', $data);
        } else {
            $this->db->delete('relasi', $data);
        }
    }
}
