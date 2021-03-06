<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihat extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kabag_tu" && $this->session->userdata('tingkatan') != "kabag_tu") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_data_proposal_disetujui()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('kabag_tu/proposal_masuk',$data);
		
	}

}
