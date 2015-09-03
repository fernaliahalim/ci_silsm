<?php
	class Login extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('login_v');
		}
		
		public	function sign_in() {
		$uname = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$this->load->model('Pengguna_m');
		$this->Pengguna_m->setUsername($uname);
		$this->Pengguna_m->setPassword($pass);	
		$result = $this->Pengguna_m->view_by_user_pass();
		
		if($result->num_rows()) {
			$row = $result->row();
			$this->session->set_userdata('username',$row->username);
			$this->session->set_userdata('nama',$row->nama);
			$this->session->set_userdata('status','pengajar');
			$this->session->set_userdata('id',$row->id_pengajar);
			
			redirect('tes');
		}else{
			//echo "Login Gagal";
			$this->Pengguna_m->setUsername($uname);
			$this->Pengguna_m->setPassword($pass);	
			$result = $this->Pengguna_m->view();
			
			if($result->num_rows()) {
			$row = $result->row();
			$this->session->set_userdata('username',$row->username);
			$this->session->set_userdata('nama',$row->nama);
			$this->session->set_userdata('status','admin');
			redirect('manipulasi_admin');
			
			}else{
				echo "Gagal";
				}
		}
		}
	}
?>