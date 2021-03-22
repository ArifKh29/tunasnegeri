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

    function adddetkategori($idberita, $idkategori)
    {
        $query = $this->db->query("INSERT INTO `tb_detkategori`(`id_kategori`, `id_berita`) VALUES ('$idkategori','$idberita')");
        return $query;
    }
    function showdetkategori($idberita)
    {
        $query = $this->db->query("SELECT * FROM tb_detkategori JOIN tb_kategori ON tb_detkategori.id_kategori=tb_kategori.id_kategori WHERE tb_detkategori.id_berita='$idberita'");
        return $query->result();
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

    function showtag($idberita)
    {

        $query = $this->db->query("SELECT * from `tb_tagberita` WHERE id_berita='$idberita'");
        return $query->result();
    }
}
