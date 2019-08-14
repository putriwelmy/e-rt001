<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Super.php');

class Data_warga extends Super
{
    
    function __construct()
    {
        parent::__construct();
        $this->language       = 'english'; /** Indonesian / english **/
        $this->tema           = "flexigrid"; /** datatables / flexigrid **/
        $this->tabel          = "anggota_keluarga";
        $this->active_id_menu = "Data warga";
        $this->nama_view      = "Data warga";
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
            $this->crud->set_relation('id_kk','kartu_keluarga','no_kk');

            /** Upload **/
            // $this->crud->set_field_upload('nama_field_upload',$this->folder_upload);  
            //$this->crud->set_field_upload('gambar',$this->folder_upload);  
            
            /** Ubah Nama yang akan ditampilkan**/
            // $this->crud->display_as('nama','Nama Setelah di Edit')
                $this->crud->display_as('id_kk','No KK'); 
                $this->crud->display_as('nama_lengkap','Nama Lengkap'); 
                $this->crud->display_as('nik','NIK'); 
                $this->crud->display_as('jenis_kelamin','Jenis Kelamin'); 
                $this->crud->display_as('tempat_lahir','Tempat Lahir'); 
                $this->crud->display_as('status_perkawinan','Status Perkawinan'); 
                $this->crud->display_as('status_hub_keluarga','Status Hub Keluarga'); 
                $this->crud->display_as('nama_ayah','Nama Ayah'); 
                $this->crud->display_as('nama_ibu','Nama Ibu'); 
                $this->crud->display_as('kk_urutan','KK Urutan'); 



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