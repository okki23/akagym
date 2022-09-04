<!-- <h1 align="center"> Tanda Terima Booking Fee </h1> -->
 <div align="center">
     <table>
         <tr>
            <td>  
                <h1> AKAGYM Fitness Center</h1> <br>
                Jl. Raya Pekayon No. 90 Jalan Nasional, Jl. Raya Jatiasih Jl. Taman Peninsula No.1, RT.001/RW.002, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17424
            </td>
            <td>
                <img src="<?php echo base_url('assets/backend/dist/img/akalogo.png'); ?>" style="margin-top: 60px; width: 200px; height: 100px;">
            </td>
         </tr>
     </table>
    
    </div> 
<hr>
<h2 align="center"> Analisa Kesehatan </h2>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Tanggal Daftar </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->tgl_daftar; ?> </td>
    </tr>
    <tr>
        <td style="font-weight:bold; width:20%;"> Nama </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->nama; ?> </td>
    </tr>  
    <tr>
        <td style="font-weight:bold; width:20%;"> Usia </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->usia; ?> Tahun </td>
    </tr>
    <tr>
        <td style="font-weight:bold; width:20%;"> Jenis Kelamin </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->gents; ?> </td>
    </tr>
    <tr>
        <td style="font-weight:bold; width:20%;"> Tinggi Badan </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->tinggi_badan; ?> cm </td>
    </tr>
    <tr>
        <td style="font-weight:bold; width:20%;"> Telepon </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->telp; ?> </td>
    </tr>
    <tr>
        <td style="font-weight:bold; width:20%;"> Alamat </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->alamat; ?> </td>
    </tr>
    <tr>
        <td style="font-weight:bold; width:20%;"> Usia Sel </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> 
        <?php 
            $resp_sel = '';
            if($trans->usia_sel == 1){
                $resp_sel = '< Muda';
            }else if($trans->usia_sel == 2){
                $resp_sel = '= Umur';
            }else{
                $resp_sel = '> Tua';
            }
        ?>
        <?php  echo $resp_sel; ?> </td>
    </tr>
</table>

<br>
<hr> 
<br>
<h2 align="center"> Perhitungan Timbangan </h2>

<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Berat Badan </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <td style="width:75%;"> <?php  echo $trans->berat_badan; ?> Kg </td>
    </tr> 
</table>
<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Lemak Tubuh </td>
        <td style="font-weight:bold; width:5%;"> : </td>
        <?php 
        $resp_lemak_tubuh = '';
        if($trans->jenkel == 1){ //pria
            if($trans->usia <= 30 && $trans->usia <= 30){ //under 30
                // $resp_lemak_tubuh "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                if($trans->lemak_tubuh >= 14 && $trans->lemak_tubuh <=20){
                    $resp_lemak_tubuh = "<br> <b> Keterangan :Good </b> ";
                }else if($trans->lemak_tubuh >= 20 && $trans->lemak_tubuh <=25){
                    $resp_lemak_tubuh = "<br> <b>  Normal </b> ";
                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Ringan </b> ";
                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh < 14 ){
                    $resp_lemak_tubuh = "<br> <b> Terlalu Minim </b> "; //reason
                }else if($trans->lemak_tubuh < 45){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Berbahaya </b> "; //reason
                }
                
            }else{ //up 30 
                // echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                if($trans->lemak_tubuh >= 17 && $trans->lemak_tubuh <=23){
                    $resp_lemak_tubuh = "<br> <b> Keterangan :Good </b> ";
                }else if($trans->lemak_tubuh >= 24 && $trans->lemak_tubuh <=25){
                    $resp_lemak_tubuh = "<br> <b>  Normal </b> ";
                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Ringan </b> ";
                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                    $resp_lemak_tubuh =  "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh < 17 ){
                    $resp_lemak_tubuh = "<br> <b> Terlalu Minim </b> "; //reason
                }else if($trans->lemak_tubuh < 45){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Berbahaya </b> "; //reason
                } 
            }
        }else{ //wanita
            if($query->usia <= 30 && $query->usia <= 30)  
            { //under 30 
                // echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                if($trans->lemak_tubuh >= 17 && $trans->lemak_tubuh <= 24){
                    $resp_lemak_tubuh = "<br> <b> Keterangan :Good </b> ";
                }else if($trans->lemak_tubuh >= 24 && $trans->lemak_tubuh <=25){
                    $resp_lemak_tubuh = "<br> <b>  Normal </b> ";
                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Ringan </b> ";
                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh < 17 ){
                    $resp_lemak_tubuh = "<br> <b> Terlalu Minim </b> "; //reason
                }else if($trans->lemak_tubuh < 45){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Berbahaya </b> "; //reason
                }
            }else{ //up 30
                // echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                if($trans->lemak_tubuh >= 20 && $trans->lemak_tubuh <=27){
                    $resp_lemak_tubuh = "<br> <b> Keterangan :Good </b> ";
                }else if($trans->lemak_tubuh >= 27 && $trans->lemak_tubuh <=30){
                    $resp_lemak_tubuh = "<br> <b> Obesitas Ringan </b> ";
                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                    $resp_lemak_tubuh = "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                    <h4>
                    1. Pemicu Jantung <br>
                    2. Pemicu Stroke <br>
                    3. Pemicu Darah Tinggi <br>
                    4. Pemicu Kolesterol </h4>";
                }
            }
        } 
        ?>
        <td style="width:75%;"> <?php  echo $trans->lemak_tubuh; ?> %  </td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; font-size:12px; width:90%;" colspan="3"> <br> Informasi Hasil Pengukuran : <?php echo $resp_lemak_tubuh; ?></td> 
    </tr>
    <tr>
        <td style="font-weight:bold; width:90%;" colspan="3"> Keterangan  </td> 
    </tr>
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Jenis Kelamin  </td> 
        <td style="font-weight:bold; width:30%;"> Usia Dibawah 30 Tahun  </td> 
        <td style="font-weight:bold; width:30%;"> Usia Diatas 30 Tahun   </td> 
    </tr> 
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Pria  </td> 
        <td style="font-weight:bold; width:30%;"> 14% - 20%   </td> 
        <td style="font-weight:bold; width:30%;"> 17% - 23%  </td> 
    </tr> 
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Wanita  </td> 
        <td style="font-weight:bold; width:30%;"> 17% - 24%   </td> 
        <td style="font-weight:bold; width:30%;"> 20% - 27%  </td> 
    </tr> 
