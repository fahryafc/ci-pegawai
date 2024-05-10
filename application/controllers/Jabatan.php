<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jabatan');
    }

    public function index()
    {
        $data['title'] = 'Jabatan';
        $data['jabatan'] = $this->M_jabatan->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jabatan/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add()
    {
        $data['title'] = 'jabatan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('jabatan/add', $data);
        $this->load->view('templates/footer');

    }

    function add_prosses()
    {
            $data_jabatan = [
                'nama_jabatan' => $this->input->post('nama_jabatan')
            ];

        $this->db->insert('jabatan', $data_jabatan);
        $this->session->set_flashdata('success','Action Completed');
        redirect('jabatan');
    }

    function edit($params){
        $data['title'] = 'Edit jabatan';
        $data['jabatan'] = $this->M_jabatan->get_detail($params);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('jabatan/edit', $data);
        $this->load->view('templates/footer');
    }

    function edit_prosses()
    {
            $id_jabatan = $this->input->post('id_jabatan');
            $data_jabatan = [
                'id_jabatan' => $id_jabatan,
                'nama_jabatan' => $this->input->post('nama_jabatan')
            ];

        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->update('jabatan', $data_jabatan);

        $this->session->set_flashdata('success','Action Completed');
        redirect('jabatan');
    }

    function delete($id)
    {
        $this->M_jabatan->delete($id);
        $this->session->set_flashdata('success','Action Completed');
        redirect('jabatan');

    }

}
