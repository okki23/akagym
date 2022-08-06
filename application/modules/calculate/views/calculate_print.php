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
                        <h3> Lemak Tubuh (Kg) </h3>

                        <?php 
                        if($trans->jenkel == 1){ //pria
                            if($trans->usia <= 30 && $trans->usia <= 30){ //under 30
                                echo "<h3> Hasil Penimbangan : ".$trans->lemak_tubuh." % </h3>";
                                if($trans->lemak_tubuh >= 14 && $trans->lemak_tubuh <=20){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 20 && $trans->lemak_tubuh <=25){
                                    echo "<br> <b>  Keterangan : Normal </b> ";
                                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh < 14 ){
                                    echo "<br> <b> Keterangan : Terlalu Minim </b> "; //reason
                                }else if($trans->lemak_tubuh < 45){
                                    echo "<br> <b> Keterangan : Obesitas Berbahaya </b> "; //reason
                                }
                                
                            }else{ //up 30 
                                echo "<h3> Hasil Penimbangan : ".$trans->lemak_tubuh." % </h3>";
                                if($trans->lemak_tubuh >= 17 && $trans->lemak_tubuh <=23){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 24 && $trans->lemak_tubuh <=25){
                                    echo "<br> <b>  Keterangan : Normal </b> ";
                                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh < 17 ){
                                    echo "<br> <b> Keterangan : Terlalu Minim </b> "; //reason
                                }else if($trans->lemak_tubuh < 45){
                                    echo "<br> <b> Keterangan : Obesitas Berbahaya </b> "; //reason
                                } 
                            }
                        }else{ //wanita
                            if($query->usia <= 30 && $query->usia <= 30)  
                            { //under 30 
                                echo "<h3> Hasil Penimbangan : ".$trans->lemak_tubuh." % </h3>";
                                if($trans->lemak_tubuh >= 17 && $trans->lemak_tubuh <= 24){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 24 && $trans->lemak_tubuh <=25){
                                    echo "<br> <b>  Keterangan : Normal </b> ";
                                }else if($trans->lemak_tubuh >= 25 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 4 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh < 17 ){
                                    echo "<br> <b> Keterangan : Terlalu Minim </b> "; //reason
                                }else if($trans->lemak_tubuh < 45){
                                    echo "<br> <b> Keterangan : Obesitas Berbahaya </b> "; //reason
                                }
                            }else{ //up 30
                                echo "<h3> Hasil Penimbangan : ".$trans->lemak_tubuh." % </h3>";
                                if($trans->lemak_tubuh >= 20 && $trans->lemak_tubuh <=27){
                                    echo "<br> <b> Keterangan :Good </b> ";
                                }else if($trans->lemak_tubuh >= 27 && $trans->lemak_tubuh <=30){
                                    echo "<br> <b> Keterangan : Obesitas Ringan </b> ";
                                }else if($trans->lemak_tubuh >= 30 && $trans->lemak_tubuh <=35){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 2 </h3>";
                                }else if($trans->lemak_tubuh >= 35 && $trans->lemak_tubuh <=40){
                                    echo "<h3 style='font-color:red;'> Keterangan : Obesitas Tingkat 3 <br> <br> Obesitas ini Memiliki Resiko  : </h3>
                                    <h4>
                                    1. Pemicu Jantung <br>
                                    2. Pemicu Stroke <br>
                                    3. Pemicu Darah Tinggi <br>
                                    4. Pemicu Kolesterol </h4>";
                                }else if($trans->lemak_tubuh >= 40  && $trans->lemak_tubuh <=45){
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
                        echo "<h3> Hasil Penimbangan : ".$trans->rating_fisik."   </h3>";
                        if($trans->rating_fisik >= 1 && $trans->rating_fisik <=5){
                            echo "<h3> Keterangan : VFR Good </h3> "; 
                        }else if($trans->rating_fisik >= 5 && $trans->rating_fisik <=9){
                            echo "<h3> Keterangan : VFR Normal </h3> "; 
                            echo "VFR Normal"; 
                        }else if($trans->rating_fisik >= 9 && $trans->rating_fisik <=15){
                            echo "<h3> Keterangan : Tidak Sehat</h3> ";  
                        }else if($trans->rating_fisik >= 15 && $trans->rating_fisik <=20){
                            echo "<h3> Keterangan : VFR Sangat Berbahaya </h3> "; //reason 
                        }
                        echo "<br><hr><br>";
                        echo "<h3> Masa Otot </h3>";
                        echo "<h3> Hasil Penimbangan : ".$trans->masa_otot." %   </h3>";
                        if($trans->jenkel == 1){ //pria  
                            if($trans->masa_otot >= 35 && $trans->masa_otot <=40){
                                echo "<h3> Keterangan : Muscle Normal </h3> ";  
                            }else if($trans->masa_otot >= 40 && $trans->masa_otot <=45){
                                echo "<h3> Keterangan : Muscle Good </h3> ";  
                                echo 'Muscle Good 40-45';
                            }else if($trans->masa_otot < 35){
                                echo "<h3> Keterangan : Bad Muscle Under 35 </h3> ";   
                            }else if($trans->masa_otot > 45){
                                echo "<h3> Keterangan : Bad Muscle Up to 45 </h3> ";    
                            }
                        }else{ //wanita
                            if($trans->masa_otot >= 30 && $trans->masa_otot <=35){
                                echo "<h3> Keterangan : Muscle Normal </h3> ";  
                            }else if($trans->masa_otot >= 35 && $trans->masa_otot <=40){
                                echo "<h3> Keterangan : Muscle Good </h3> ";  
                                echo 'Muscle Good 40-45';
                            }else if($trans->masa_otot < 30){
                                echo "<h3> Keterangan : Bad Muscle Under 30 </h3> ";   
                            }else if($trans->masa_otot > 45){
                                echo "<h3> Keterangan : Bad Muscle Up to 45 </h3> ";    
                            }
                     
                        }
                        echo "<br><hr><br>";
                        echo "<h3> BMI </h3>";
                        echo "<h3> Hasil Penimbangan : ".$trans->bmi." %   </h3>";
                        if($trans->jenkel == 1){ //pria  
                            if($trans->usia >= 18 && $trans->usia <=27){
            
                                if($trans->bmi >= 18 && $trans->bmi <=22){
                                    echo "<h3> Keterangan : BMI Normal</h3> ";    
                                }else{
                                    echo "<h3> Keterangan : BMI Tidak Normal pada Usia ini</h3> ";    
                                }
                             
                            }else if($trans->usia >= 28 && $trans->usia <=40){
                                if($trans->bmi >= 23 && $trans->bmi <=27){ 
                                    echo "<h3> Keterangan : BMI Normal</h3> ";    
                                }else if($trans->bmi > 27){
                                    echo "<h3> Keterangan : Obesitas</h3> ";     
                                }
                            }else{
                                echo 'Out Of Range';//reason
                            }
                    }else{ 
                        if($trans->usia >= 18 && $trans->usia <=27){
            
                            if($trans->bmi >= 19 && $trans->bmi <=23){ 
                                echo "<h3> Keterangan : BMI Normal</h3> ";    
                            }else{
                                echo "<h3> Keterangan : BMI Tidak Normal pada Usia ini</h3> ";    
                            }
                         
                        }else if($trans->usia >= 28 && $trans->usia <=40){
                            if($trans->bmi >= 24 && $trans->bmi <=28){ 
                                echo "<h3> Keterangan : BMI Normal</h3> ";    
                            }else if($trans->bmi > 28){
                                echo "<h3> Keterangan : Obesitas</h3> ";   
                            }
                        }else{
                            echo 'Out Of Range';//reason
                        }
                     
                    }
            
                        ?>
                          