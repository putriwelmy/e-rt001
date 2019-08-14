<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_keuangan extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index($id)
	{
		
		$id_bulan=$id;
		$this->db->where('id_bulan',$id_bulan);
		$data['detail_keuangan']=$this->db->get('detail_bulanan')->result();
		//var_dump($data);exit();
		$this->db->where('id_bulan',$id_bulan);
		$data['data_bulan']=$this->db->get('uang_bulanan')->row();
		$this -> load -> view ('user/v_detail_keuangan',$data);
		
	}
	
	
		
}