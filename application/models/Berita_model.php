<?php

class Berita_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function cekkodeberita()
    {
        $query = $this->db->query("SELECT MAX(id_berita) as idberita from tb_berita");
        $hasil = $query->row();
        return $hasil->idberita;
    }

    function addtag($idberita, $tag)
    {
        $query = $this->db->query("INSERT INTO `tb_tagberita`(`tag`, `id_berita`) VALUES ('$tag','$idberita')");
        return $query;
    }
    function deltag($idtag)
    {
        $query = $this->db->query("DELETE FROM `tb_tagberita`WHERE id_tag='$idtag'");
        return $query;
    }

    function showtag($idtag)
    {
        $query = $this->db->query("SELECT * from `tb_tagberita` WHERE id='$idtag'");
        return $query->result();
    }
}
