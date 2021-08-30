<?php
class Login extends ci_controller{
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
	
	public function index(){
		$kode=$this->db->get('tb_qr')->row_array();
		$data['kode']=$kode['kode'];
		$this->load->view('v_login',$data);
	}
 
	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}