<?php
		
	class HtmltoPDF extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('htmltopdf_model');
		}
		public function index(){
			$data['customer_data']=$this->htmltopdf_model->fetch();
			$this->load->view('htmltopdf',$data);
		}
	}

 ?>