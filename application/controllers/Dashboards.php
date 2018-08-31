<?php

	class Dashboards extends CI_Controller{
		public function admin(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/dashboard');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function admin_login(){

			$this->load->view('backend_pages/login_admin');
		}

		public function member_list(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/members/daftar_member');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function package_list(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/members/paket_membership');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function invoice(){

			$this->load->view('backend_pages/members/invoice');
		}

		public function member_profile(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/members/profil_member');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function article_list(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/articles/daftar_artikel');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function add_article(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/articles/tambah_artikel');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function newsletter_list(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/newsletters/daftar_newsletter');
			$this->load->view('backend_pages/templates/admin_footer');
		}

		public function add_newsletter(){

			$this->load->view('backend_pages/templates/admin_header');
			$this->load->view('backend_pages/newsletters/newsletter_baru');
			$this->load->view('backend_pages/templates/admin_footer');
		}
	}
?>