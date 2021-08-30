<?php
class Admin extends ci_controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/footer');
	}

// ini untuk tampilan	
	public function masterOutput($output = null)
	{
		$this->load->view('v_master.php',(array)$output);
	}
	
// ini untuk crud siswa
	public function crud_siswa()
	{
		
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			//$crud->set_theme('flexigrid');
			
			$crud->set_table('tb_datasiswa');
			$crud->set_subject('siswa');
			$crud->required_fields('nis','nama_siswa','kelas','tgl_lahir','jk','alamat');
			$crud->columns('nis','nama_siswa','kelas','tgl_lahir','jk','alamat');
            $crud->unset_clone();
			$output = $crud->render();
			
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->masterOutput($output);
			$this->load->view('template/footer');
			

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
public function crud_walisiswa()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			//$crud->set_theme('flexigrid');
			
			$crud->set_table('tb_datawalisiswa');
			$crud->set_subject('wali siswa');
			$crud->required_fields('nis','nama_walisiswa','hubungan_wali','jk','Imei');
			$crud->columns('nis','nama_walisiswa','hubungan_wali','jk','Imei');
            $crud->unset_clone();
			$output = $crud->render();
			
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->masterOutput($output);
			$this->load->view('template/footer');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
public function crud_hubunganwali()
	{
		
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			//$crud->set_theme('flexigrid');
			
			$crud->set_table('tb_hubunganwali');
			$crud->set_subject('hubungan_wali');
			$crud->required_fields('hubungan_wali');
			$crud->columns('hubungan_wali');
            $crud->unset_clone();
			$output = $crud->render();
			
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->masterOutput($output);
			$this->load->view('template/footer');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function crud_penjemputan()
	{
		
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			//$crud->set_theme('flexigrid');
			
			$crud->set_table('tb_penjemputan');
			$crud->set_subject('Penjemputan');
			$crud->required_fields('kode','nama_siswa','nama_walisiswa','jamtgl');
			$crud->columns('kode','nama_siswa','nama_walisiswa','jamtgl');
            $crud->unset_clone();
			$output = $crud->render();
			
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->masterOutput($output);
			$this->load->view('template/footer');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	
}

?>