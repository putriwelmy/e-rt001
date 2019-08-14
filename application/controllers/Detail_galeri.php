<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_galeri extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index($id)
	{
		
		$id_kategori=$id;
		$this->db->where('id_kategori',$id_kategori);
		$data['detail_galeri']=$this->db->get('detail_kategori')->result();
		// var_dump($data);exit();
		$this->load->view('user/v_detail_galeri',$data);
		
	}

	public function view_galeri($id){
		$this->db->where('id_detail', $id);
		$getRow = $this->db->get('detail_kategori')->row();
		$string = base_url('assets/uploads/galeri')."/".$getRow->gambar;
		echo "<img src='".$string."' class='card-img-top img-thumbnail' alt='...' width='100%'>";
	}
	
	
		
}