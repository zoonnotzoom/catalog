<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
    }

    // List all items
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->m_kategori->get_all_data(),
            'isi' => 'v_kategori'
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->m_kategori->add($data);
        $this->session->set_flashdata('pesan', 'kategori berhasil ditambahkan');
        redirect('kategori');
    }

    //Update one item
    public function edit($id_kategori = NULL)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->m_kategori->edit($data);
        $this->session->set_flashdata('pesan', 'kategori berhasil diubah');
        redirect('kategori');
    }

    //Delete one item
    public function delete($id_kategori = NULL)
    {
        $data = array('id_kategori' => $id_kategori);
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan', 'kategori berhasil dihapus');
        redirect('kategori');
    }
}

/* End of file Kategori.php */
