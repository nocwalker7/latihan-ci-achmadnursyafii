<?php
class Ahad extends CI_Controller
{
    function index()
    {
        $data = array('judul'=>'Welcome');
        $this->load->view('table_v', $data);
    }
}