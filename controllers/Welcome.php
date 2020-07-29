<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		public function index()
	{
		$this->load->model('queries');
		$posts=$this->queries->getPosts();
		$this->load->view('welcome_message',['posts' => $posts]);
	}
	public function create(){
		echo "string";
		$this->load->view('create');
	}
	public function update($id){
		echo $id;
		$this->load->model('queries');
		$post=$this->queries->getsinglePosts($id);
		$this->load->view('update',['post'=>$post]);

	}

	public function save(){
		$this->form_validation->set_rules('title','Title','required');
		//$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('date_created','Date','required');


		if($this->form_validation->run()){
			// echo "string";
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			// $this->queries->addPost($data);
			if ($this->queries->addPost($data)){
				$this->session->set_flashdata('msg','Item saved successfully');

			}else{
				$this->session->set_flashdata('msg','Item saved unsuccessfully');

			}
			return redirect('welcome');

		}else{
			echo validation_errors();
		}

	}
	public function change($id){
		echo "string";

		$this->form_validation->set_rules('title','Title','required');
		//$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('date_created','Date','required');


		if($this->form_validation->run()){
			// ecoh "string";
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			// $this->queries->addPost($data);
			if ($this->queries->updatePost($data,$id)){
				$this->session->set_flashdata('msg','Item Updated successfully');

			}else{
				$this->session->set_flashdata('msg','Item Update unsuccessfully');

			}
			return redirect('welcome');

			}else{
			echo validation_errors();
			}


	}
	public function view($id){
		$this->load->model('queries');
		$post=$this->queries->getsinglePosts($id);
		$this->load->view('view',['post'=>$post]);

	}

	public function delete($id){
		echo $id;
		$this->load->model('queries');
		if($this->queries->deletePosts($id)){
			$this->session->set_flashdata('msg','Item Deleted successfully');
		}else{
			$this->session->set_flashdata('msg','Item Deleted Unsuccessfully');
		}
		return redirect('welcome');

		// $this->load->view('view',['post'=>$post]);

	}
	public function generate(){
		// parent::__construct();
		// $this->load->library('pdf');
		echo "string";
		$this->load->model('queries');
		$posts=$this->queries->getPosts();
		$this->load->view('generate',['posts' => $posts]);
		// $html_content ='<h3 >CC</h3>';
		// $html_content.=$this->load->model('generate',['posts' => $posts]);
		// $this->pdf->loadHtml($html_content);
		// $this->pdf->render();
		// $this->pdf->stream("rr.pdf",array("Attachment"=>0));
		// $this->load->view->('welcome_message',$data);
	}
	


}
