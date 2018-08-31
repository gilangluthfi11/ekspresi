<?php
	
	class Posts extends CI_Controller{
		public function article(){
			$this->load->view('frontend_pages/templates/artikel_header');
			$this->load->view('frontend_pages/posts/article');
			$this->load->view('frontend_pages/templates/footer');
		}

		public function list_article(){
			$this->load->view('frontend_pages/templates/artikel_header');
			$this->load->view('frontend_pages/posts/daftar_artikel');
			$this->load->view('frontend_pages/templates/footer');
		}
	}

?>