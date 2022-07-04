<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_water_setting extends Parent_Model { 
 

	var $nama_tabel = 'water_setting';
	var $daftar_field = array('id','jk','min','max','reason');
	var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_water_setting(){   
		   $getdata = $this->db->query('select *,CASE WHEN jk = 1 then "Pria" else "Wanita" end as jenkel from water_setting')->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
                      $sub_array[] = $row->jenkel; 
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
