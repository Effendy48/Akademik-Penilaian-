<?php 
      $host = mysqli_connect("localhost","root","","sistem_akademik");
    $query = mysqli_query($host,"SELECT * FROM dosen");
    while($arr = mysqli_fetch_array($query)){
?>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                               
                                <img alt="logo" class="img-circle m-b" src="img/user.png">
                                <h3><a href=""><?php echo $arr['nama_dosen']; ?></a></h3>
                                <p class="all-pro-ad"><?php echo $arr['tempat_lahir']; ?>, ID</p>
                                <p>
                                    <?php echo $arr['deskripsi']; ?>
                                </p>
                                 <a href="?p=edit_dosen&id=<?php echo $arr['nid'] ?>" ><i class="fa fa-pencil"></i> Edit</a>&nbsp;&nbsp;<a href="dashboard/hapus-dosen.php?id=<?php echo $arr['nid'] ?>"><i class="fa fa-trash"></i> Hapus</a>
                            </div>
                            <div class="panel-footer contact-footer">

                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>