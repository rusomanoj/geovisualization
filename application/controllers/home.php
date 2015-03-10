<?php

class Home extends CI_Controller
{
    public function index()
    {
	$this->load->view('header');
	$this->load->view('home/home_view');
	$this->load->view('footer');
	//$this->load->view('home_view');
    }
}
?>
