<?php 

Class Barang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model(array('M_barang'));
	}

	public function index()
	{
		$result =  $data['record'] = $this->M_barang->lihat_data()->result();
		// echo json_encode($result);
        $this->template->load('layout','barang/lihat_data',$data);
	}
}