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
								<td style="width:80px;"> <?php  echo $trans->tinggi; ?> cm </td>
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
								<td style="width:80px;"> <?php  echo $trans->kalorical; ?> </td>
							</tr> 

                            <tr>
								<td style="font-weight:bold; width:80px;"> Usia Sel</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->usiaselcal; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Masa Tulang</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->masa_tulang; ?> Kg </td>
							</tr>

                            <tr>
                                <?php 
                                    $valcallemak  = '';
                                    if($trans->lemakperutcal >= 1 && $trans->lemakperutcal <= 4){
                                        $valcallemak =  "Nilai : ".$trans->lemakperutcal. " (Sehat)"; 
                                    }else if($trans->lemakperutcal >= 5 && $trans->lemakperutcal <= 9){
                                        $valcallemak =  "Nilai : ".$trans->lemakperutcal. " (Hati-Hati)";  
                                    }else if($trans->lemakperutcal >= 10 && $trans->lemakperutcal <= 15){
                                        $valcallemak =  "Nilai : ".$trans->lemakperutcal. " (Bahaya)"; 
                                      
                                    }
                                ?>
								<td style="font-weight:bold; width:80px;"> Lemak Perut</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $valcallemak; ?> </td>
                                <td style="width:100px;"> </td>
                               
							</tr>

                            <!-- <tr>
								<td style="font-weight:bold; width:80px;"> Rating Fisik</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->rating_fisik; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> BMI</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->bmi; ?> </td> 
							</tr> -->
 
                         
						</table>
   
                        <h1> Perhitungan Aktual </h1>
                        <h3> Fat (Lemak Tubuh) </h3>

                        <?php 
                        if($trans->jenkel == 1){ //pria
                            if($trans->usia <= 30 && $trans->usia <= 30){ //under 30
                                echo "<h3> Hasil Penimbangan : ".$trans->fat." % </h3>";
                                if($trans->fat >= 14 && $trans->fat <=20){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->fat >= 20 && $trans->fat <=25){
                                    echo "<br> <b>  Keterangan : Normal </b> ";
                                }else if($trans->fat >= 25 && $trans->fat <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->fat >= 30 && $trans->fat <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->fat >= 35 && $trans->fat <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat >= 40  && $trans->fat <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat < 14 ){
                                    echo "<br> <b> Keterangan : Terlalu Minim </b> "; //reason
                                }else if($trans->fat < 45){
                                    echo "<br> <b> Keterangan : Obesitas Berbahaya </b> "; //reason
                                }
                                
                            }else{ //up 30 
                                echo "<h3> Hasil Penimbangan : ".$trans->fat." % </h3>";
                                if($trans->fat >= 17 && $trans->fat <=23){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->fat >= 24 && $trans->fat <=25){
                                    echo "<br> <b>  Keterangan : Normal </b> ";
                                }else if($trans->fat >= 25 && $trans->fat <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->fat >= 30 && $trans->fat <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->fat >= 35 && $trans->fat <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat >= 40  && $trans->fat <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat < 17 ){
                                    echo "<br> <b> Keterangan : Terlalu Minim </b> "; //reason
                                }else if($trans->fat < 45){
                                    echo "<br> <b> Keterangan : Obesitas Berbahaya </b> "; //reason
                                } 
                            }
                        }else{ //wanita
                            if($query->usia <= 30 && $query->usia <= 30)  
                            { //under 30 
                                echo "<h3> Hasil Penimbangan : ".$trans->fat." % </h3>";
                                if($trans->fat >= 17 && $trans->fat <= 24){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->fat >= 24 && $trans->fat <=25){
                                    echo "<br> <b>  Keterangan : Normal </b> ";
                                }else if($trans->fat >= 25 && $trans->fat <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->fat >= 30 && $trans->fat <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->fat >= 35 && $trans->fat <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat >= 40  && $trans->fat <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat < 17 ){
                                    echo "<br> <b> Keterangan : Terlalu Minim </b> "; //reason
                                }else if($trans->fat < 45){
                                    echo "<br> <b> Keterangan : Obesitas Berbahaya </b> "; //reason
                                }
                            }else{ //up 30
                                echo "<h3> Hasil Penimbangan : ".$trans->fat." % </h3>";
                                if($trans->fat >= 20 && $trans->fat <=27){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->fat >= 27 && $trans->fat <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->fat >= 30 && $trans->fat <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->fat >= 35 && $trans->fat <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->fat >= 40  && $trans->fat <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }
                            }
                        } 
                        echo "<br><hr><br>";
                        echo "<h3> Rating Fisik (VFR) </h3>";
                        echo "<h3> Hasil Penimbangan : ".$trans->vfr."   </h3>";
                        if($trans->vfr >= 1 && $trans->vfr <=5){
                            echo "<h3> Keterangan : VFR Good </h3> "; 
                        }else if($trans->vfr >= 5 && $trans->vfr <=9){
                            echo "<h3> Keterangan : VFR Normal </h3> "; 
                            echo "VFR Normal"; 
                        }else if($trans->vfr >= 9 && $trans->vfr <=15){
                            echo "<h3> Keterangan : Tidak Sehat</h3> ";  
                        }else if($trans->vfr >= 15 && $trans->vfr <=20){
                            echo "<h3> Keterangan : VFR Sangat Berbahaya </h3> "; //reason 
                        }
                        echo "<br><hr><br>";
                        echo "<h3> Masa Otot </h3>";
                        echo "<h3> Hasil Penimbangan : ".$trans->masaototcal." %   </h3>";
                        if($trans->jenkel == 1){ //pria  
                            if($trans->masaototcal >= 35 && $trans->masaototcal <=40){
                                echo "<h3> Keterangan : Muscle Normal </h3> ";  
                            }else if($trans->masaototcal >= 40 && $trans->masaototcal <=45){
                                echo "<h3> Keterangan : Muscle Good </h3> ";  
                                echo 'Muscle Good 40-45';
                            }else if($trans->masaototcal < 35){
                                echo "<h3> Keterangan : Bad Muscle Under 35 </h3> ";   
                            }else if($trans->masaototcal > 45){
                                echo "<h3> Keterangan : Bad Muscle Up to 45 </h3> ";    
                            }
                        }else{ //wanita
                            if($trans->masaototcal >= 30 && $trans->masaototcal <=35){
                                echo "<h3> Keterangan : Muscle Normal </h3> ";  
                            }else if($trans->masaototcal >= 35 && $trans->masaototcal <=40){
                                echo "<h3> Keterangan : Muscle Good </h3> ";  
                                echo 'Muscle Good 40-45';
                            }else if($trans->masaototcal < 30){
                                echo "<h3> Keterangan : Bad Muscle Under 30 </h3> ";   
                            }else if($trans->masaototcal > 45){
                                echo "<h3> Keterangan : Bad Muscle Up to 45 </h3> ";    
                            }
                     
                        }
                        echo "<br><hr><br>";
                        echo "<h3> BMI </h3>";
                        echo "<h3> Hasil Penimbangan : ".$trans->bmical." %   </h3>";
                        if($trans->jenkel == 1){ //pria  
                            if($trans->usia >= 18 && $trans->usia <=27){
            
                                if($trans->bmical >= 18 && $trans->bmical <=22){
                                    echo "<h3> Keterangan : BMI Normal</h3> ";    
                                }else{
                                    echo "<h3> Keterangan : BMI Tidak Normal pada Usia ini</h3> ";    
                                }
                             
                            }else if($trans->usia >= 28 && $trans->usia <=40){
                                if($trans->bmical >= 23 && $trans->bmical <=27){ 
                                    echo "<h3> Keterangan : BMI Normal</h3> ";    
                                }else if($trans->bmical > 27){
                                    echo "<h3> Keterangan : Obesitas</h3> ";     
                                }
                            }else{
                                echo 'Out Of Range';//reason
                            }
                    }else{ 
                        if($trans->usia >= 18 && $trans->usia <=27){
            
                            if($trans->bmical >= 19 && $trans->bmical <=23){ 
                                echo "<h3> Keterangan : BMI Normal</h3> ";    
                            }else{
                                echo "<h3> Keterangan : BMI Tidak Normal pada Usia ini</h3> ";    
                            }
                         
                        }else if($trans->usia >= 28 && $trans->usia <=40){
                            if($trans->bmical >= 24 && $trans->bmical <=28){ 
                                echo "<h3> Keterangan : BMI Normal</h3> ";    
                            }else if($trans->bmical > 28){
                                echo "<h3> Keterangan : Obesitas</h3> ";   
                            }
                        }else{
                            echo 'Out Of Range';//reason
                        }
                     
                    }
            
                        ?>
                          