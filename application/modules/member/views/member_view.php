<div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listing Data Member</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="fas fa-book-medical"></i> Tambah Data </a>
            <br>
            &nbsp;
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr> 
                        <th style="width:10%;">No Reg</th>   
                        <th style="width:20%;">Nama</th>   
                        <th style="width:10%;">Usia</th>   
                        <th style="width:20%;">Alamat</th>   
                        <th style="width:40%;">Opsi</th>   
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
                                            
                                            <div class="form-group">
                                                <label for=""> No Registrasi</label>
                                                <div class="form-line">
                                                    <input type="text" name="no_reg" id="no_reg" class="form-control" readonly="readonly" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Nama</label>
                                                <div class="form-line">
                                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Alamat</label>
                                                <div class="form-line">
                                                    <input type="text" name="alamat" id="alamat" class="form-control"  placeholder="Alamat" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Usia</label>
                                                <div class="form-line">
                                                    <input type="text" name="usia" id="usia" class="form-control"  placeholder="Usia"/>
                                                </div>
                                            </div>

                                            <div class="form-group">  
                                            <label> Jenis Kelamin  </label>
                                            <br>
                                                <input type="hidden" name="jenkel" id="jenkel">

                                                <button type="button" id="priabtn" class="btn btn-default waves-effect "> Pria </button>

                                                <button type="button" id="wanitabtn" class="btn btn-default waves-effect "> Wanita </button>
                                            </div> 

                                            <div class="form-group">
                                                <label for=""> Telp</label>
                                                <div class="form-line">
                                                    <input type="text" name="telp" id="telp" class="form-control" placeholder="Telp" />
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label for=""> Tinggi Badan (cm)</label>
                                                <div class="form-line">
                                                <input type="text" name="tinggi" id="tinggi" class="form-control" placeholder="Tinggi Badan" />
                                                </div>
                                            </div> 

                                          
                                        </div> 

                                        <div class="col-sm-6">  
                                            <div class="form-group"> 
                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Berat Badan (Kg)</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                <input type="text" name="berat_badan" id="berat_badan" placeholder="Berat Badan" class="form-control"> 
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Lemak Tubuh</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                <input type="text" name="lemak_tubuh" id="lemak_tubuh" placeholder="Lemak Tubuh" class="form-control">
                                                       <br>
                                                        <span class="btn btn-primary btn-block"> Keterangan : </span>
                                                        <table class="table table-bordered" style="text-align: center;">
                                                            <thead style="font-weight:bold;"> 
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>Usia Dibawah 30 Tahun</td>
                                                                <td>Usia Diatas 30 Tahun</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td> Pria</td>
                                                                <td> 14 - 20%</td>
                                                                <td> 17 - 23%</td>
                                                            </tr>
                                                            <tr>
                                                                <td> Wanita </td>
                                                                <td> 17 - 24%</td>
                                                                <td> 20 - 27%</td>
                                                            </tr>
                                                            </tbody>
                                                        </table> 
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Kadar Air</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                        <input type="text" name="kadar_air" id="kadar_air" placeholder="Kadar Air" class="form-control">
                                                        <br>
                                                        <span class="btn btn-primary btn-block"> Keterangan : </span>
                                                        <table class="table table-bordered" style="text-align: center;">
                                                            <thead style="font-weight:bold;"> 
                                                                <tr>
                                                                    <td>Pria</td>
                                                                    <td>Wanita </td> 
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> 50 - 55%</td> 
                                                                    <td> 60 - 65%</td> 
                                                                </tr> 
                                                            </tbody>
                                                        </table> 
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Rating Fisik (VFR)</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                             
                                                        <input type="text" name="rating_fisik" id="rating_fisik" placeholder="Rating Fisik" class="form-control">
                                                        <br>
                                                        <span class="btn btn-primary btn-block"> Keterangan : </span>
                                                        <table class="table table-bordered" style="text-align: center;">
                                                            <thead style="font-weight:bold; font-size:30px;"> 
                                                                <tr>
                                                                    <td>1 - 9</td> 
                                                                </tr>
                                                            </thead> 
                                                        </table> 
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Kalori</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                        <select name="kalori" id="kalori" class="form-control">
                                                            <option value="">--Pilih--</option>
                                                            <option value="1">Cara Langsing</option>
                                                            <option value="2">Cara Sehat</option>
                                                            <option value="3">Cara Gemuk</option> 
                                                        </select>
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Usia Sel</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                        <select name="kalori" id="kalori" class="form-control">
                                                            <option value="">--Pilih--</option>
                                                            <option value="1"> < Muda</option>
                                                            <option value="2"> = Umur </option>
                                                            <option value="3"> > Tua</option> 
                                                        </select>
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Masa Tulang</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                        <input type="text" name="masa_tulang" id="masa_tulang" placeholder="Masa Tulang" class="form-control">
                                                        <br>
                                                        <span class="btn btn-primary btn-block"> Keterangan : </span>
                                                        <table class="table table-bordered" style="text-align: center;">
                                                            <thead style="font-weight:bold;"> 
                                                            <tr>
                                                                <td>Wanita</td>
                                                                <td> < 50kg <br> 1.95kg </td>
                                                                <td> 50-70kg <br> 2.40kg </td>
                                                                <td> < 70kg <br> 2.95kg </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pria</td>
                                                                <td> < 65kg <br> 2.65kg </td>
                                                                <td> 66-95kg <br> 3.29kg </td>
                                                                <td> < 95kg <br> 3.29kg </td>
                                                            </tr>
                                                            </thead>
                                                            
                                                        </table> 
                                                </div>

                                            </div>

                                            <div class="card card-primary collapsed-card">
                                                <div class="card-header">
                                                <h3 class="card-title">Lemak Perut</h3>
                                                <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                                </div>

                                                </div>

                                                <div class="card-body">
                                                        <input type="text" name="lemak_perut" id="lemak_perut" placeholder="Lemak Perut" class="form-control">
                                                        <br>
                                                        <span class="btn btn-primary btn-block"> Keterangan : </span>
                                                        <table class="table table-bordered" style="text-align: center;">
                                                            <thead style="font-weight:bold; font-size:30px;"> 
                                                                <tr>
                                                                    <td>Sehat</td>
                                                                    <td>Hati- Hati </td>
                                                                    <td>Bahaya </td> 
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight:bold; font-size:30px;"> 
                                                                <tr>
                                                                    <td> 1-4</td> 
                                                                    <td> 5-9</td> 
                                                                    <td> 10-15</td> 
                                                                </tr> 
                                                            </tbody>
                                                        </table> 
                                                </div>

                                            </div>
     
                                        </div> 
                                    </div> 
 
                                    
                                     <br>
                                     <hr>
                                   <button type="button" onclick="Simpan_Data();" class="btn btn-block btn-success waves-effect">  <i class="fas fa-database"></i> Simpan</button>
                                   <br> &nbsp;
                                   <button type="button" name="cancel" id="cancel" class="btn btn-block  btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal">  <i class="fas fa-times"></i> Batal</button>
                             </form>
                       </div>
                     
                    </div>
                </div>
    </div>
  
    <!-- detail data pegawai -->
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
								
								<td style="font-weight:bold;">  Massa Otot</td>
								<td>  </td>
								<td> <p id="masaototdtl">   </td> 
							</tr> 

                            <tr>
								<td style="font-weight:bold;"> Rating Fisik (VFR)</td>
								<td> : </td>
								<td> <p id="ratingfisikdtl"> </p> </td>
								
								<td style="font-weight:bold;"> BMI   </td>
								<td> : </td>
								<td>  <p id="bmidtl"> </p>  </td> 
							</tr> 
						 
							 <div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
							 </div>
						</table>
                           
					   </div>
                     
                    </div>
                </div>
    </div>

  <script>  

        $.fn.pressEnter = function(fn) {  
        
        return this.each(function() {  
            $(this).bind('enterPress', fn);
            $(this).keyup(function(e){
                if(e.keyCode == 13)
                {
                    $(this).trigger("enterPress");
                }
            })
        });  
        }; 

      

        $("#lemak_tubuh").pressEnter(function(){
            var usia = $("#usia").val();
            var jenkel = $("#jenkel").val(); 
            var lemak_tubuh = $(this).val();

            if(usia == '' || usia == null){
                Swal.fire({
                icon: 'error',
                title: 'Perhatian!',
                text: 'Usia Belum Anda Isi...!'
                })
                usia.focus();
            }else if(jenkel == '' || jenkel == null){
                Swal.fire({
                icon: 'error',
                title: 'Perhatian!',
                text: 'Jenis Kelamin Belum Anda Isi...!'
                })
            }else{
                $.ajax({
                    url:"<?php echo base_url('calculate/lemak_service'); ?>",
                    data:{usia:usia,jenkel:jenkel,lemak_tubuh:lemak_tubuh},
                    type:"POST",
                    success:function(response){
                        var resp = JSON.parse(response);
                        // var regex = /<br\s*[\/]?>/gi;
                        // console.log(resp.icon);
                        // var result = 'Hasil Timbangan Anda : '+resp.timbangan+ '% \nl2br Keterangan : ' +resp.keterangan;
                        Swal.fire({
                        icon:  resp.icon,
                        title:  resp.title,  
                        html: 'Hasil Timbangan Anda : <b>'+resp.timbangan+' % </b>' +
                                '<br> Keterangan : </br> <b>' +resp.keterangan+'</b>'
                        }) 
                    }
                })
            }
            
        });


        $("#rating_fisik").pressEnter(function(){
          
            var rating_fisik = $(this).val();
 
                $.ajax({
                    url:"<?php echo base_url('calculate/rating_fisik'); ?>",
                    data:{rating_fisik:rating_fisik},
                    type:"POST",
                    success:function(response){
                        var resp = JSON.parse(response);
                       
                        Swal.fire({
                        icon:  resp.icon,
                        title:  resp.title,  
                        html: 'Hasil Timbangan Anda : <b>'+resp.timbangan+' </b>' +
                                '<br> Keterangan : </br> <b>' +resp.keterangan+'</b>'
                        }) 
                    }
                })
            
            
        });

        $("#priabtn").on("click",function(){
            $("#jenkel").val('1');
            $(this).attr('class','btn btn-primary');
            $("#wanitabtn").attr('class','btn btn-default'); 
        });

        $("#wanitabtn").on("click",function(){
            $("#jenkel").val('2');
            $(this).attr('class','btn btn-primary');
            $("#priabtn").attr('class','btn btn-default');  
        }); 
    function Ubah_Data(id){
        $("#defaultModalLabel").html("Form Ubah Data");
        $("#defaultModal").modal('show'); 
        $.ajax({
             url:"<?php echo base_url(); ?>member/get_data_edit/"+id,
             type:"GET",
             dataType:"JSON", 
             success:function(result){  
                 $("#defaultModal").modal('show'); 
                 $("#id").val(result.id);
                 $("#nama").val(result.nama);   
                 $("#no_reg").val(result.no_reg);   
                 $("#telp").val(result.telp);   
                 $("#alamat").val(result.alamat);   
                 $("#usia").val(result.usia);   
                 $("#tinggi").val(result.tinggi);   
                 $("#berat_badan").val(result.berat_badan);   
                 $("#lemak_tubuh").val(result.lemak_tubuh);   
                 $("#kadar_air").val(result.kadar_air);   
                 $("#masa_otot").val(result.masa_otot);   
                 $("#kalori").val(result.kalori);   
                 $("#usia_sel").val(result.usia_sel);   
                 $("#masa_tulang").val(result.masa_tulang);   
                 $("#lemak_perut").val(result.lemak_perut);  
                 $("#rating_fisik").val(result.rating_fisik);
                 $("#bmi").val(result.bmi);  
                 if(result.jenkel == '1'){
                    $("#priabtn").attr('class','btn btn-primary');
                    $("#wanitabtn").attr('class','btn btn-default');
                 }else{
                    $("#priabtn").attr('class','btn btn-default');
                    $("#wanitabtn").attr('class','btn btn-primary');
                 }  
             }
         });
    }
 
    function Show_Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>member/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
                 var nf = new Intl.NumberFormat();
                 $("#namadtl").html(result.nama);
                 $("#noregdtl").html(result.no_reg);
                 $("#usiadtl").html(result.usia+' Tahun'); 
                 $("#namadtl").html(result.nama); 
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
                 $("#masaototdtl").html(result.masa_otot); 
                 $("#ratingfisikdtl").html(result.rating_fisik); 
                 $("#bmidtl").html(result.bmi); 
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
            url : "<?php echo base_url('member/hapus_data')?>/"+id,
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
        var lemak = $("#lemak").val();
        if(lemak == '' || lemak == null){ 
            Swal.fire({
                title: 'Error!',
                text: 'Lemak Belum Diisi!',
                icon: 'error',
                confirmButtonText: 'OK!'
                })
        }else{
        
            var formData = new FormData($('#user_form')[0]);   
            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>member/simpan_data",
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
      
    }  
    
    $(document).ready(function() {
        
           $("#addmodal").on("click",function(){
               $.get("<?php echo base_url('member/get_last_id'); ?>",function(result){
                  $("#no_reg").val(result);
               });
               $("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
               $("#method").val('Add');
               $("#defaultModalLabel").html("Form Tambah Data");
           });
             
           $("#example1").DataTable({
              "ajax":"<?php echo base_url(); ?>member/fetch_member",
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