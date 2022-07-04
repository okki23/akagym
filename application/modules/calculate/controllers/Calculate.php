<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Calculate extends Parent_Controller {
 
  var $nama_tabel = 't_perhitungan';
  var $daftar_field = array('id','id_member','date_submit','id_bmi','bmi_value','bmi_reason','bone_value','id_bone','bone_reason','id_calori','jenkel_calori_value','calori_value','calori_reason','id_fat','fat_value','fat_reason','id_muscle','muscle_value','muscle_reason','id_vfr','vfr_value','vfr_reason','id_water','water_value','water_reason','jenkel_water_value');
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

	public function getdetailfat(){
		$sql = $this->db->get('fat_setting')->result();
		echo '<div class="form-group">';
		echo "<label> Fat Setting </label>
				<div class='form-line'>
					<select name='id_fat' id='id_fat' onChange='FuncOptFat(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->min." - ".$v->max." &nbsp; ($v->reason)</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectionfat' style='display:none;'>
					<div class='form-group' >
					<label for=''> Fat Value</label>
						<div class=form-line>
							<input type='text' name='fat_value' id='fat_value' class='form-control' placeholder='Fat Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> Fat Reason</label>
						<div class=form-line>
						<input type='text' name='fat_reason' id='fat_reason' class='form-control' placeholder='Fat Reason' />
						</div>
					</div>
				</div>";
	}

	public function getdetailmuscle(){
		$sql = $this->db->get('muscle_setting')->result();
		echo '<div class="form-group">';
		echo "<label> Muscle Setting </label>
				<div class='form-line'>
					<select name='id_muscle' id='id_muscle' onChange='FuncOptMuscle(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->min." - ".$v->max." &nbsp; ($v->reason)</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectionmuscle' style='display:none;'>
					<div class='form-group' >
					<label for=''> Muscle Value</label>
						<div class=form-line>
							<input type='text' name='muscle_value' id='muscle_value' class='form-control' placeholder='Muscle Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> Muscle Reason</label>
						<div class=form-line>
						<input type='text' name='muscle_reason' id='muscle_reason' class='form-control' placeholder='Muscle Reason' />
						</div>
					</div>
				</div>";
	}
	 
	public function getdetailbmi(){
		$sql = $this->db->get('bmi_setting')->result();
		echo '<div class="form-group">';
		echo "<label> BMI Setting </label>
				<div class='form-line'>
					<select name='id_bmi' id='id_bmi' onChange='FunOptBMI(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->min." - ".$v->max." &nbsp; ($v->reason)</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectionbmi' style='display:none;'>
					<div class='form-group' >
					<label for=''> BMI Value</label>
						<div class=form-line>
							<input type='text' name='bmi_value' id='bmi_value' class='form-control' placeholder='BMI Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> BMI Reason</label>
						<div class=form-line>
						<input type='text' name='bmi_reason' id='bmi_reason' class='form-control' placeholder='BMI Reason' />
						</div>
					</div>
				</div>";
	}

	public function getdetailvfr(){
		$sql = $this->db->get('bmi_setting')->result();
		echo '<div class="form-group">';
		echo "<label> VFR Setting </label>
				<div class='form-line'>
					<select name='id_vfr' id='id_vfr' onChange='FunOptVFR(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->min." - ".$v->max." &nbsp; ($v->reason)</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectionvfr' style='display:none;'>
					<div class='form-group' >
					<label for=''> VFR Value</label>
						<div class=form-line>
							<input type='text' name='vfr_value' id='vfr_value' class='form-control' placeholder='VFR Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> VFR Reason</label>
						<div class=form-line>
						<input type='text' name='vfr_reason' id='vfr_reason' class='form-control' placeholder='VFR Reason' />
						</div>
					</div>
				</div>";
	}

	public function getdetailbone(){
		$sql = $this->db->get('bone_setting')->result();
		echo '<div class="form-group">';
		echo "<label> Bone Setting </label>
				<div class='form-line'>
					<select name='id_bone' id='id_bone' onChange='FunOptBone(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->option."</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectionbone' style='display:none;'>
					<div class='form-group' >
					<label for=''> Bone Value</label>
						<div class=form-line>
							<input type='text' name='bone_value' id='bone_value' class='form-control' placeholder='Bone Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> Bone Reason</label>
						<div class=form-line>
						<input type='text' name='bone_reason' id='bone_reason' class='form-control' placeholder='Bone Reason' />
						</div>
					</div>
				</div>";
	}

	public function getdetailcalori(){
		$sql = $this->db->query('select *,CASE WHEN jk = 1 then "Pria" else "Wanita" end as jenkel from calori_setting')->result();
		echo '<div class="form-group">';
		echo "<label> Calori Setting </label>
				<div class='form-line'>
					<select name='id_calori' id='id_calori' onChange='FunOptCalori(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->jenkel." - ".$v->min." - ".$v->max." &nbsp; ($v->reason)</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectioncalori' style='display:none;'>
					<div class='form-group' >
					<label for=''> Jenis Kelamin</label>
						<div class=form-line>
							<select name='jenkel_calori_value' class='form-control'> 
								<option value=''> -- Pilih -- </option>
								<option value='Pria'> Pria </option>
								<option value='Wanita'> Wanita </option>
							</select>
							 
						</div>
					</div> 
					<div class='form-group' >
					<label for=''> Calori Value</label>
						<div class=form-line>
							<input type='text' name='calori_value' id='calori_value' class='form-control' placeholder='Calori Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> Calori Reason</label>
						<div class=form-line>
						<input type='text' name='calori_reason' id='calori_reason' class='form-control' placeholder='Calori Reason' />
						</div>
					</div>
				</div>";
	}

	public function getdetailwater(){
		$sql = $this->db->query('select *,CASE WHEN jk = 1 then "Pria" else "Wanita" end as jenkel from water_setting')->result();
		echo '<div class="form-group">';
		echo "<label> Water Setting </label>
				<div class='form-line'>
					<select name='id_water' id='id_water' onChange='FunOptWater(this);'class='form-control'>
						<option value=''> -- Pilih-- </option>";
						foreach($sql as $k=>$v){
							echo "<option value='".$v->id."'>".$v->jenkel." - ".$v->min." - ".$v->max." &nbsp; ($v->reason)</option>";
						}
		echo "<option value='99'> -- Lainnya-- </option>
				</select>
			</div>
		</div>  
				<div id='sectionwater' style='display:none;'>
					<div class='form-group' >
					<label for=''> Jenis Kelamin</label>
						<div class='form-line'>
							<select name='jenkel_water_value' class='form-control'> 
								<option value=''> -- Pilih -- </option>
								<option value='Pria'> Pria </option>
								<option value='Wanita'> Wanita </option>
							</select>
							 
						</div>
					</div> 
					<div class='form-group' >
					<label for=''> Water Value</label>
						<div class=form-line>
							<input type='text' name='water_value' id='water_value' class='form-control' placeholder='Water Value' />
						</div>
					</div> 
					<div class='form-group'>
					<label for=''> Water Reason</label>
						<div class=form-line>
						<input type='text' name='water_reason' id='water_reason' class='form-control' placeholder='Water Reason' />
						</div>
					</div>
				</div>";
	}
	 
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->query("select a.*,b.no_reg,b.*,case when b.jenkel = 1 then 'Pria' else 'Wanita' end as gents, c.max as maxbmi,c.min as minbmi,c.reason as reasonbmi,
		d.option as optionbone,
		e.min as minfat,e.max as maxfat,e.reason as reasonfat,
		f.min as minmuscle,f.max as maxmuscle,f.reason as reasonmuscle,
		g.min as minvfr,g.max as maxvfr,g.reason as reasonvfr,
		h.min as mincalori,h.max as maxcalori,h.reason as reasoncalori,case when h.jk = 1 then 'Pria' else 'Wanita' end as jkcalori,
		i.min as minwater,i.max as maxwater,i.reason as reasonwater,case when i.jk = 1 then 'Pria' else 'Wanita' end as jkwater 
		from t_perhitungan a
		left join m_member b on b.id = a.id_member
		left join bmi_setting c on c.id = a.id_bmi
		left join bone_setting d on d.id = a.id_bone
		left join fat_setting e on e.id = a.id_fat
		left join muscle_setting f on f.id = a.id_muscle
		left join vfr_setting g on g.id = a.id_vfr
		left join calori_setting h on h.id = a.id_calori
		left join water_setting i on i.id = a.id_water
		where a.id  = '".$id."' ")->row();
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
 
	public function simpan_data(){
    
    	
		$data_form = $this->m_calculate->array_from_post($this->daftar_field);
		$data_form['date_submit'] = date('Y-m-d H:i:s');
		$id = isset($data_form['id']) ? $data_form['id'] : NULL; 
	 
	
		$simpan_data = $this->m_calculate->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
	 
			if($simpan_data){
				$result = array("response"=>array('message'=>'success'));
			}else{
				$result = array("response"=>array('message'=>'failed'));
			}
			
			echo json_encode($result,TRUE);
	
		}
       


}
