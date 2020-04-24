<?php

function check_relasi($kerusakan_id, $gejala_id)
{
    $ci = get_instance();

    $ci->db->where('kerusakan_id', $kerusakan_id);
    $ci->db->where('gejala_id', $gejala_id);
    $result = $ci->db->get('relasi');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
