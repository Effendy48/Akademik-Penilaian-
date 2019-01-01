 <?php
  $host = mysqli_connect("localhost","root","","sistem_akademik");
    $query = mysqli_query($host,"SELECT * FROM mahasiswa,prodi WHERE mahasiswa.kd_prodi = prodi.kd_prodi");
    while($arr = mysqli_fetch_array($query)){ ?>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="">
                                <img src="img/user.png" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2><?php echo $arr['nama']; ?></h2>
                                <p class="dp"><?php echo $arr['prodi']; ?></p>

                                <a href="?p=edit_mahasiswa&id=<?php echo $arr['nim']; ?>"><i class="fa fa-pencil"></i> Edit</a>&nbsp;&nbsp;
                                <a href="dashboard/hapus-mahasiswa.php?id=<?php echo $arr['nim']; ?>"><i class="fa fa-trash"></i> Hapus</a>
                               </div>
                        </div>
                    </div>
                <?php } ?>
                  
                  