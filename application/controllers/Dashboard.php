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
		$data['menu'] = $this->db->get('tb_kategori')->result();
		// if ($this->input->post('load_cat_posts')) {
		// 	// echo "<script>console.log('hayooo')</script>";
		// }
		if ($cek == '') {
			$data['tittle'] = "Portal Berita";
			$data['berita'] = $this->db->get('tb_berita')->result();
			// $this->load->view('frontend/template/header', $data);
			// $this->load->view('frontend/template/top', $data);
			// $this->load->view('frontend/index');
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

	public function detail()
	{
		$this->load->view('portal/detail');
	}

	public function get()
	{
		$data = $this->db->get('tb_kategori')->result();
		// print_r($data);
		echo json_encode($data);
	}
}
