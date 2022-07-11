<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_calculate extends Parent_Model { 
      var $nama_tabel = 't_perhitungan';
      var $daftar_field = array('id','id_member','date_submit','id_bmi','bmi_value','bmi_reason','bone_value','id_bone','bone_reason','id_calori','jenkel_calori_value','calori_value','calori_reason','id_fat','fat_value','fat_reason','id_muscle','muscle_value','muscle_reason','id_vfr','vfr_value','vfr_reason','id_water','water_value','water_reason','jenkel_water_value');
      var $primary_key = 'id';
	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  public function fetch_calculate(){   
		   $getdata = $this->db->query('select a.*,b.no_reg,b.nama from t_perhitungan a
               left join m_member b on b.id = a.id_member')->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();  
         
                $sub_array[] = $row->no_reg; 
                $sub_array[] = $row->nama;  
                $sub_array[] = $row->date_submit;
     
                      $sub_array[] = '<a href="javascript:void(0)" class="btn btn-warning btn-sm waves-effect" id="detail" onclick="Detail('.$row->id.');" > <i class="nav-icon fas fa-book"></i> Detail </a>  &nbsp;  
                      <a href="'.base_url('calculate/cetak_data/'.$row->id).'" target="_blank" class="btn btn-warning btn-sm waves-effect" id="print" onclick="Print('.$row->id.');" > <i class="nav-icon fas fa-print"></i> Print </a>  &nbsp;  
                      <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-sm waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="nav-icon fas fa-trash"></i> Hapus </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }

  
  
	 
 
}
