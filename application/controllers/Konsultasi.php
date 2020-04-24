<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Konsultasi';

        $this->load->view('konsultasi/index', $data);
    }
}
