<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
    }

    public function index()
    {
        $data['title'] = 'Pegawai';
        $data['pegawai'] = $this->M_pegawai->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add()
    {

        $data['title'] = 'Pegawai';
        $data['jabatan'] = $this->M_pegawai->get_jabatan();
        $data['kontrak'] = $this->M_pegawai->get_kontrak();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/add', $data);
        $this->load->view('templates/footer');

    }

    function add_prosses()
    {
            $data_pegawai = [
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'jabatan' => $this->input->post('jabatan'),
                'kontrak' => $this->input->post('kontrak')
            ];

        $this->db->insert('pegawai', $data_pegawai);
        $this->session->set_flashdata('success','Action Completed');
        redirect('pegawai');
    }

    function edit($params){
        $data['title'] = 'Edit pegawai';
        $data['pegawai'] = $this->M_pegawai->get_detail($params);
        $data['jabatan'] = $this->M_pegawai->get_jabatan();
        $data['kontrak'] = $this->M_pegawai->get_kontrak();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/edit', $data);
        $this->load->view('templates/footer');
    }

    function edit_prosses()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $data_pegawai = [
            'id_pegawai' => $id_pegawai,
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'jabatan' => $this->input->post('jabatan'),
            'kontrak' => $this->input->post('kontrak')
        ];

        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->update('pegawai', $data_pegawai);

        $this->session->set_flashdata('success','Action Completed');
        redirect('pegawai');
    }

    function delete($id)
    {
        $this->M_pegawai->delete($id);
        $this->session->set_flashdata('success','Action Completed');
        redirect('pegawai');

    }

}
