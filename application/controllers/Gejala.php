<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Gejala';
        $data['gejala'] = $this->gejala->getGejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Gejala';
        $data['kode'] = $this->gejala->getKode();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Gejala';
        $data['gejala'] = $this->gejala->getGejalaId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->gejala->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('gejala');
    }

    public function update($id)
    {
        $this->gejala->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('gejala');
    }

    public function delete($id)
    {
        $this->gejala->delete($id);
        redirect('gejala');
    }
}
