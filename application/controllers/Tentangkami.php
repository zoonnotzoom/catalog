<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tentangkami extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => '',
            'isi' => 'v_tentangkami'
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}

/* End of file Tentangkami.php */
