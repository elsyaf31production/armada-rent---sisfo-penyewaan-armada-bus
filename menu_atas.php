
    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistem Pengelolaan Armada Bus</a>
            </div>
            <!-- /.navbar-header -->
			
           
            <ul class="nav navbar-top-links navbar-right">
                 <?php 
			if ($level == "pemilik")
				{
			?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li >
                            <a href="#">
                                <div>
                                    <i class="fa fa-clock-o "></i> Sisa Masa Pakai
                                    <span class="pull-right text-muted small"><b>
                                    <?php 
									include "koneksiCloud.php";
									$sql_data = mysql_query("SELECT * from tb_pendaftaran where kd_pendaftaran = '$user_cloud'");
									$baca_data = mysql_fetch_assoc($sql_data);
										$date1= date("Y-m-d")  ;
									  	$date2=$baca_data['tgl_akhir'];
									  	$datetime1 = new DateTime($date1);
									  	$datetime2 = new DateTime($date2);
									  	$difference = $datetime1->diff($datetime2);       
										$masa_pakai  = $difference->days;
										
										echo "$masa_pakai"." Hari";
									 ?>
                                    </b></span>
                                </div>
                            </a>
                        </li>
                       
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="?page=perpanjangan">
                                <strong>Perpanjang</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <?php } ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                           <?php 
						if ($level == "pemilik")
							{
						?>
           				  <li><a href="pindah_user.php"><i class="fa fa-user fa-fw"></i> Pindah User</a>
                       	 </li>
                        <li><a href="?page=user"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> 
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a> 
                        </li>
						<?php } else {?>
                         <li><a href="pindah_user.php"><i class="fa fa-user fa-fw"></i> Pindah User</a>
                       	 </li>
                       	<li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a> 
                        </li>
                        
                        <?php } ?>
                       
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           