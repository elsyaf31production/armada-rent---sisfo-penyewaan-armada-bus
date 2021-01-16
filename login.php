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
                       
                      <h3 class="panel-title"><i class="fa fa-cloud"></i> Sign In Cloud</h3>
                    </div>
                    <div class="panel-body">
                        <form id="form_login" role="form">
                       
                                <div class="form-group input-group">
             <span class="input-group-addon"><i class="fa fa-envelope-o"></i>
                                            </span>                        <input class="form-control" placeholder="E-mail" name="email" id="email" type="email" autofocus required>
                                </div>
                            <div class="form-group input-group">
             <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                    
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="" required>
                              </div>
                              <!-- Change this to a button or input when using this as a form -->
                             <input class="btn btn-lg btn-success btn-block"  name="login" type="submit" value="Login">   
                              
                          
                        </form>
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
	
	$('#form_login').on('submit', function(e){
	
				e.preventDefault();
			
			$.ajax({
	url: "cek_login.php", 
	type: "POST",            
	data: new FormData(this), 
	contentType: false,       
	cache: false,            
	processData:false,        
	success: function(data)   
	{
		   
		   $("#pesan").html(data);
		   $("#email").val('');
		    $("#password").val('');
		   
	    	      }
	     }); 
			
		
		});
	
	
	
	
});
 
 </script>



</body>

</html>
