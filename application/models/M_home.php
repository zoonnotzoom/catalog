<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function get_all_data($limit, $start, $keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
        $this->db->order_by('id_barang', 'desc');
        if ($keyword) {
            $this->db->like('nama_barang', $keyword);
            $this->db->or_like('harga', $keyword);
        }
        return $this->db->get('', $limit, $start)->result();
    }

    public function get_all_data_default($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
        $this->db->order_by('id_barang', 'desc');
        return $this->db->get('', $limit, $start)->result();
    }

    public function get_all_data_barang_kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
        $this->db->where('tbl_barang.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }

    public function countAllbarang()
    {
        return $this->db->get('tbl_barang')->num_rows();
    }

    public function get_all_data_kategori()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->order_by('id_kategori', 'desc');
        return $this->db->get()->result();
    }

    public function detail_barang($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
        $this->db->where('id_barang', $id_barang);
        return $this->db->get()->row();
    }

    public function gambar_barang($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tbl_gambar');
        $this->db->where('id_barang', $id_barang);
        return $this->db->get()->result();
    }

    public function kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }
}

/* End of file M_home.php */
