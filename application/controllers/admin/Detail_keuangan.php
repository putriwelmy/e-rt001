<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Super.php');

class Detail_keuangan extends Super
{
    
    function __construct()
    {
        parent::__construct();
        $this->language       = 'english'; /** Indonesian / english **/
        $this->tema           = "flexigrid"; /** datatables / flexigrid **/
        $this->tabel          = "detail_bulanan";
        $this->active_id_menu = "Detail keuangan";
        $this->nama_view      = "Detail keuangan";
        $this->status         = true; 
		$this->field_tambah   = array(); 
        $this->field_edit     = array(); 
        $this->field_tampil   = array(); 
        $this->folder_upload  = 'assets/uploads/files';
        $this->add            = true;
        $this->edit           = true;
        $this->delete         = true;
        $this->crud;
    }

    function index(){
            $data = [];
            /** Bagian GROCERY CRUD USER**/


            /** Relasi Antar Tabel 
            * @parameter (nama_field_ditabel_ini, tabel_relasi, field_dari_tabel_relasinya)
            **/
            //$this->crud->set_relation('id_kategori','kategori','nama_kategori');
            $this->crud->set_relation('id_bulan','uang_bulanan','nama_bulan');

            /** Upload **/
            // $this->crud->set_field_upload('nama_field_upload',$this->folder_upload);  
            //$this->crud->set_field_upload('gambar',$this->folder_upload);  
            
            /** Ubah Nama yang akan ditampilkan**/
            // $this->crud->display_as('nama','Nama Setelah di Edit')
            $this->crud->display_as('id_bulan','Nama Bulan'); 
			$this->crud->display_as('jenis_keuangan','Jenis Kegiatan'); 
            
            /** Akhir Bagian GROCERY CRUD Edit Oleh User**/
            $data = array_merge($data,$this->generateBreadcumbs());
            $data = array_merge($data,$this->generateData());
            $this->generate();
            $data['output'] = $this->crud->render();
            $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    private function generateBreadcumbs(){
        $data['breadcumbs'] = array(
                array(
                    'nama'=>'Dashboard',
                    'icon'=>'fa fa-dashboard',
                    'url'=>'admin/dashboard'
                ),
                array(
                    'nama'=>'Admin',
                    'icon'=>'fa fa-users',
                    'url'=>'admin/useradmin'
                ),
            );
        return $data;
    }
}