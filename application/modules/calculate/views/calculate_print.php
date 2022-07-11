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
								<td style="width:80px;"> <?php  echo $trans->usia; ?> </td>
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
								<td style="width:80px;"> <?php  echo $trans->tinggi; ?> </td>
							</tr>

                            <tr>
								<td style="font-weight:bold; width:80px;"> Berat Badan</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->berat_badan; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Lemak Tubuh</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->lemak_tubuh; ?> </td>
							</tr> 

                            <tr>
								<td style="font-weight:bold; width:80px;"> Kadar Air</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->kadar_air; ?> </td>
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
								<td style="width:80px;"> <?php  echo $trans->masa_tulang; ?> </td>
							</tr>

                            <tr>
								<td style="font-weight:bold; width:80px;"> Lemak Perut</td>
								<td style="font-weight:bold; width:20px;"> : </td>
								<td style="width:80px;"> <?php  echo $trans->lemak_perut; ?> </td>
                                <td style="width:100px;"> </td>
                                 
							</tr>
 
                         
						</table>
   
                        <h1> Perhitungan Aktual </h1>
                        <table width="100%" cellpadding="0" cellspacing="3" > 

                            <?php 
                            if($trans->id_bmi == 99){
                                $bmival = $trans->bmi_value;
                                $bmireason = $trans->bmi_reason;
                            }else{
                                $bmival =  $trans->minbmi.' - '.$trans->maxbmi;
                                $bmireason = $trans->reasonbmi;
                            }

                            if($trans->id_fat == 99){
                                $fatval = $trans->fat_value;
                                $fatreason = $trans->fat_reason;
                            }else{
                                $fatval =  $trans->minfat.' - '.$trans->maxfat;
                                $fatreason = $trans->reasonfat;
                            }

                            if($trans->id_muscle == 99){
                                $muscleval = $trans->muscle_value;
                                $musclereason = $trans->muscle_reason;
                            }else{
                                $muscleval =  $trans->minmuscle.' - '.$trans->maxmuscle;
                                $musclereason = $trans->reasonmuscle;
                            }
                           
                            if($trans->id_calori == 99){
                                $calorival = $trans->jenkel_calori_value.' - '.$trans->calori_value;
                                $calorireason = $trans->calori_reason;
                            }else{
                                $calorival =  $trans->jkcalori.' ( '.$trans->mincalori.' - '.$trans->maxcalori.')';
                                $calorireason = $trans->reasoncalori;
                            } 

                            if($trans->id_water == 99){
                                $waterval = $trans->jenkel_water_value.' - '.$trans->water_value;
                                $waterreason = $trans->water_reason;
                            }else{
                                $waterval =  $trans->jkwater.' ( '.$trans->minwater.' - '.$trans->maxwater.')';
                                $waterreason = $trans->reasonwater;
                            } 
                            
                            if($trans->id_vfr == 99){
                                $vfrval = $trans->vfr_value;
                                $vfrreason = $trans->vfr_reason;
                            }else{
                                $vfrval =  $trans->minvfr.' - '.$trans->maxvfr;
                                $vfrreason = $trans->reasonvfr;
                            }

                            if($trans->id_bone == 99){
                                $boneval = $trans->bone_reason; 
                            }else{
                                $boneval =  $trans->optionbone; 
                            }
                           
                            ?>

                            <tr>
                                <td style="font-weight:bold; width:80px;"> BMI </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $bmival; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> BMI Result</td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $bmireason; ?> </td>
                            </tr>
 
                            <tr>
                                <td style="font-weight:bold; width:80px;"> Fat </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $fatval; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Fat Result</td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $fatreason; ?> </td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold; width:80px;"> Muscle </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $muscleval; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Muscle Result</td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $musclereason; ?> </td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold; width:80px;"> Calori </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $calorival; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Calori Result</td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $calorireason; ?> </td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold; width:80px;"> VFR </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $vfrval; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> VFR Result</td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $vfrreason; ?> </td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold; width:80px;"> Water </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $vfrval; ?> </td>
                                <td style="width:100px;"> </td>
                                <td style="font-weight:bold; width:80px;"> Water Result</td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $vfrreason; ?> </td>
                            </tr>

                            <tr>
                                <td style="font-weight:bold; width:80px;"> Bone </td>
                                <td style="font-weight:bold; width:20px;"> : </td>
                                <td style="width:80px;"> <?php  echo $boneval; ?> </td>
                                <td style="width:100px;"> </td>
                                
                            </tr>
  
                        </table>