</table>

<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Kadar Air </td>
        <td style="font-weight:bold; width:5%;"> : </td> 
        <td style="width:75%;"> <?php  echo $trans->kadar_air; ?></td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0">
   
    <tr>
        <td style="font-weight:bold; width:90%;" colspan="2"> Keterangan  </td> 
    </tr>
    <tr style="text-align: center;">
         
        <td style="font-weight:bold; width:45%;"> Wanita </td> 
        <td style="font-weight:bold; width:45%;">  50% - 55%   </td> 
    </tr> 
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:45%;"> Pria  </td> 
        <td style="font-weight:bold; width:45%;"> 60% - 65%   </td>  
    </tr> 
   
</table>
<br>
<br>


<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Rating Fisik (VFR)</td>
        <td style="font-weight:bold; width:5%;"> : </td> 

        <?php
            $resp_vfr = '';
            if($trans->rating_fisik >= 1 && $trans->rating_fisik <=5){
                $resp_vfr = "VFR Good  "; 
            }else if($trans->rating_fisik >= 5 && $trans->rating_fisik <=9){ 
                $resp_vfr = "VFR Normal"; 
            }else if($trans->rating_fisik >= 9 && $trans->rating_fisik <=15){
                $resp_vfr = "Tidak Sehat ";  
            }else if($trans->rating_fisik >= 15 && $trans->rating_fisik <=20){
                $resp_vfr = "VFR Sangat Berbahaya  "; //reason 
            } 
        ?>
        <td style="width:75%;"> <?php  echo $trans->rating_fisik; ?></td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0"> 
    <tr>
        <td style="font-weight:bold; font-size:12px; width:90%;" colspan="3"> <br> Informasi Hasil Pengukuran : <br> <?php echo $resp_vfr; ?></td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0">
   
    <tr>
        <td style="font-weight:bold; width:90%;" colspan="2"> Keterangan  </td> 
    </tr>
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:45%;"> 1 - 5 </td>  
        <td style="font-weight:bold; width:45%;"> Good </td>  
    </tr> 
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:45%;"> 1 - 9 </td>  
        <td style="font-weight:bold; width:45%;"> Normal </td>  
    </tr> 
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:45%;"> 9 - 15 </td>  
        <td style="font-weight:bold; width:45%;"> Tidak Sehat </td>  
    </tr> 
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:45%;"> 15 - 20 </td>  
        <td style="font-weight:bold; width:45%;"> Sangat Berbahaya </td>  
    </tr>     
   
</table>


