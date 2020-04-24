<?php

class Gejala_model extends CI_model
{
    public function getKode()
    {
        $this->db->select_max('kode_gejala', 'kode');
        $query = $this->db->get('gejala')->row_array();

        $data = $query['kode'];
        $noUrut = (int) substr($data, 1, 2);
        $noUrut++;

        $kode = 'G' . sprintf('%02s', $noUrut);
        return $kode;
    }

    public function getGejala()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getGejalaId($id)
    {
        return $this->db->get_where('gejala', array('id_gejala' => $id))->row_array();
    }

    public function insert()
    {
        $data = [
            'kode_gejala' => $this->input->post('kode'),
            'gejala' => $this->input->post('gejala')
        ];

        $this->db->insert('gejala', $data);
    }

    public function update($id)
    {
        $data = [
            'gejala' => $this->input->post('gejala')
        ];

        $this->db->update('gejala', $data, ['id_gejala' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('gejala', ['id_gejala' => $id]);
    }
}