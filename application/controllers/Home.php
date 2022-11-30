<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('header.php');
        $this->load->view('home.php');
        //$this->load->view('contact.php');
        $this->load->view('footer.php');
    }
}
