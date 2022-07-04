<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Calculate extends Parent_Controller {
 
  var $nama_tabel = 't_perhitungan';
  var $daftar_field = array('id','id_user','date_submit','id_bmi','bmi_value','bmi_reason','id_bone','bone_reason','id_calori','calori_value','calori_reason','id_fat','fat_value','fat_reason','id_muscle','muscle_value','muscle_reason','id_vfr','vfr_value','vfr_reaspn','id_water','water_value','water_reason');
  var $primary_key = 'id';
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_calculate'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	}

 
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['konten'] = 'calculate/calculate_view'; 
		$this->load->view('template_view',$data);		
   
	}
 
 
  	public function fetch_calculate(){  
       $getdata = $this->m_calculate->fetch_calculate();
       echo json_encode($getdata);   
 	}  
	 
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->query("select a.*,b.nama from m_calculate a
		left join m_karyawan b on b.id = a.id_pegawai WHERE a.id = '".$id."' ")->row();
		echo json_encode($get,TRUE);
	}
	
  	 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
     
  		$sqlhapus = $this->m_calculate->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
 
	public function simpan_data_calculate(){
		$data_form = $this->m_calculate->array_from_post(array('id','calculatename','password','id_pegawai','level'));
		$id = $data_form['id'];	 
	 
		//apabila calculate id kosong maka input data baru
		if($id == '' || empty($id)){ 
				 
				return $this->db->query("insert into m_calculate set calculatename = '".$data_form['calculatename']."', password = '".base64_encode($data_form['password'])."', id_pegawai = '".$data_form['id_pegawai']."', level = '".$data_form['level']."' ");
		  

		//apabila calculate id tersedia maka update data
		}else{

			if($data_form['password'] == '' || empty($data_form['password'])){
				 
				return $this->db->query("update m_calculate set calculatename = '".$data_form['calculatename']."',  id_pegawai = '".$data_form['id_pegawai']."', level = '".$data_form['level']."'  where id = '".$id."' ");
		 
			}else{
				 
				return $this->db->query("update m_calculate set calculatename = '".$data_form['calculatename']."',password = '".base64_encode($data_form['password'])."', id_pegawai = '".$data_form['id_pegawai']."', level = '".$data_form['level']."'  where id = '".$id."' ");
			}

		}

	 
		
	}
       


}
