<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->db->query("SELECT *, tb_kategori.nama_kategori as kategori, tb_subkategori.nama_subkategori as subkategori FROM `tb_berita` JOIN tb_kategori JOIN tb_subkategori ON tb_berita.id_kategori=tb_kategori.id_kategori AND tb_kategori.id_kategori=tb_subkategori.id_kategori")->result();
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function add(){
        $data['title'] = 'Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->db->query("SELECT *, tb_kategori.nama_kategori as kategori, tb_subkategori.nama_subkategori as subkategori FROM `tb_berita` JOIN tb_kategori JOIN tb_subkategori ON tb_berita.id_kategori=tb_kategori.id_kategori AND tb_kategori.id_kategori=tb_subkategori.id_kategori")->result();
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $data['subkategori'] = $this->db->get('tb_subkategori')->result();
        // print_r($data['berita']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita/add', $data);
        $this->load->view('templates/footer');
    }

    public function kategori(){
        $data['title'] = 'Kategori Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->db->get('tb_kategori')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita/kategori', $data);
        $this->load->view('templates/footer');
    }

    public function subkategori(){
        $idkategori = $this->uri->segment(3);
        $data['title'] = 'Sub Kategori Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['subkategori'] = $this->db->query("SELECT * FROM `tb_subkategori` WHERE id_kategori='$idkategori'")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita/sub_kategori', $data);
        $this->load->view('templates/footer');
    }

    public function editSubKategori(){
        $subkategori = $this->input->post('subkategori');
        $id = $this->input->post('id');

        $this->db->query("UPDATE `tb_subkategori` SET `nama_subkategori`='$subkategori' WHERE `id_subkategori`='$id'");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Perubahan data berhasil</div>');
        redirect('berita/kategori');
    }

    public function addSubKategori(){
        $subkategori = $this->input->post('subkategori');

        $this->db->query("INSERT INTO `tb_subkategori`( `nama_subkategori`) VALUES ('$subkategori')");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Sub Kategori Berhasil Ditambahkan</div>');
        redirect('berita/kategori');
    }

    public function editKategori(){
        $kategori = $this->input->post('kategori');
        $status = $this->input->post('status');
        $id = $this->input->post('id');

        $this->db->query("UPDATE `tb_kategori` SET `nama_kategori`='$kategori',`status`='$status' WHERE `id_kategori`='$id'");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Perubahan data berhasil</div>');
        redirect('berita/kategori');
    }

    public function addKategori(){
        $kategori = $this->input->post('kategori');
        $status = $this->input->post('status');

        $this->db->query("INSERT INTO `tb_kategori`( `nama_kategori`, `status`) VALUES ('$kategori','$status')");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Kategori Berhasil Ditambahkan</div>');
        redirect('berita/kategori');
    }

    public function simpan(){
        // $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $tanggal = $this->input->post('tanggal');
        $judul = $this->input->post('judul');
        $cuplikan = $this->input->post('cuplikan');
        $isi = $this->input->post('isi');
        $kategori = $this->input->post('kategori');
        $subkategori = $this->input->post('subkategori');
        $tag = $this->input->post('tag');

        $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/berita/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    // $this->db->set('foro', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

        $this->db->query("INSERT INTO `tb_berita`( `tanggal`, `judul_berita`, `cuplik`, `isi`, `foto`, `id_kategori`, `tags`, `id_subkategori`) VALUES ('$tanggal','$judul','$cuplikan','$isi','$upload_image','$kategori','$tag','$subkategori')");
    }

    
}
