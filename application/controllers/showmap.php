<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showmap extends CI_Controller{
    
    function index()
    {
	$this->load->view('header');
	$this->load->view('map');
	$this->load->view('footer');
    }
}
?>
