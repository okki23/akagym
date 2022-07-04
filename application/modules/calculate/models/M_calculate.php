<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_calculate extends Parent_Model { 
      var $nama_tabel = 't_perhitungan';
      var $daftar_field = array('id','id_user','date_submit','id_bmi','bmi_value','bmi_reason','id_bone','bone_reason','id_calori','calori_value','calori_reason','id_fat','fat_value','fat_reason','id_muscle','muscle_value','muscle_reason','id_vfr','vfr_value','vfr_reaspn','id_water','water_value','water_reason');
      var $primary_key = 'id';
      
	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_calculate(){   
		   $getdata = $this->db->query('select * from t_perhitungan')->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
         
                $sub_array[] = $row->calculatename; 
                $sub_array[] = $row->nama;  
     
                      $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-sm waves-effect" id="detail" onclick="Detail('.$row->id.');" > <i class="nav-icon fas fa-monitor"></i> Detail </a>  &nbsp;  
                      <a href="javascript:void(0)" class="btn btn-warning btn-sm waves-effect" id="print" onclick="Print('.$row->id.');" > <i class="nav-icon fas fa-print"></i> Print </a>  &nbsp;  
                      <a href="javascript:void(0)" class="btn btn-warning btn-sm waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="nav-icon fas fa-edit"></i> Ubah </a>  &nbsp; 
                      <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-sm waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="nav-icon fas fa-trash"></i> Hapus </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }

  
  
	 
 
}
