<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    //function for search only
    public function index()
    {
        //take keyword
        if ($this->input->post('submit')) {
            $search['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $search['keyword']);
        } else {
            $search['keyword'] = $this->session->userdata('keyword');
        }
        //pagination
        $this->db->like('nama_barang', $search['keyword']);
        $this->db->or_like('harga', $search['keyword']);
        $this->db->from('tbl_barang');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 12;

        $start = ($this->uri->segment(3));
        $limit = $config['per_page'];

        //initialize the pagination
        $this->pagination->initialize($config);

        $data = array(
            'title' => '',
            'barang' => $this->m_home->get_all_data($limit, $start, $search['keyword']),
            'isi' => 'v_home'
        );



        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    //this one is default please use this
    public function index_default()
    {
        //pagination
        $this->db->from('tbl_barang');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 12;

        $start = ($this->uri->segment(3));
        $limit = $config['per_page'];

        //initialize the pagination
        $this->pagination->initialize($config);

        $data = array(
            'title' => '',
            'barang' => $this->m_home->get_all_data_default($limit, $start),
            'isi' => 'v_home'
        );



        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function kategori($id_kategori)
    {
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => $kategori->nama_kategori,
            'barang' => $this->m_home->get_all_data_barang_kategori($id_kategori),
            'isi' => 'v_kategori_barang'
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function detail_barang($id_barang)
    {
        $data = array(
            'title' => '',
            'gambar' => $this->m_home->gambar_barang($id_barang),
            'barang' => $this->m_home->detail_barang($id_barang),
            'isi' => 'v_detail_barang'
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}

/*Home.php */
