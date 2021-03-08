<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');

        if ($this->input->post('role')) {
            $role = $this->input->post('role');
            $this->db->query("INSERT INTO `user_role`(`role`) VALUES ('$role')");
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Role Berhasis Ditambah</div>');
            redirect('admin/role');
        }
    }

    public function roleEdit()
    {
        $role_id = $this->input->post('id');
        $new_role = $this->input->post('role');
        $this->db->query("UPDATE `user_role` SET `role`='$new_role' WHERE id='$role_id'");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Role Berhasis Diubah</div>');
        redirect('admin/role');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Akses dirubah</div>');
    }

    public function deleterole()
    {
        $role_id = $this->uri->segment(3);
        $query = $this->db->query("DELETE FROM user_role WHERE id='$role_id'");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Role Berhasil Dihapus</div>');
        redirect('admin/role');
    }
}
