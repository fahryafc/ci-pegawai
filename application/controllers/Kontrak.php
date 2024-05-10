<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kontrak');
    }

    public function index()
    {
        $data['title'] = 'Kontrak';
        $data['kontrak'] = $this->M_kontrak->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kontrak/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add()
    {

        $data['title'] = 'Kontrak';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kontrak/add', $data);
        $this->load->view('templates/footer');

    }

    function add_prosses()
    {
        $data_kontrak = [
            'durasi_kontrak' => $this->input->post('durasi_kontrak')
        ];

        $this->db->insert('kontrak', $data_kontrak);
        $this->session->set_flashdata('success','Action Completed');
        redirect('kontrak');
    }

    function edit($params){
        $data['title'] = 'Edit Kontrak';
        $data['kontrak'] = $this->M_kontrak->get_detail($params);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kontrak/edit', $data);
        $this->load->view('templates/footer');
    }

    function edit_prosses()
    {
        $id_kontrak = $this->input->post('id_kontrak');
            $data_kontrak = [
                'id_kontrak' => $id_kontrak,
                'durasi_kontrak' => $this->input->post('durasi_kontrak'),
            ];

        $this->db->where('id_kontrak', $id_kontrak);
        $this->db->update('kontrak', $data_kontrak);

        $this->session->set_flashdata('success','Action Completed');
        redirect('kontrak');
    }

    function delete($id)
    {
        $this->M_kontrak->delete($id);
        $this->session->set_flashdata('success','Action Completed');
        redirect('kontrak');

    }

}
