<?php
class render_qr extends ci_controller{
    
     function __construct(){
        parent::__construct();
        
		$this->load->library('CIqrcode');
		$this->load->library('grocery_CRUD');
      //  $this->load->model('m_model');
    }
    
    function index(){

     //   $this->load->view('v_render',$data);
    }
	
	public function masterOutput($output = null)
	{
		$this->load->view('v_master.php',(array)$output);
	}
	
    
	
	public function crud_qr()
	{
		
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_theme('flexigrid');
			
			$crud->set_table('tb_qr');
			$crud->set_subject('Kode Harian');
			$crud->required_fields('kode');
			$crud->columns('kode');
			$crud->unset_clone();
			$crud->unset_add();
			$crud->unset_print();
			$crud->unset_export();
			$crud->unset_read();
			$crud->unset_delete();
			
			
			
		
			
			$output = $crud->render();
			
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$kode=$this->db->get('tb_qr')->row_array();
			$data['kode']=$kode['kode'];
			$this->load->view('v_qr',$data);
			$this->masterOutput($output);
			$this->load->view('template/footer');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
    function QRcode($kode){
            QRcode::png(
            $kode,
            $outfile=false,
            $level=QR_ECLEVEL_H,
            $size=15,
            $margin=2
        );
    }
    
}
?>