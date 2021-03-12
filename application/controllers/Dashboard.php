<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

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
		$cek = $this->uri->segment(3);
		$data['menu'] = $this->db->query("SELECT * FROM `tb_kategori` WHERE status='show'")->result();
		// if ($this->input->post('load_cat_posts')) {
		// 	// echo "<script>console.log('hayooo')</script>";
		// }
		if ($cek == '') {
			$data['tittle'] = "Portal Berita";
			$data['berita'] = $this->db->get('tb_berita')->result();
			$today = date('Y-m-d');
			$last30day = date('Y-m-d', strtotime('-30 days', strtotime($today)));
			$data['headline'] = $this->db->query("SELECT * from tb_berita GROUP BY `tanggal` DESC LIMIT 3");
			$data['popular'] = $this->db->query("SELECT * from tb_berita WHERE tanggal BETWEEN '$last30day' AND '$today' GROUP BY lihat DESC LIMIT 4")->result();
			$data['berita'] = $this->db->query("SELECT * FROM `tb_berita` JOIN tb_kategori JOIN user ON tb_berita.id_kategori=tb_kategori.id_kategori AND tb_berita.author=user.id GROUP BY tanggal DESC")->result();

			$data['peristiwa'] = array();
			foreach ($data['berita'] as $peristiwa) {
				if ($peristiwa->nama_kategori == 'Peristiwa') {
					array_push($data['peristiwa'], $peristiwa);
				}
			}
			$data['pemerintahan'] = array();
			foreach ($data['berita'] as $pemerintahan) {
				if ($pemerintahan->nama_kategori == 'Pemerintahan') {
					array_push($data['pemerintahan'], $pemerintahan);
				}
			}
			$data['budaya'] = array();
			foreach ($data['berita'] as $budaya) {
				if ($budaya->nama_kategori == 'Budaya') {
					array_push($data['budaya'], $budaya);
				}
			}
			$this->load->view('portal/template/header', $data);
			$this->load->view('portal/index', $data);
			$this->load->view('portal/template/footer');
		} else {
			$data['tittle'] = "Portal Berita - " . $cek;
			$data['kategoriberita'] = $this->db->query("SELECT * FROM `tb_kategori` WHERE '" . $cek . "'");
			// $this->load->view('frontend/template/header', $data);
			// $this->load->view('frontend/template/top', $data);
			// $this->load->view('frontend/menu_index');
			$this->load->view('portal/template/header', $data);
			$this->load->view('portal/index', $data);
			$this->load->view('portal/template/footer');
		}
	}
	public function kategori()
	{
		$data['tittle'] = "Portal Berita - ";
		$namakategori = $this->uri->segment(3);
		$data['menu'] = $this->db->query("SELECT * FROM `tb_kategori` WHERE status='show'")->result();
		// $data['kategoriberita'] = $this->db->query("SELECT * FROM `tb_kategori` WHERE '" . $cek . "'");
		$data['berita'] = $this->db->query("SELECT * FROM `tb_berita` JOIN tb_kategori JOIN user ON tb_berita.id_kategori=tb_kategori.id_kategori AND tb_berita.author=user.id WHERE nama_kategori='$namakategori' GROUP BY tanggal DESC")->result();

		$this->load->view('portal/template/header', $data);
		$this->load->view('portal/kategori', $data);
		$this->load->view('portal/template/footer');
		// print_r($data['berita']);
	}
	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['menu'] = $this->db->query("SELECT * FROM `tb_kategori` WHERE status='show'")->result();
		$data['tittle'] = "Tunas Negeri";
		// $data['kategoriberita'] = $this->db->query("SELECT * FROM `tb_kategori` WHERE '" . $cek . "'");
		$data['detail'] = $this->db->query("SELECT * FROM tb_berita JOIN tb_kategori JOIN user ON tb_berita.id_kategori=tb_kategori.id_kategori AND tb_berita.author=user.id WHERE id_berita='$id'")->row_array();
		$data['berita'] = $this->db->query("SELECT * FROM `tb_berita` JOIN tb_kategori JOIN user ON tb_berita.id_kategori=tb_kategori.id_kategori AND tb_berita.author=user.id GROUP BY tanggal DESC")->result();
		$this->load->view('portal/template/header', $data);
		$this->load->view('portal/detail');
		$this->load->view('portal/template/footer');
	}

	public function get()
	{
		$data = $this->db->get('tb_kategori')->result();
		// print_r($data);
		echo json_encode($data);
	}
}
