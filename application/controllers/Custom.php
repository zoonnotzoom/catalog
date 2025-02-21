<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => '',
            'isi' => 'v_custom'
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}

/* End of file Custom.php */
