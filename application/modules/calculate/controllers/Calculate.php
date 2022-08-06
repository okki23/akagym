<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Calculate extends Parent_Controller {
 
  
	var $nama_tabel = 't_calculate';
  	var $daftar_field = array('id','id_member','date_submit','fat','vfr','masa_otot','masa_tulang','kadar_air','kalori','usia_sel','lemak_perut');
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
	
	public function rating_fisik_service(){
		$rating_fisik = $this->input->post('rating_fisik');
		
		if($rating_fisik >= 1 && $rating_fisik <=5){
			$arr_response = array('timbangan'=>$rating_fisik,'keterangan'=>'Good','icon'=>'success');
		}else if($rating_fisik >= 5 && $rating_fisik <=9){
			$arr_response = array('timbangan'=>$rating_fisik,'keterangan'=>'Normal','icon'=>'success');
		}else if($rating_fisik >= 9 && $rating_fisik <=15){
			$arr_response = array('timbangan'=>$rating_fisik,'keterangan'=>'Tidak Sehat','icon'=>'warning');
		}else if($rating_fisik >= 15 && $rating_fisik <=20){
			$arr_response = array('timbangan'=>$rating_fisik,'keterangan'=>'Sangat Berbahaya','icon'=>'error');
		}
		echo json_encode($arr_response);
	}

	public function masa_otot_service(){
		$masa_otot = $this->input->post('masa_otot');
		$jenkel = $this->input->post('jenkel');
		 
		if($jenkel == 1){ //pria  
			if($masa_otot >= 35 && $masa_otot <=40){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Normal','icon'=>'success','title'=>'Baik');
			}else if($masa_otot >= 40 && $masa_otot <=45){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Good','icon'=>'success','title'=>'Baik');
			}else if($masa_otot < 35){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Sangat Buruk','icon'=>'error','title'=>'Buruk'); 
			}else if($masa_otot > 45){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Sangat Buruk','icon'=>'error','title'=>'Buruk');   
			}
		}else{ //wanita
			if($masa_otot >= 30 && $masa_otot <=35){   
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Normal','icon'=>'success','title'=>'Baik');
			}else if($masa_otot >= 35 && $masa_otot <=40){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Good','icon'=>'success','title'=>'Baik');
			}else if($masa_otot < 30){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Sangat Buruk','icon'=>'error','title'=>'Buruk');  
			}else if($masa_otot > 45){
				$arr_response = array('timbangan'=>$masa_otot,'jenkel'=>$jenkel,'keterangan'=>'Sangat Buruk','icon'=>'error','title'=>'Buruk'); 
			}
	 
		}

		echo json_encode($arr_response);
	}

	public function kalori_service(){
		 
		$jenkel = $this->input->post('jenkel'); 
		$kalori_val = $this->input->post('kalori_val');
		 
		if($jenkel == 1){//pria
			// echo "pria";
			if($kalori_val >= 1500 && $kalori_val <=1800){   
				echo json_encode(array('timbangan'=>$kalori_val,'jenkel'=>$jenkel,'keterangan'=>'Fat Loss, Weight Loss','icon'=>'success','option'=>1,'title'=>'Cara Sehat & Langsing'));
			}else if($kalori_val >1800){
				echo json_encode(array('timbangan'=>$kalori_val,'jenkel'=>$jenkel,'keterangan'=>'Bulking','icon'=>'success','option'=>2,'title'=>'Cara Gemuk'));
			} 
		}else{//wanita
			// echo "wanita";
			if($kalori_val >= 1200 && $kalori_val <=1500){   
				echo json_encode(array('timbangan'=>$kalori_val,'jenkel'=>$jenkel,'keterangan'=>'Fat Loss, Weight Loss','icon'=>'success','option'=>1,'title'=>'Cara Sehat & Langsing'));
			}else if($kalori_val >1500){
				echo json_encode(array('timbangan'=>$kalori_val,'jenkel'=>$jenkel,'keterangan'=>'Bulking','icon'=>'success','option'=>2,'title'=>'Cara Gemuk'));
			} 
		}
		// echo "<br>".$kalori_val;
	}

	public function bmi_service(){
		$bmi = $this->input->post('bmi');
		$usia = $this->input->post('usia');
		$jenkel = $this->input->post('jenkel'); 

		if($jenkel == 1){ //pria  
			if($usia >= 18 && $usia <=27){

				if($bmi >= 18 && $bmi <=22){
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'BMI Normal','icon'=>'success','title'=>'Good'); 
				}else{
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'Obesitas','icon'=>'error','title'=>'Bahaya');  
				}
			 
			}else if($usia >= 28 && $usia <=40){
				if($bmi >= 23 && $bmi <=27){ 
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'BMI Normal','icon'=>'success','title'=>'Good');  
				}else if($bmi > 27){  
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'Obesitas','icon'=>'error','title'=>'Bahaya');      
				}
			}else{
				// echo 'Out Of Range';//reason
				$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'Out Of Range','icon'=>'error','title'=>'Bahaya');      
			}
		}else{ 
			if($usia >= 18 && $usia <=27){

				if($bmi >= 19 && $bmi <=23){  
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'BMI Normal','icon'=>'success','title'=>'Good');  
				}else{
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'Obesitas','icon'=>'error','title'=>'Bahaya');  
				}
		 
			}else if($usia >= 28 && $usia <=40){
				if($bmi >= 24 && $bmi <=28){  
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'BMI Normal','icon'=>'success','title'=>'Good');  
				}else if($bmi > 28){
					$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'Obesitas','icon'=>'error','title'=>'Bahaya');  
				}
			}else{
				$arr_response = array('timbangan'=>$bmi,'jenkel'=>$jenkel,'usia'=>$usia,'keterangan'=>'Out Of Range','icon'=>'error','title'=>'Bahaya');  
			}
	 
		}
		echo json_encode($arr_response);
	}

	public function lemak_tubuh_service(){
		$lemak_tubuh = $this->input->post('lemak_tubuh');
		$usia = $this->input->post('usia');
		$jenkel = $this->input->post('jenkel'); 

		if($jenkel == 1){ //pria
			if($usia <= 30 && $usia <= 30){ //under 30
			 
				if($lemak_tubuh >= 14 && $lemak_tubuh <=20){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Good','icon'=>'success','title'=>'Baik');
				}else if($lemak_tubuh >= 20 && $lemak_tubuh <=25){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Normal','icon'=>'success','title'=>'Baik');	 
				}else if($lemak_tubuh >= 25 && $lemak_tubuh <=30){ 
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Ringan','icon'=>'warning','title'=>'Hati-Hati');
				}else if($lemak_tubuh >= 30 && $lemak_tubuh <=35){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 2','icon'=>'error','title'=>'Bahaya');
				}else if($lemak_tubuh >= 35 && $lemak_tubuh <=40){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
					<table class="table table-bordered" style="text-align:left;">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
				}else if($lemak_tubuh >= 40  && $lemak_tubuh <=45){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
								<table class="table table-bordered">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
							}else if($lemak_tubuh < 14 ){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Minim ','icon'=>'info','title'=>'Dibawah Batas Baik');
							 
							}else if($lemak_tubuh < 45){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Berbahaya ','icon'=>'info','title'=>'Berbahaya');
								 
							}
			}else{ //up 30
				if($lemak_tubuh >= 17 && $lemak_tubuh <=23){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Good','icon'=>'success','title'=>'Baik');
				}else if($lemak_tubuh >= 24 && $lemak_tubuh <=25){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Normal','icon'=>'success','title'=>'Baik');	 
				}else if($lemak_tubuh >= 25 && $lemak_tubuh <=30){ 
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Ringan','icon'=>'warning','title'=>'Hati-Hati');
				}else if($lemak_tubuh >= 30 && $lemak_tubuh <=35){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 2','icon'=>'error','title'=>'Bahaya');
				}else if($lemak_tubuh >= 35 && $lemak_tubuh <=40){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
					<table class="table table-bordered" style="text-align:left;">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
				}else if($lemak_tubuh >= 40  && $lemak_tubuh <=45){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
								<table class="table table-bordered">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
							}else if($lemak_tubuh < 14 ){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Minim ','icon'=>'info','title'=>'Dibawah Batas Baik');
							 
							}else if($lemak_tubuh < 45){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Berbahaya ','icon'=>'info','title'=>'Berbahaya');
								 
							}
			}
		}else{//wanita
			if($usia <= 30 && $usia <= 30){ //under 30
			 
				if($lemak_tubuh >= 17 && $lemak_tubuh <=24){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Good','icon'=>'success','title'=>'Baik');
				}else if($lemak_tubuh >= 24 && $lemak_tubuh <=25){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Normal','icon'=>'success','title'=>'Baik');	 
				}else if($lemak_tubuh >= 25 && $lemak_tubuh <=30){ 
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Ringan','icon'=>'warning','title'=>'Hati-Hati');
				}else if($lemak_tubuh >= 30 && $lemak_tubuh <=35){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 2','icon'=>'error','title'=>'Bahaya');
				}else if($lemak_tubuh >= 35 && $lemak_tubuh <=40){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
					<table class="table table-bordered" style="text-align:left;">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
				}else if($lemak_tubuh >= 40  && $lemak_tubuh <=45){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
								<table class="table table-bordered">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
							}else if($lemak_tubuh < 17 ){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Minim ','icon'=>'info','title'=>'Dibawah Batas Baik');
							 
							}else if($lemak_tubuh < 45){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Berbahaya ','icon'=>'info','title'=>'Berbahaya');
								 
							}
			}else{ //up 30
				if($lemak_tubuh >= 20 && $lemak_tubuh <=27){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Good','icon'=>'success','title'=>'Baik');
				}else if($lemak_tubuh >= 27 && $lemak_tubuh <=30){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Normal','icon'=>'success','title'=>'Baik');	 
				}else if($lemak_tubuh >= 30 && $lemak_tubuh <=35){ 
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Ringan','icon'=>'warning','title'=>'Hati-Hati');
				}else if($lemak_tubuh >= 35 && $lemak_tubuh <=40){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 2','icon'=>'error','title'=>'Bahaya');
				}else if($lemak_tubuh >= 35 && $lemak_tubuh <=40){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
					<table class="table table-bordered" style="text-align:left;">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
				}else if($lemak_tubuh >= 40  && $lemak_tubuh <=45){
					$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Obesitas Tingkat 4  Obesitas ini Memiliki Resiko  : <br> 
								<table class="table table-bordered">
								<tr>
									<td> 1. Pemicu Jantung </td>
								</tr>
								<tr>
									<td> 2. Pemicu Stroke </td>
								</tr>
								<tr>
									<td> 3. Pemicu Darah Tinggi </td>
								</tr>
								<tr>
									<td> 4. Pemicu Kolesterol </td>
								</tr>
								<tr>
									<td> 5. Pemicu Diabetes </td>
								</tr>
							</table>','icon'=>'error','title'=>'Bahaya'); 
							}else if($lemak_tubuh < 14 ){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Minim ','icon'=>'info','title'=>'Dibawah Batas Baik');
							 
							}else if($lemak_tubuh < 45){
								$arr_response = array('timbangan'=>$lemak_tubuh,'usia'=>$usia,'jenkel'=>$jenkel,'keterangan'=>'Terlalu Berbahaya ','icon'=>'info','title'=>'Berbahaya');
								 
							}
			}
		}
			echo json_encode($arr_response);
	  
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

	 

  public function cetak_data(){
		$id = $this->uri->segment(3);
 
 
		$get = $this->db->query("select * , case when jenkel = 1 then 'Pria' else 'Wanita' end as gents 
		from m_member where id  = '".$id."' ")->row(); 
		$data['trans'] = $get;
   			$this->load->library("pdf");
			 
			$this->pdf->setPrintHeader(false); 
			$this->pdf->SetHeaderData("", "", 'Judul Header', "codedb.co");
			$this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			 // set auto page breaks
			$this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			 // add a page
			$this->pdf->AddPage("P", "A4");
			 // set font
			$this->pdf->SetFont("helvetica", "", 9);
			$html = $this->load->view('calculate/calculate_print', $data, true);

			$this->pdf->writeHTML($html, true, false, true, false, "");
			 ob_end_clean();
			 //$this->pdf->Output("Employee Information.pdf", "I");
			$this->pdf->Output(base_url().'/store_files/filename.pdf', 'I');
 }


}
