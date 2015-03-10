<?php
class Readfile extends CI_Controller{
    
    public function index(){
	
	   
	   $this->load->view('header');
	

	
	  // $this->load->library('csvreader');
    
           $filePath = './uploads/Building_Data_24-04-13_0.csv';
      
//           $data['csvData'] = $this->csvreader->parse_file($filePath);
 
           $this->load->view('csv_view', $data);
   
	   $this->load->view('footer');
	   
	
}
}

?>