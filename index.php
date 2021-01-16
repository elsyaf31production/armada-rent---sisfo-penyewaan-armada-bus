<?php 
session_start();
$nama_db = $_SESSION["NAMA_DB"] ;
$user_cloud = $_SESSION["KD_PENDAFTARAN"] ;
$user = $_SESSION["SES_USER"] ;
$level = $_SESSION["SES_LEVEL"] ;

if (isset($_SESSION["KD_PENDAFTARAN"])=="") 
{
	include "indexCloud.php";	
	
}else 

{
	if (isset($_SESSION["SES_USER"])=="")
	{include "pindah_user.php";	}
	else 
	{

include ("koneksi.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    
    <title>Cloud Admin Armada</title>

 

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
      <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    
    <script src="js/jquery.shortcuts.min.js"></script>
<script src="js/jquery.shortcuts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
 <link rel="shortcut icon" href="favicon.ico" />   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top " role="navigation" style="margin-bottom: 0">
          <?php include "menu_atas.php"; ?>

            <div class="navbar-default sidebar" role="navigation">
                 <?php include "menu_samping.php"; ?>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<!-- mulai awal page content -->
        <div id="page-wrapper">
        
        <div class="row">
                  <?php include "bukafile.php"; ?> 
</div>
            <!-- /.row -->
        
        </div>
        <!-- /#page-wrapper -->
 
 
    </div>
    <!-- /#wrapper -->

  <script>
  
  //short cut key 
	$.Shortcuts.add({
		type: 'down',
mask: 'F8',
handler: function() {
	confirm("a");
window.open('?page=data_pemesanan', '_self');
}
}).start();
	
  </script>
    


</body>

</html>

<?php } } ?>