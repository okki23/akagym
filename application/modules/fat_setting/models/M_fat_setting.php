<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_fat_setting extends Parent_Model { 
 

	var $nama_tabel = 'fat_setting';
	var $daftar_field = array('id','min','max','reason');
	var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_fat_setting(){   
		   $getdata = $this->db->get($this->nama_tabel)->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
         
                      $sub_array[] = $row->min;   
                      $sub_array[] = $row->max;   
                      $sub_array[] = $row->reason;   

                      $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-sm waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="nav-icon fas fa-edit"></i> Ubah </a>  &nbsp;  ';  
               
                  $data[] = $sub_array;  
                  $no++;
           }  
          
		return $output = array("data"=>$data);
		    
    }

  
  
	 
 
}