<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Masa Otot </td>
        <td style="font-weight:bold; width:5%;"> : </td> 

        <?php
            $resp_otot = ''; 
            if($trans->jenkel == 1){ //pria  
                if($trans->masa_otot >= 35 && $trans->masa_otot <=40){
                    $resp_otot = "Muscle Normal  ";  
                }else if($trans->masa_otot >= 40 && $trans->masa_otot <=45){
                    // $resp_otot = "Muscle Good  ";  
                    $resp_otot = 'Muscle Good 40-45';
                }else if($trans->masa_otot < 35){
                    $resp_otot = "Bad Muscle Under 35  ";   
                }else if($trans->masa_otot > 45){
                    $resp_otot = "Bad Muscle Up to 45  ";    
                }
            }else{ //wanita
                if($trans->masa_otot >= 30 && $trans->masa_otot <=35){
                    $resp_otot = "Muscle Normal  ";  
                }else if($trans->masa_otot >= 35 && $trans->masa_otot <=40){
                    // echo "Muscle Good  ";  
                    $resp_otot = 'Muscle Good 40-45';
                }else if($trans->masa_otot < 30){
                    $resp_otot = "Bad Muscle Under 30  ";   
                }else if($trans->masa_otot > 45){
                    $resp_otot = "Bad Muscle Up to 45  ";    
                }

            }
        ?>
        <td style="width:75%;"> <?php  echo $trans->masa_otot; ?></td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0"> 
    <tr>
        <td style="font-weight:bold; font-size:12px; width:90%;" colspan="3"> <br> Informasi Hasil Pengukuran : <br> <?php echo $resp_otot; ?></td> 
    </tr> 
 
    <tr>
        <td style="font-weight:bold; width:90%;" colspan="3"> Keterangan  </td> 
    </tr>
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Jenis Kelamin  </td> 
        <td style="font-weight:bold; width:30%;"> Normal  </td> 
        <td style="font-weight:bold; width:30%;"> Good   </td> 
    </tr> 
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Pria  </td> 
        <td style="font-weight:bold; width:30%;"> 35% - 40%   </td> 
        <td style="font-weight:bold; width:30%;"> 40% - 45%  </td> 
    </tr> 
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Wanita  </td> 
        <td style="font-weight:bold; width:30%;"> 30% - 35%   </td> 
        <td style="font-weight:bold; width:30%;"> 40% - 45%  </td> 
    </tr> 
</table>

<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> BMI  </td>
        <td style="font-weight:bold; width:5%;"> : </td> 

        <?php
            $resp_bmi = ''; 
            if($trans->jenkel == 1){ //pria  
                if($trans->usia >= 18 && $trans->usia <=27){

                    if($trans->bmi >= 18 && $trans->bmi <=22){
                        $resp_bmi = "BMI Normal ";    
                    }else{
                        $resp_bmi =  "BMI Tidak Normal pada Usia ini ";    
                    }
                 
                }else if($trans->usia >= 28 && $trans->usia <=40){
                    if($trans->bmi >= 23 && $trans->bmi <=27){ 
                        $resp_bmi = "BMI Normal ";    
                    }else if($trans->bmi > 27){
                        $resp_bmi =  "Obesitas ";     
                    }
                }else{
                    $resp_bmi = 'Out Of Range';//reason
                }
            }else{ 
                if($trans->usia >= 18 && $trans->usia <=27){

                    if($trans->bmi >= 19 && $trans->bmi <=23){ 
                        $resp_bmi = "BMI Normal ";    
                    }else{
                        $resp_bmi = "BMI Tidak Normal pada Usia ini ";    
                    }
                
                }else if($trans->usia >= 28 && $trans->usia <=40){
                    if($trans->bmi >= 24 && $trans->bmi <=28){ 
                        $resp_bmi = "BMI Normal ";    
                    }else if($trans->bmi > 28){
                        $resp_bmi = "Obesitas ";   
                    }
                }else{
                    $resp_bmi = 'Out Of Range';//reason
                }
            
            }
        ?>
        <td style="width:75%;"> <?php  echo $trans->bmi; ?> %</td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0"> 
    <tr>
        <td style="font-weight:bold; font-size:12px; width:90%;" colspan="3"> <br> Informasi Hasil Pengukuran : <br> <?php echo $resp_bmi; ?></td> 
    </tr> 
  
</table>


