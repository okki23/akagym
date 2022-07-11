<div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Perhitungan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="fas fa-book-medical"></i> Tambah Data </a>
            <br>
            &nbsp;
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr> 
                        <th style="width:20%;">No Register</th>  
                        <th style="width:20%;">Nama Member</th> 
                        <th style="width:20%;">Date Submit</th>  
                        <th style="width:20%;">Opsi</th> 
                      </tr>
                  </thead>  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
    <!-- form tambah dan ubah data -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>

                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">    
                                  <div class="row">
                                        <div class="col-sm-6">
                                            <input type="hidden" name="id" id="id"> 
                                            
                                            <div class="input-group">
                                                <input type="text" name="nama_member" id="nama_member" class="form-control" readonly="readonly" >
                                                <input type="hidden" name="id_member" id="id_member" readonly="readonly">
                                                <span class="input-group-append">
                                                    <button type="button"  onclick="CariMember();" class="btn btn-primary btn-flat">Pilih Member...</button>
                                                </span>
                                            </div>
                                            <br>
                                            &nbsp;
                                            <h4> Data Member </h4>
                                            <table class="table">
                                                <tr>
                                                    <td style="font-weight:bold;"> No Registrasi</td>
                                                    <td> : </td>
                                                    <td> <p id="noregdtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Nama</td>
                                                    <td> : </td>
                                                    <td> <p id="namadtl"> </p> </td> 
                                                </tr>
                                                
                                                <tr>
                                                    <td style="font-weight:bold;"> Telp</td>
                                                    <td> : </td>
                                                    <td> <p id="telpdtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Usia</td>
                                                    <td> : </td>
                                                    <td> <p id="usiadtl"> </p> </td> 
                                                </tr>
                                                
                                                <tr>
                                                    <td style="font-weight:bold;"> Alamat</td>
                                                    <td> : </td>
                                                    <td> <p id="alamatdtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Tanggal Daftar</td>
                                                    <td> : </td>
                                                    <td> <p id="tgldaftardtl"> </p> </td> 
                                                </tr> 

                                                <tr>
                                                    <td style="font-weight:bold;"> Jenis Kelamin</td>
                                                    <td> : </td>
                                                    <td> <p id="jenkeldtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Tinggi Badan</td>
                                                    <td> : </td>
                                                    <td> <p id="tinggibadandtl"> </p> </td> 
                                                </tr> 

                                                <tr>
                                                    <td style="font-weight:bold;"> Berat Badan</td>
                                                    <td> : </td>
                                                    <td> <p id="beratbadandtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Lemak Tubuh</td>
                                                    <td> : </td>
                                                    <td> <p id="lemaktubuhdtl"> </p> </td> 
                                                </tr> 

                                                <tr>
                                                    <td style="font-weight:bold;"> Kadar Air</td>
                                                    <td> : </td>
                                                    <td> <p id="kadarairdtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Kalori</td>
                                                    <td> : </td>
                                                    <td> <p id="kaloridtl"> </p> </td> 
                                                </tr>  

                                                <tr>
                                                    <td style="font-weight:bold;"> Usia Sel</td>
                                                    <td> : </td>
                                                    <td> <p id="usiaseldtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;"> Masa Tulang</td>
                                                    <td> : </td>
                                                    <td> <p id="masatulangdtl"> </p> </td> 
                                                </tr> 
                                            

                                                <tr>
                                                    <td style="font-weight:bold;"> Lemak Perut</td>
                                                    <td> : </td>
                                                    <td> <p id="lemakperutdtl"> </p> </td>
                                                    
                                                    <td style="font-weight:bold;">  </td>
                                                    <td>  </td>
                                                    <td> <p id="masatulangdtl">   </td> 
                                                </tr> 
                                            
                                                
                                            </table>

                                          
                                        </div> 

                                        <div class="col-sm-6">
                                            <h4> Pengukuran Aktual </h4>
                                            <hr>

                                            <div id="detailfat"></div>
                                            <hr>
                                            <div id="detailmuscle"></div>
                                            <hr>
                                            <div id="detailbmi"></div>
                                            <hr>
                                            <div id="detailbone"></div>
                                            <hr>
                                            <div id="detailvfr"></div>
                                            <hr>
                                            <div id="detailcalori"></div>
                                            <hr>
                                            <div id="detailwater"></div>

                                             
                                        </div> 
                                    </div> 
 
                                    
                                     <br>
                                     <hr>
                                   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect">  <i class="fas fa-database"></i> Simpan</button>
                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal">  <i class="fas fa-times"></i> Batal</button>
                             </form>
                       </div>

 
                     
                    </div>
                </div>
    </div>
 
    <!-- modal cari member -->
    <div class="modal fade" id="CariMemberModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" >Cari Member</h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>
 
                                <br>
                                <hr> 
                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_member" >
   
                                    <thead>
                                        <tr>  
                                            <th style="width:98%;">No Registrasi </th> 
                                            <th style="width:98%;">Nama </th> 
                                         </tr> 
                                    </thead> 
                                    <tbody id="daftar_member">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div> 

    
    <!-- detail data member -->
	<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Member</h4>
                        </div>
                        <div class="modal-body">
						
						<table class="table">
                            <tr>
								<td style="font-weight:bold;"> No Registrasi</td>
								<td> : </td>
								<td> <p id="noregdtls"> </p> </td>
								
								<td style="font-weight:bold;"> Nama</td>
								<td> : </td>
								<td> <p id="namadtls"> </p> </td> 
							</tr>
							 
							<tr>
								<td style="font-weight:bold;"> Telp</td>
								<td> : </td>
								<td> <p id="telpdtls"> </p> </td>
								
								<td style="font-weight:bold;"> Usia</td>
								<td> : </td>
								<td> <p id="usiadtls"> </p> </td> 
                            </tr>
                            
                            <tr>
								<td style="font-weight:bold;"> Alamat</td>
								<td> : </td>
								<td> <p id="alamatdtls"> </p> </td>
								
								<td style="font-weight:bold;"> Tanggal Daftar</td>
								<td> : </td>
								<td> <p id="tgldaftardtls"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Jenis Kelamin</td>
								<td> : </td>
								<td> <p id="jenkeldtls"> </p> </td>
								
								<td style="font-weight:bold;"> Tinggi Badan</td>
								<td> : </td>
								<td> <p id="tinggibadandtls"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Berat Badan</td>
								<td> : </td>
								<td> <p id="beratbadandtls"> </p> </td>
								
								<td style="font-weight:bold;"> Lemak Tubuh</td>
								<td> : </td>
								<td> <p id="lemaktubuhdtls"> </p> </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Kadar Air</td>
								<td> : </td>
								<td> <p id="kadarairdtls"> </p> </td>
								
								<td style="font-weight:bold;"> Kalori</td>
								<td> : </td>
								<td> <p id="kaloridtls"> </p> </td> 
							</tr>  

                            <tr>
								<td style="font-weight:bold;"> Usia Sel</td>
								<td> : </td>
								<td> <p id="usiaseldtls"> </p> </td>
								
								<td style="font-weight:bold;"> Masa Tulang</td>
								<td> : </td>
								<td> <p id="masatulangdtls"> </p> </td> 
							</tr> 
						 

                            <tr>
								<td style="font-weight:bold;"> Lemak Perut</td>
								<td> : </td>
								<td> <p id="lemakperutdtls"> </p> </td>
								
								<td style="font-weight:bold;">  </td>
								<td>  </td>
								<td> <p id="masatulangdtls">   </td> 
							</tr> 
    
                        
							 <div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
							 </div>
						</table>
                           
                        <hr>
                            <h3>Perhitungan Aktual</h3>
                            <table class="table">
                            <tr>
								<td style="font-weight:bold;"> BMI</td>
								<td> : </td>
								<td> <p id="bmidtls"> </p> </td>
								
								<td style="font-weight:bold;"> BMI Result</td>
								<td> : </td>
								<td> <p id="bmiresults"> </p> </td> 
							</tr>
                            <tr>
								<td style="font-weight:bold;"> Fat</td>
								<td> : </td>
								<td> <p id="fatdtls"> </p> </td>
								
								<td style="font-weight:bold;"> Fat Result</td>
								<td> : </td>
								<td> <p id="fatresults"> </p> </td> 
							</tr>
                            <tr>
								<td style="font-weight:bold;"> Muscle</td>
								<td> : </td>
								<td> <p id="muscledtls"> </p> </td>
								
								<td style="font-weight:bold;"> Muscle Result</td>
								<td> : </td>
								<td> <p id="muscleresults"> </p> </td> 
							</tr>
                            <tr>
								<td style="font-weight:bold;"> VFR</td>
								<td> : </td>
								<td> <p id="vfrdtls"> </p> </td>
								
								<td style="font-weight:bold;"> VFR Result</td>
								<td> : </td>
								<td> <p id="vfrresults"> </p> </td> 
							</tr>
                            <tr>
								<td style="font-weight:bold;"> Bone</td>
								<td> : </td>
								<td> <p id="bonedtls"> </p> </td>
								
								<td style="font-weight:bold;">   </td>
								<td>  </td>
								<td>  </td> 
							</tr>
                            <tr>
								<td style="font-weight:bold;"> Calori </td>
								<td> : </td>
								<td> <p id="caloridtls"> </p> </td>
								
								<td style="font-weight:bold;"> Calori Result</td>
								<td> : </td>
								<td> <p id="caloriresults"> </p> </td> 
							</tr>
                            <tr>
								<td style="font-weight:bold;"> Water </td>
								<td> : </td>
								<td> <p id="waterdtls"> </p> </td>
								
								<td style="font-weight:bold;"> Water Result</td>
								<td> : </td>
								<td> <p id="waterresults"> </p> </td> 
							</tr>
							  
                         
						</table>
					   </div>
                     
                    </div>
                </div>
    </div>

  <script> 

function Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>calculate/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){   
                   
                 $("#namadtls").html(result.nama);
                 $("#noregdtls").html(result.no_reg);
                 $("#usiadtls").html(result.usia+' Tahun');  
                 $("#telpdtls").html(result.telp); 
                 $("#alamatdtls").html(result.alamat); 
                 $("#emaildtls").html(result.email); 
                 $("#tgldaftardtls").html(result.tgl_daftar);  
                 $("#jenkeldtls").html(result.gents);  
                 $("#tinggibadandtls").html(result.tinggi+ ' cm'); 
                 $("#beratbadandtls").html(result.berat_badan+ ' kg'); 
                 $("#lemaktubuhdtls").html(result.lemak_tubuh);  
                 $("#kadarairdtls").html(result.kadar_air); 
                 $("#kaloridtls").html(result.kalori); 
                 $("#usiaseldtls").html(result.usia_sel); 
                 $("#masatulangdtls").html(result.masa_tulang); 
                 $("#lemakperutdtls").html(result.lemak_perut); 
                 
                 if(result.id_bmi == 99){
                    $("#bmidtls").html(result.bmi_value); 
                    $("#bmiresults").html(result.bmi_reason); 
                 }else{
                    $("#bmidtls").html(result.minbmi+' - '+result.maxbmi); 
                    $("#bmiresults").html(result.reasonbmi); 
                 }

                 if(result.id_fat == 99){
                    $("#bmidtls").html(result.fat_value); 
                    $("#bmiresults").html(result.fat_reason); 
                 }else{
                    $("#fatdtls").html(result.minfat+' - '+result.maxfat); 
                    $("#fatresults").html(result.reasonfat)
                 }

                 if(result.id_muscle == 99){
                    $("#muscledtls").html(result.muscle_value); 
                    $("#muscleresults").html(result.muscle_reason); 
                 }else{
                    $("#muscledtls").html(result.minmuscle+' - '+result.maxmuscle); 
                    $("#muscleresults").html(result.reasonmuscle);
                 }

                 if(result.id_vfr == 99){
                    $("#vfrdtls").html(result.vfr_value); 
                    $("#vfrresults").html(result.vfr_reason); 
                 }else{
                    $("#vfrdtls").html(result.minvfr+' - '+result.maxvfr); 
                    $("#vfrresults").html(result.reasonvfr); 
                 }

                 if(result.id_calori == 99){
                    $("#caloridtls").html(result.jenkel_calori_value+ ' - '+result.calori_value); 
                    $("#caloriresults").html(result.calori_reason); 
                 }else{
                    $("#caloridtls").html(result.jkcalori+ '- ' +result.mincalori+' - '+result.maxcalori); 
                    $("#caloriresults").html(result.reasoncalori); 
                 }

                 if(result.id_water == 99){
                    $("#waterdtls").html(result.jenkel_water_value+ ' - '+result.water_value); 
                    $("#waterresults").html(result.water_reason); 
                 }else{
                    $("#waterdtls").html(result.jkwater+ '- ' +result.minwater+' - '+result.maxwater); 
                    $("#waterresults").html(result.reasonwater); 
                 }

                 if(result.id_bone == 99){
                    $("#bonedtls").html(result.bone_reason); 
                 }else{
                    $("#bonedtls").html(result.optionbone); 
                 }
                //  $("#bmidtls").html(result.minbmi+' - '+result.maxbmi); 
                //  $("#bmiresults").html(result.reasonbmi); 
                //  $("#fatdtls").html(result.minfat+' - '+result.maxfat); 
                //  $("#fatresults").html(result.reasonfat); 
                //  $("#muscledtls").html(result.minmuscle+' - '+result.maxmuscle); 
                //  $("#muscleresults").html(result.reasonmuscle); 
                //  $("#vfrdtls").html(result.minvfr+' - '+result.maxvfr); 
                //  $("#vfrresults").html(result.reasonvfr); 
                //  $("#bonedtls").html(result.optionbone); 
                //  $("#caloridtls").html(result.jkcalori+ '- ' +result.mincalori+' - '+result.maxcalori); 
                //  $("#caloriresults").html(result.reasoncalori); 
                //  $("#waterdtls").html(result.jkwater+ '- ' +result.minwater+' - '+result.maxwater); 
                //  $("#waterresults").html(result.reasonwater); 
                  
			 }
		 });
	 }
    function FuncOptFat(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectionfat").css("display", "block");
        }else{
            $("#sectionfat").css("display", "none");
        } 
    }

    function FuncOptMuscle(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectionmuscle").css("display", "block");
        }else{
            $("#sectionmuscle").css("display", "none");
        } 
    }

    function FunOptBMI(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectionbmi").css("display", "block");
        }else{
            $("#sectionbmi").css("display", "none");
        } 
    }
    function FunOptBone(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectionbone").css("display", "block");
        }else{
            $("#sectionbone").css("display", "none");
        } 
    }
    function FunOptVFR(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectionvfr").css("display", "block");
        }else{
            $("#sectionvfr").css("display", "none");
        } 
    }

    function FunOptCalori(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectioncalori").css("display", "block");
        }else{
            $("#sectioncalori").css("display", "none");
        } 
    }

    function FunOptWater(parseval){
        var value = parseval.value;
        if(value == 99){
            $("#sectionwater").css("display", "block");
        }else{
            $("#sectionwater").css("display", "none");
        } 
    }

    $("#adminbtn").on("click",function(){
        $("#level").val('1');
        $(this).attr('class','btn btn-primary');
        $("#calculatebtn").attr('class','btn btn-default'); 
    });

    $("#calculatebtn").on("click",function(){
        $("#level").val('2');
        $(this).attr('class','btn btn-primary');
        $("#adminbtn").attr('class','btn btn-default');  
    }); 
   
    $('#daftar_member').DataTable( {
        "ajax": "<?php echo base_url(); ?>member/fetch_member"           
    }); 
     
    var daftar_member = $('#daftar_member').DataTable();
     
    $('#daftar_member tbody').on('click', 'tr', function () {
         
         var content = daftar_member.row(this).data()
        //  console.log(content);
         $("#nama_member").val(content[1]);
         $("#id_member").val(content[5]);

         $.get("<?php echo base_url(); ?>member/get_data_edit/"+content[5],function(response){
                var result = JSON.parse(response);
                console.log(result.nama);
                 $("#namadtl").html(result.nama);
                 $("#noregdtl").html(result.no_reg);
                 $("#usiadtl").html(result.usia+' Tahun');  
                 $("#telpdtl").html(result.telp); 
                 $("#alamatdtl").html(result.alamat); 
                 $("#emaildtl").html(result.email); 
                 $("#tgldaftardtl").html(result.tgl_daftar);  
                 $("#jenkeldtl").html(result.gents);  
                 $("#tinggibadandtl").html(result.tinggi+ ' cm'); 
                 $("#beratbadandtl").html(result.berat_badan+ ' kg'); 
                 $("#lemaktubuhdtl").html(result.lemak_tubuh);  
                 $("#kadarairdtl").html(result.kadar_air); 
                 $("#kaloridtl").html(result.kalori); 
                 $("#usiaseldtl").html(result.usia_sel); 
                 $("#masatulangdtl").html(result.masa_tulang); 
                 $("#lemakperutdtl").html(result.lemak_perut); 
         });
         $("#CariMemberModal").modal('hide');
    });
       
    function Ubah_Data(id){
        $("#defaultModalLabel").html("Form Ubah Data");
        $("#defaultModal").modal('show');
 
        $.ajax({
             url:"<?php echo base_url(); ?>calculate/get_data_edit/"+id,
             type:"GET",
             dataType:"JSON", 
             success:function(result){  
                 $("#defaultModal").modal('show'); 
                 $("#id").val(result.id);
                 $("#calculatename").val(result.calculatename); 
                 $("#id_pegawai").val(result.id_pegawai);
                 $("#nama_pegawai").val(result.nama); 
                 $("#level").val(result.level); 

                 if(result.level == '1'){
                    $("#adminbtn").attr('class','btn btn-primary');
                    $("#calculatebtn").attr('class','btn btn-default');
                 }else{
                    $("#adminbtn").attr('class','btn btn-default');
                    $("#calculatebtn").attr('class','btn btn-primary');
                 }
             }
         });
    }
 
    function Bersihkan_Form(){
        $(':input').val(''); 
    } 
   
    function Hapus_Data(id){
        if(confirm('Anda yakin ingin menghapus data ini?'))
        { 
        $.ajax({
            url : "<?php echo base_url('calculate/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
               
               $('#example1').DataTable().ajax.reload(); 
               toastr.success('Data Berhasil Dihapus');
             
                 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        }); 
      }
    } 
   
    function Simpan_Data(){ 
         var formData = new FormData($('#user_form')[0]);  
        

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>calculate/simpan_data",
             type:"POST",
             data:formData,
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example1').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 toastr.success('Data Berhasil Disimpan');
              
             }
            });  
       
    } 

    function CariMember(){
        $("#CariMemberModal").modal({backdrop: 'static', keyboard: false,show:true});
    } 
    $(document).ready(function() {
        // $("#fat_reason").disable(true);
     
           $("#addmodal").on("click",function(){
               $("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
               $("#method").val('Add');
               $("#defaultModalLabel").html("Form Tambah Data"); 
               $.get("<?php echo base_url(); ?>calculate/getdetailfat",function(result){
                    $("#detailfat").html(result);
               });
               $.get("<?php echo base_url(); ?>calculate/getdetailmuscle",function(result){
                    $("#detailmuscle").html(result);
               });
               $.get("<?php echo base_url(); ?>calculate/getdetailbmi",function(result){
                    $("#detailbmi").html(result);
               });
               $.get("<?php echo base_url(); ?>calculate/getdetailbone",function(result){
                    $("#detailbone").html(result);
               });
               $.get("<?php echo base_url(); ?>calculate/getdetailvfr",function(result){
                    $("#detailvfr").html(result);
               });
               $.get("<?php echo base_url(); ?>calculate/getdetailcalori",function(result){
                    $("#detailcalori").html(result);
               });
               $.get("<?php echo base_url(); ?>calculate/getdetailwater",function(result){
                    $("#detailwater").html(result);
               });
               
            });
             
           $("#example1").DataTable({
              "ajax":"<?php echo base_url(); ?>calculate/fetch_calculate",
              "ordering": true,               // Allows ordering
              "searching": true,              // Searchbox
              "paging": true,                 // Pagination
              "info": false,                  // Shows 'Showing X of X' information
              "pagingType": 'simple_numbers', // Shows Previous, page numbers & next buttons only
              "pageLength": 10,               // Defaults number of rows to display in table
              "columnDefs": [
                  {
                      "targets": 'dialPlanButtons',
                      "searchable": false,    // Stops search in the fields 
                      "sorting": false,       // Stops sorting
                      "orderable": false      // Stops ordering
                  }
              ],
              "dom": '<"top"f>rt<"bottom"lp><"clear">', // Positions table elements
              "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Sets up the amount of records to display
              "language": {
                  "search": "_INPUT_",            // Removes the 'Search' field label
                  "searchPlaceholder": "Search Here..."   // Placeholder for the search box
              },
              "search": {
                  "addClass": 'form-control input-lg col-lg-12'
              },
              "fnDrawCallback":function(){
                  $("input[type='search']").attr("id", "searchBox");
                  $('#dialPlanListTable').css('cssText', "margin-top: 0px !important;");
                  $("select[name='dialPlanListTable_length'], #searchBox").removeClass("input-sm");
                  $('#searchBox').css("width", "200px").focus();
                  $('#dialPlanListTable_filter').removeClass('dataTables_filter');
              }
          });  
         }); 
</script>