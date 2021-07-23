<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung extends CI_Controller
{

    public function index()
    {
        $this->load->view('hitung');
        $this->load->view('home');
    }
}
