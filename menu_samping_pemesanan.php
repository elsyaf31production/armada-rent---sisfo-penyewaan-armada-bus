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
                          <a href="#"><i class="fa fa-calendar fa-fw"></i> Pemesanan <span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">
                                <li> 
                                    <a href="index.php?page=pemesanan"><span class="fa fa-car fa-fw"> </span> Pesan Armada</a>
                                </li>
                                <li>
                                    <a href="index.php?page=data_pemesanan"><span class="fa fa-user fa-fw"> </span> Data Pemesanan</a>
                                </li>
                          </ul>
                          
                        </li> 
                           <li>
                            <a href="?page=pemberangkatan"><i class="fa fa-clock-o fa-fw"></i> Pemberangkatan</a>
                            </li>
                        

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
     
 