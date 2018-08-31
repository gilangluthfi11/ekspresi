<?php

	class Pages extends CI_Controller{
		public function home(){

			$this->load->view('frontend_pages/templates/header');
			$this->load->view('frontend_pages/pages/home');
			$this->load->view('frontend_pages/templates/footer');
		}

		public function join_us(){

			$this->load->view('frontend_pages/templates/artikel_header');
			$this->load->view('frontend_pages/pages/join_us');
			$this->load->view('frontend_pages/templates/footer');
		}

		public function forget_password(){

			$this->load->view('frontend_pages/templates/artikel_header');
			$this->load->view('frontend_pages/pages/lupa_password');
			$this->load->view('frontend_pages/templates/footer');
		}

		public function member(){

			$this->load->view('frontend_pages/templates/artikel_header');
			$this->load->view('frontend_pages/pages/member');
			$this->load->view('frontend_pages/templates/footer');
		}

		public function edit_member(){
			
			$this->load->view('frontend_pages/templates/artikel_header');
			$this->load->view('frontend_pages/pages/edit_member');
			$this->load->view('frontend_pages/templates/footer');
		}
	}
?>