<?php 

Class Barang extends CI_Controller{

	public function index()
	{
        $this->template->load('layout','barang/lihat_data');
	}
}