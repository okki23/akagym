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
                        <th style="width:10%;">Opsi</th> 
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
                                             <div class="form-group">
                                                <label for=""> Tinggi Badan (cm)</label>
                                                <div class="form-line">
                                                    <input type="text" name="tinggi" id="tinggi" class="form-control" placeholder="Tinggi Badan" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for=""> Berat Badan (kg)</label>
                                                <div class="form-line">
                                                    <input type="text" name="berat_badan" id="berat_badan" class="form-control" placeholder="Berat Badan" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for=""> Lemak Tubuh</label>
                                                <div class="form-line">
                                                    <input type="text" name="lemak_tubuh" id="lemak_tubuh" class="form-control" placeholder="Lemak Tubuh" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for=""> Kadar Air</label>
                                                <div class="form-line">
                                                    <input type="text" name="kadar_air" id="kadar_air" class="form-control" placeholder="Kadar Air" />
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label for=""> Massa Otot</label>
                                                <div class="form-line">
                                                    <input type="text" name="masa_otot" id="masa_otot" class="form-control" placeholder="Massa Otot" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Kalori</label>
                                                <div class="form-line">
                                                    <input type="text" name="kalori" id="kalori" class="form-control" placeholder="Kalori"  />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Usia Sel</label>
                                                <div class="form-line">
                                                    <input type="text" name="usia_sel" id="usia_sel" class="form-control" placeholder="Usia Sel"  />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Massa Tulang</label>
                                                <div class="form-line">
                                                    <input type="text" name="masa_tulang" id="masa_tulang" class="form-control" placeholder="Massa Tulang"  />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Lemak Perut</label>
                                                <div class="form-line">
                                                    <input type="text" name="lemak_perut" id="lemak_perut" class="form-control" placeholder="Lemak Perut" />
                                                </div>
                                            </div>
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
  <script> 
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

    // $("#namadtl").html(result.nama);
    //              $("#noregdtl").html(result.no_reg);
    //              $("#usiadtl").html(result.usia+' Tahun'); 
    //              $("#namadtl").html(result.nama); 
    //              $("#telpdtl").html(result.telp); 
    //              $("#alamatdtl").html(result.alamat); 
    //              $("#emaildtl").html(result.email); 
    //              $("#tgldaftardtl").html(result.tgl_daftar);  
    //              $("#jenkeldtl").html(result.gents);  
    //              $("#tinggibadandtl").html(result.tinggi+ ' cm'); 
    //              $("#beratbadandtl").html(result.berat_badan+ ' kg'); 
    //              $("#lemaktubuhdtl").html(result.lemak_tubuh);  
    //              $("#kadarairdtl").html(result.kadar_air); 
    //              $("#kaloridtl").html(result.kalori); 
    //              $("#usiaseldtl").html(result.usia_sel); 
    //              $("#masatulangdtl").html(result.masa_tulang); 
    //              $("#lemakperutdtl").html(result.lemak_perut); 
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
         var formData = new FormData($('#calculate_form')[0]);  
           
         var calculatename = $("#calculatename").val();
         
         if(calculatename == ''){
            alert("calculatename Belum anda masukkan!");
            $("#calculatename").parents('.form-line').addClass('focused error');
            $("#calculatename").focus();
          
         }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>calculate/simpan_data_calculate",
             type:"POST",
             data:formData,
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example1').DataTable().ajax.reload(); 
                 $('#calculate_form')[0].reset();
                 toastr.success('Data Berhasil Disimpan');
              
             }
            });  
         } 
    } 

    function CariMember(){
        $("#CariMemberModal").modal({backdrop: 'static', keyboard: false,show:true});
    } 
    $(document).ready(function() {
        
           $("#addmodal").on("click",function(){
               $("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
               $("#method").val('Add');
               $("#defaultModalLabel").html("Form Tambah Data");
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