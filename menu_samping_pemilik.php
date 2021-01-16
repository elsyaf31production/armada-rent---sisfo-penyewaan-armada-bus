                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li class="sidebar-search">
                        
                                        <div class="row ">
                                            <div class="col-xs-3">
                                               <img src="bus.png" height="75" width="75" />
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <?php include "koneksiCloud.php"; 
												$sql_PO = mysql_query("select * from tb_pendaftaran where kd_pendaftaran = '$user_cloud'");
												$read_PO = mysql_fetch_assoc($sql_PO);
												$nama_po = $read_PO['nama_perusahaan'];
												$pemilik = $read_PO['nama_pendaftar'];
												echo "
                                                <h4>$nama_po</h4>
                                                <h5>$pemilik</h5>
												";
												?>
                                            </div>
                                        </div>
                                 

                        </li>
                      <li>
                          <a href="?page="><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                             <li>
                            <a href="?page=penggajian"><i class="fa fa-pied-piper fa-fw"></i> Penggajian</a>
                            </li>
                              <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Keuangan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="index.php?page=keuangan_umum"><span class="fa  fa-book fa-fw"> </span> Keuangan Umum</a>
                                </li>
                                <li>
                                    <a href="index.php?page=keuangan_armada"><span class="fa  fa-book fa-fw"> </span> Keuangan Armada</a>
                                </li>
                                 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                               <li>
                            <a href="?page=user"><i class="fa fa-user-md fa-fw"></i> User</a>
                            </li>
                         <li>
                            <a href="#"><i class="fa fa-database fa-fw"></i> Kelola Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="index.php?page=kelola_armada"><span class="fa fa-car fa-fw"> </span> Armada</a>
                                </li>
                                <li>
                                    <a href="index.php?page=kelola_driver"><span class="fa fa-user fa-fw"> </span> Driver</a>
                                </li>
                                 <li>
                                    <a href="index.php?page=kelola_codriver"><span class="fa fa-user fa-fw"> </span> Co. Driver</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
     
 