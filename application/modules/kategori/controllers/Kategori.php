<?php 

Class Kategori extends CI_Controller{

	public function index()
	{
	  $this->template->load('layout','kategori/lihat_data');	  
	}
}