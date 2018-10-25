<?php 

Class Kategori extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model(array('M_kategori'));
	}

	public function index()
	{
	  // $data['record'] = $this->M_kategori->lihat_data()->result();
	  $this->template->load('layout','kategori/lihat_data');	  
	}

	public function ambil_data(){
	  $result = $this->M_kategori->lihat_data()->result();		
	  echo json_encode($result);
	}

	public function get_data(){
	  $result = $this->M_kategori->lihat_data()->result();		
		$no = 1;
		foreach ($result as $key => $value) {
			// $name = $value['fname'] . ' ' . $value['lname'];
			//Aksi
			$aksi = '<a href="#" class="btn btn-danger btn-sm" onclick="deletekategori()"></span>
		        <span><strong>Delete</strong></span></a>
				<a href="#" class="btn btn-success btn-sm" onclick="deletekategori('.$value->id_kategori.')"></span>
		        <span><strong>Edit</strong></span></a>';
			// // button
			// $buttons = '
			// <div class="btn-group">
			//   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			//     Action <span class="caret"></span>
			//   </button>
			//   <ul class="dropdown-menu">
			//     <li><a type="button" onclick="editMember('.$value['id'].')" data-toggle="modal" data-target="#editMemberModal">Edit</a></li>
			//     <li><a type="button" onclick="removeMember('.$value['id'].')" data-toggle="modal" data-target="#removeMemberModal">Remove</a></li>			    
			//   </ul>
			// </div>
			// ';

			$result['data'][$key] = array(
				// $name,
				$no.'.',
				$value->id_kategori,
				$value->nama_kategori,
				$aksi
				// $buttons
			);
    		$no++;	
		} // /foreach

		echo json_encode($result);
	}

	public function post(){
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		if ($id_kategori == '') {
			$result['pesan'] = 'ID kategori tidak boleh kosong';
		}elseif ($nama_kategori == '') {
			$result['pesan'] = 'Nama kategori tidak boleh kosong';
		}else{
			$result['pesan'] = '';
			$data = array('id_kategori' => $id_kategori, 'nama_kategori' => $nama_kategori);
			$this->M_kategori->simpan($data);
		}
		echo json_encode($result);

	}
}