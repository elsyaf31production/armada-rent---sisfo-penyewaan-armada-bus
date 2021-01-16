<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Armada Bus</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
                       <div class="col-md-4 col-md-offset-4">
                       <div id="pesan"></div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                      
                      <h3 class="panel-title"><i class="fa fa-money"></i> <?php 
					  if ($_GET['status']=="awal") {echo " Pembayaran Awal";}
					  else if ($_GET['status']=="lanjut") {echo " Perpanjangan";}
					  ?></h3>
                    </div>
                    <div class="panel-body">
                       <?php 
					   		if ($_GET['status']=="awal")
								{
									
								   include "koneksiCloud.php";
								   $kd_pendaftaran = $_GET['kd_pendaftaran']; 
								   $kd_bayar = substr($kd_pendaftaran,-3);
								   $sql = mysql_query("SELECT * from tb_pendaftaran where kd_pendaftaran = '$kd_pendaftaran'");
								   $data = mysql_fetch_assoc($sql);
								   ?>
										 
									 <h4 class="text-center">Jenis Pakai : <?php  if ($data['jns_pakai'] == "3") {echo "3 Tahun";}
										else if ($data['jns_pakai'] == "2") {echo "2 Tahun";}			
										else {echo "Free";} 
						  ?></h4>
						  <p><?php  if ($data['jns_pakai'] == "3") 
										{echo "Akun 3 Th, jumlah pembayaran sebesar : 300.$kd_bayar ke No.Rek.BangKu 1234567890 
										a.n : AbangKu (jumlah pembayaran harus tepat, untuk konfirmasi)";}
										else if ($data['jns_pakai'] == "2") 
										{echo "Akun 2 Th, jumlah pembayaran sebesar : 200.$kd_bayar ke No.Rek.BangKu 1234567890 
										a.n : AbangKu (jumlah pembayaran harus tepat, untuk konfirmasi)";}			
										
						  ?></p>
						  <hr/>         
								   <form id="form_awal" role="form">
								   <input class="form-control"  name="kd_pendaftaran" id="kd_pendaftaran" type="hidden" readonly value="<?php echo $kd_pendaftaran; ?>" required>
									<input class="form-control" name="jns_pakai" id="jns_pakai" type="hidden" 
						 value="<?php echo $data['jns_pakai']; ?>" readonly>
									
									<div class="form-group">
									<label>Atas Nama Rekening</label>
									<input class="form-control" name="an_rek" placeholder="Nama Pemilik No. Rek " type="text" id="an_rek" maxlength="25" required autofocus>
									</div>
									
									<div class="form-group">
									<label>Nomer Rekening</label>
									<input class="form-control" name="no_rek" placeholder="Nomer Rekening" type="text" id="no_rek" maxlength="25" required>
									</div>
												   
									<div class="form-group">
									<label>Jumlah Transfer</label>
									<input class="form-control" name="jml_transfer" placeholder="Jumlah Transfer" type="text" id="jml_transfer" maxlength="25" required readonly value="<?php  if($data['jns_pakai'] == "3") {echo "300".$kd_bayar;}
										else if ($data['jns_pakai'] == "2" ) {echo "200".$kd_bayar;}			
										else {echo "200".$kd_bayar;} 
						  ?>">
									</div>
									
									
									  <!-- Change this to a button or input when using this as a form -->
										 <div class="pull-left">
										<a href="indexCloud.php" class="btn btn-default"> <i class="fa fa-cloud"> </i> ArmadaRENT Cloud</a>
										 </div>
										 <div class="pull-right">
										 <input class="btn btn-success " id="kirim" name="kirim" type="submit" value="Kirim"> 
										 </div>
										  
									  
								  </form>
                                    <?php	
								}
								else if ($_GET['status']=="lanjut")
								{
								 include "koneksiCloud.php";
								   $kd_pendaftaran = $_GET['kd_pendaftaran']; 
								   $kd_bayar = substr($kd_pendaftaran,-3);
								   $sql = mysql_query("SELECT * from tb_pendaftaran where kd_pendaftaran = '$kd_pendaftaran'");
								   $data = mysql_fetch_assoc($sql);
								   ?>
										 
									 <h4 class="text-center" id="label_ketmasapakai">Jenis Pakai : <?php  if ($data['jns_pakai'] == "3") {echo "3 Tahun";}
										else if ($data['jns_pakai'] == "2" ) {echo "2 Tahun";}			
										else {echo "2 Tahun";} 
						  ?></h4>
						  <p id="ket_masaPakai"><?php  if ($data['jns_pakai'] == "3") 
										{echo "Akun 3 Th, jumlah pembayaran sebesar : 300.$kd_bayar ke No.Rek.BangKu 1234567890 
										a.n : AbangKu (jumlah pembayaran harus tepat, untuk konfirmasi)";}
										else if ($data['jns_pakai'] == "2" || $data['jns_pakai'] == "0") 
										{echo "Akun 2 Th, jumlah pembayaran sebesar : 200.$kd_bayar ke No.Rek.BangKu 1234567890 
										a.n : AbangKu (jumlah pembayaran harus tepat, untuk konfirmasi)";}			
										
						  ?></p>
						  <hr/>         
								   <form id="form_awal" role="form">
								   <input class="form-control"  name="kd_pendaftaran" id="kd_pendaftaran" type="hidden" readonly value="<?php echo $kd_pendaftaran; ?>" required>
									<input class="form-control" name="jns_pakai" id="jns_pakai" type="hidden" 
						 value="<?php  if ($data['jns_pakai'] == "3") {echo "3";}
										else if ($data['jns_pakai'] == "2" ) {echo "2";}			
										else {echo "2";} 
						  ?>" readonly>
									<div class="form-group">
									<label >Ganti Masa Pakai</label>
									<select class="form-control" id="pilih_jns_pakai" name="pilih_jns_pakai">
                                    	<?php  if ($data['jns_pakai'] == "3") {echo "<option value='3'>3 Th
                                        </option>";}
										else if ($data['jns_pakai'] == "2" ) {echo "<option value='2'>2 Th
                                        </option>";}			
										else {echo "<option value='2'>2 Th
                                        </option>";} 
						  ?>
                                        <option value="2">2 Th
                                        </option>
                                        <option value="3">3 Th
                                        </option>
                                    </select>
									</div>
									<div class="form-group">
									<label>Atas Nama Rekening</label>
									<input class="form-control" name="an_rek" placeholder="Nama Pemilik No. Rek " type="text" id="an_rek" maxlength="25" required autofocus>
									</div>
									
									<div class="form-group">
									<label>Nomer Rekening</label>
									<input class="form-control" name="no_rek" placeholder="Nomer Rekening" type="text" id="no_rek" maxlength="25" required>
									</div>
												   
									<div class="form-group">
									<label>Jumlah Transfer</label>
									<input class="form-control" name="jml_transfer" placeholder="Jumlah Transfer" type="text" id="jml_transfer" maxlength="25" required readonly value="<?php  if($data['jns_pakai'] == "3") {echo "300".$kd_bayar;}
										else if ($data['jns_pakai'] == "2" ) {echo "200".$kd_bayar;}			
										else {echo "200".$kd_bayar;} 
						  ?>">
									</div>
									
									
									  <!-- Change this to a button or input when using this as a form -->
										 <div class="pull-left">
										<a href="indexCloud.php" class="btn btn-default"> <i class="fa fa-cloud"> </i> ArmadaRENT Cloud</a>
										 </div>
										 <div class="pull-right">
										 <input class="btn btn-success " id="kirim_lanjut" name="kirim_lanjut" type="submit" value="Kirim"> 
										 </div>
										  
									  
								  </form>
                                    <?php		
								}
					   ?>
                    </div>
              </div>
          </div>
      </div>
</div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

 <script>
$(document).ready(function() {

 
//jika pilih jns dirubah
$("#pilih_jns_pakai").change(function () {
        
var jns_pakai = $(this).val();
var kdTransfer = <?php echo $kd_bayar; ?>;
if (jns_pakai == "2")
{
	$("#label_ketmasapakai").html('Jenis Pakai : 2 Tahun');
	$("#ket_masaPakai").html('Akun 2 Th, jumlah pembayaran sebesar : 200.<?php echo $kd_bayar; ?> ke No.Rek.BangKu 1234567890 a.n : AbangKu (jumlah pembayaran harus tepat, untuk konfirmasi');
	$("#jns_pakai").val('2');
	$("#jml_transfer").val('200<?php echo $kd_bayar; ?>');
	}
else if (jns_pakai == "3")
{
	$("#label_ketmasapakai").html('Jenis Pakai : 3 Tahun');
	$("#ket_masaPakai").html('Akun 3 Th, jumlah pembayaran sebesar : 300.<?php echo $kd_bayar; ?> ke No.Rek.BangKu 1234567890 a.n : AbangKu (jumlah pembayaran harus tepat, untuk konfirmasi');
	$("#jns_pakai").val('3');
	$("#jml_transfer").val('300<?php echo $kd_bayar; ?>');
	}
});	 


	//validasi angka 

$("#jml_transfer").keyup(function () {
        
var inputVal = $(this).val();
    
var numericReg = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
    
if
(!numericReg.test(inputVal)) {
        
$(this).attr("placeholder","Inputan Angka");
$(this).val('');
return false; 
}
});	 

	//validasi angka 

$("#no_rek").keyup(function () {
        
var inputVal = $(this).val();
    
var numericReg = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
    
if
(!numericReg.test(inputVal)) {
        
$(this).attr("placeholder","Inputan Angka");
$(this).val('');
return false; 
}
});	 

//save
	$('#form_awal').on('submit', function(e){
	
				e.preventDefault();
			
			$.ajax({
	url: "aksi_perpanjangan.php", 
	type: "POST",            
	data: new FormData(this), 
	contentType: false,       
	cache: false,            
	processData:false,        
	success: function(data)   
	{
		   
		   	$("#pesan").html(data);
		   	$("#an_rek").val('');
		    $("#no_rek").val('');
			$("#jml_transfer").val('');
		   	$("#kirim").attr('disabled','disabled');
	    	$("#kirim_lanjut").attr('disabled','disabled');     
			
			
				  }
	     }); 
			
		
		});
	
	
	
	
});
 
 </script>



</body>

</html>