<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Kalori  </td>
        <td style="font-weight:bold; width:5%;"> : </td> 

        <?php
            $resp_kalori = '';
           if($trans->jenkel == 1){ //pria  
            // echo "pria";
            
            if($trans->kalori >= 1500 && $trans->kalori <=1800){  
                $resp_kalori = "Fat Loss, Weight Loss";    
                 
            }else if($trans->kalori >1800){
                $resp_kalori = "Bulking";    
                
            } 
            }else{//wanita 
                if($trans->kalori >= 1200 && $trans->kalori <=1500){   
                    $resp_kalori = "Fat Loss, Weight Loss";     
                }else if($trans->kalori >1500){
                    $resp_kalori = "Bulking";  
                    
                } 
            }
        ?>
        <td style="width:75%;"> <?php  echo $trans->kalori; ?></td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0"> 
    <tr>
        <td style="font-weight:bold; font-size:12px; width:90%;" colspan="3"> <br> Informasi Hasil Pengukuran : <br> <?php echo $resp_kalori; ?></td> 
    </tr>  
</table>
  
<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Masa Tulang </td>
        <td style="font-weight:bold; width:5%;"> : </td>   
        <td style="width:75%;"> <?php  echo $trans->masa_tulang; ?> kg</td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0">  
    <tr>
        <td style="font-weight:bold; width:90%;" colspan="3"> Keterangan  </td> 
    </tr>
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:30%;"> Pria  </td> 
        <td style="font-weight:bold; width:20%;"> < 65kg | 2.65kg   </td> 
        <td style="font-weight:bold; width:20%;"> 65 - 95kg | 3.29kg  </td> 
        <td style="font-weight:bold; width:20%;"> < 95kg | 3.29kg  </td> 
    </tr> 
    <tr style="text-align: center;">
        <td style="font-weight:bold; width:30%;"> Wanita  </td> 
        <td style="font-weight:bold; width:20%;"> < 50kg | 1.95kg </td>
        <td style="font-weight:bold; width:20%;"> 50-70 kg | 2.40kg   </td>  
        <td style="font-weight:bold; width:20%;"> < 70 kg | 2.95kg   </td>   
    </tr> 
 
</table>

  
<br>
<br>
<table border="0"  width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="font-weight:bold; width:20%;"> Lemak Perut </td>
        <td style="font-weight:bold; width:5%;"> : </td>   
        <?php 
             $valcallemak  = '';
             if($trans->lemak_perut >= 1 && $trans->lemak_perut <= 4){
                 $valcallemak =  "Nilai : ".$trans->lemak_perut. " (Sehat)"; 
             }else if($trans->lemak_perut >= 5 && $trans->lemak_perut <= 9){
                 $valcallemak =  "Nilai : ".$trans->lemak_perut. " (Hati-Hati)";  
             }else if($trans->lemak_perut >= 10 && $trans->lemak_perut <= 15){
                $valcallemak =  "Nilai : ".$trans->lemak_perut. " (Bahaya)"; 
            
                                    }
                                ?>
        <td style="width:75%;"> <?php  echo $trans->lemak_perut; ?> kg</td> 
    </tr> 
</table>

<table border="1"  width="100%" cellpadding="3" cellspacing="0">    
    <tr>
        <td style="font-weight:bold; font-size:12px; width:90%;" colspan="3"> <br> Informasi Hasil Pengukuran : <br> <?php echo $valcallemak; ?></td> 
    </tr> 
  
    <tr>
        <td style="font-weight:bold; width:90%;" colspan="3"> Keterangan  </td> 
    </tr>
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:30%;"> Sehat   </td>  
        <td style="font-weight:bold; width:30%;"> 1-4   </td>  
    </tr> 
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:30%;"> Hati-Hati   </td>  
        <td style="font-weight:bold; width:30%;"> 5-9   </td>  
    </tr> 
    <tr style="text-align: center;"> 
        <td style="font-weight:bold; width:30%;"> Bahaya   </td>  
        <td style="font-weight:bold; width:30%;"> 10-15   </td>  
    </tr> 
    
 
</table>

 <h1> Data Member </h1> 
 
                        <table width="100%" cellpadding="0" cellspacing="3" > 
                            <tr>
								<td style="font-weight:bold; width:80px;"> No Registrasi</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->no_reg; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Nama</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->nama; ?> </td>
							</tr>

                            <tr>
								<td style="font-weight:bold; width:80px;"> Telp </td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->telp; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Usia</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->usia; ?> Tahun </td>
							</tr>

                            <tr>
								<td style="font-weight:bold; width:80px;"> Alamat</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->alamat; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Tanggal Daftar</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->tgl_daftar; ?> </td>
							</tr>

                            <tr>
								<td style="font-weight:bold; width:80px;"> Jenis Kelamin</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->gents; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Tinggi Badan</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->tinggi_badan; ?> cm </td>
							</tr>

                            <tr>
								<td style="font-weight:bold; width:80px;"> Berat Badan</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->berat_badan; ?> Kg </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Lemak Tubuh</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->lemak_tubuh; ?> </td>
							</tr> 

                            <tr>
								<td style="font-weight:bold; width:80px;"> Kadar Air</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->kadar_air; ?> % </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Kalori</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->kalori; ?> </td>
							</tr> 

                            <tr>
								<td style="font-weight:bold; width:80px;"> Usia Sel</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->usia_sel; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Masa Tulang</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->masa_tulang; ?> Kg </td>
							</tr>

                            <tr>
                                <?php 
                                    $valcallemak  = '';
                                    if($trans->lemak_perut >= 1 && $trans->lemak_perut <= 4){
                                        $valcallemak =  "Nilai : ".$trans->lemak_perut. " (Sehat)"; 
                                    }else if($trans->lemak_perut >= 5 && $trans->lemak_perut <= 9){
                                        $valcallemak =  "Nilai : ".$trans->lemak_perut. " (Hati-Hati)";  
                                    }else if($trans->lemak_perut >= 10 && $trans->lemak_perut <= 15){
                                        $valcallemak =  "Nilai : ".$trans->lemak_perut. " (Bahaya)"; 
                                      
                                    }
                                ?>
								<td style="font-weight:bold; width:80px;"> Lemak Perut</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $valcallemak; ?> </td>
                                <td style="width:100px;"> </td>
                               
							</tr>

                       
 
                         
						</table>
   
                        <h1> Perhitungan Aktual </h1>
                        Lemak Tubuh (Kg) 

                        <?php 
                        if($trans->jenkel == 1){ //pria
                            if($trans->usia <= 30 && $trans->usia <= 30){ //under 30
                                echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                                if($trans->lemak_tubuh >= 14 && $trans->lemak_tubuh <=20){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 20 && $trans->lemak_tubuh <=25){
                                    echo "<br> <b>  Normal </b> ";
                                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh < 14 ){
                                    echo "<br> <b> Terlalu Minim </b> "; //reason
                                }else if($trans->lemak_tubuh < 45){
                                    echo "<br> <b> Obesitas Berbahaya </b> "; //reason
                                }
                                
                            }else{ //up 30 
                                echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                                if($trans->lemak_tubuh >= 17 && $trans->lemak_tubuh <=23){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 24 && $trans->lemak_tubuh <=25){
                                    echo "<br> <b>  Normal </b> ";
                                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh < 17 ){
                                    echo "<br> <b> Terlalu Minim </b> "; //reason
                                }else if($trans->lemak_tubuh < 45){
                                    echo "<br> <b> Obesitas Berbahaya </b> "; //reason
                                } 
                            }
                        }else{ //wanita
                            if($query->usia <= 30 && $query->usia <= 30)  
                            { //under 30 
                                echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                                if($trans->lemak_tubuh >= 17 && $trans->lemak_tubuh <= 24){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 24 && $trans->lemak_tubuh <=25){
                                    echo "<br> <b>  Normal </b> ";
                                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh < 17 ){
                                    echo "<br> <b> Terlalu Minim </b> "; //reason
                                }else if($trans->lemak_tubuh < 45){
                                    echo "<br> <b> Obesitas Berbahaya </b> "; //reason
                                }
                            }else{ //up 30
                                echo "Hasil Penimbangan : ".$trans->lemak_tubuh." % ";
                                if($trans->lemak_tubuh >= 20 && $trans->lemak_tubuh <=27){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 27 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 2 ";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : 
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }
                            }
                        } 
                        echo "<br><hr><br>";
                        echo "Rating Fisik (VFR) ";
                        echo "Hasil Penimbangan : ".$trans->rating_fisik."   ";
                        if($trans->rating_fisik >= 1 && $trans->rating_fisik <=5){
                            echo "VFR Good  "; 
                        }else if($trans->rating_fisik >= 5 && $trans->rating_fisik <=9){
                            echo "VFR Normal  "; 
                            echo "VFR Normal"; 
                        }else if($trans->rating_fisik >= 9 && $trans->rating_fisik <=15){
                            echo "Tidak Sehat ";  
                        }else if($trans->rating_fisik >= 15 && $trans->rating_fisik <=20){
                            echo "VFR Sangat Berbahaya  "; //reason 
                        }
                        echo "<br><hr><br>";
                        echo "Masa Otot ";
                        echo "Hasil Penimbangan : ".$trans->masa_otot." %   ";
                        if($trans->jenkel == 1){ //pria  
                            if($trans->masa_otot >= 35 && $trans->masa_otot <=40){
                                echo "Muscle Normal  ";  
                            }else if($trans->masa_otot >= 40 && $trans->masa_otot <=45){
                                echo "Muscle Good  ";  
                                echo 'Muscle Good 40-45';
                            }else if($trans->masa_otot < 35){
                                echo "Bad Muscle Under 35  ";   
                            }else if($trans->masa_otot > 45){
                                echo "Bad Muscle Up to 45  ";    
                            }
                        }else{ //wanita
                            if($trans->masa_otot >= 30 && $trans->masa_otot <=35){
                                echo "Muscle Normal  ";  
                            }else if($trans->masa_otot >= 35 && $trans->masa_otot <=40){
                                echo "Muscle Good  ";  
                                echo 'Muscle Good 40-45';
                            }else if($trans->masa_otot < 30){
                                echo "Bad Muscle Under 30  ";   
                            }else if($trans->masa_otot > 45){
                                echo "Bad Muscle Up to 45  ";    
                            }
                     
                        }
                        echo "<br><hr><br>";
                        echo "BMI ";
                        echo "Hasil Penimbangan : ".$trans->bmi." %   ";
                        if($trans->jenkel == 1){ //pria  
                            if($trans->usia >= 18 && $trans->usia <=27){
            
                                if($trans->bmi >= 18 && $trans->bmi <=22){
                                    echo "BMI Normal ";    
                                }else{
                                    echo "BMI Tidak Normal pada Usia ini ";    
                                }
                             
                            }else if($trans->usia >= 28 && $trans->usia <=40){
                                if($trans->bmi >= 23 && $trans->bmi <=27){ 
                                    echo "BMI Normal ";    
                                }else if($trans->bmi > 27){
                                    echo "Obesitas ";     
                                }
                            }else{
                                echo 'Out Of Range';//reason
                            }
                    }else{ 
                        if($trans->usia >= 18 && $trans->usia <=27){
            
                            if($trans->bmi >= 19 && $trans->bmi <=23){ 
                                echo "BMI Normal ";    
                            }else{
                                echo "BMI Tidak Normal pada Usia ini ";    
                            }
                         
                        }else if($trans->usia >= 28 && $trans->usia <=40){
                            if($trans->bmi >= 24 && $trans->bmi <=28){ 
                                echo "BMI Normal ";    
                            }else if($trans->bmi > 28){
                                echo "Obesitas ";   
                            }
                        }else{
                            echo 'Out Of Range';//reason
                        }
                     
                    }

                    echo "<br><hr><br>";
                    echo "Kalori ";
                    echo "Hasil Penimbangan : ".$trans->kalori."    ";
                    if($trans->jenkel == 1){ //pria  
                        // echo "pria";
                        
                        if($trans->kalori >= 1500 && $trans->kalori <=1800){  
                            echo "Fat Loss, Weight Loss  ";    
                            // echo json_encode(array('timbangan'=>$kalori,'jenkel'=>$jenkel,'keterangan'=>'Fat Loss, Weight Loss','icon'=>'success','option'=>1,'title'=>'Cara Sehat & Langsing'));
                        }else if($trans->kalori >1800){
                            echo "Bulking  ";    
                            // echo json_encode(array('timbangan'=>$kalori,'jenkel'=>$jenkel,'keterangan'=>'Bulking','icon'=>'success','option'=>2,'title'=>'Cara Gemuk'));
                        } 
                    }else{//wanita
                        // echo "wanita";
                        if($trans->kalori >= 1200 && $trans->kalori <=1500){   
                            echo "Fat Loss, Weight Loss  ";    
                            // echo json_encode(array('timbangan'=>$kalori,'jenkel'=>$jenkel,'keterangan'=>'Fat Loss, Weight Loss','icon'=>'success','option'=>1,'title'=>'Cara Sehat & Langsing'));
                        }else if($trans->kalori >1500){
                            echo "Bulking  ";  
                            // echo json_encode(array('timbangan'=>$kalori,'jenkel'=>$jenkel,'keterangan'=>'Bulking','icon'=>'success','option'=>2,'title'=>'Cara Gemuk'));
                        } 
                    }
                        ?>
                          