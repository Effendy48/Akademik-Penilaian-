<?php 
    $host = mysqli_connect("localhost","root","","sistem_akademik");
    $query = mysqli_query($host,"SELECT * FROM mata_kuliah, fakultas WHERE mata_kuliah.kd_fakultas = fakultas.kd_fakultas");
    while($arr = mysqli_fetch_array($query)){
?>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img align="gravity" src="img/translate.png" alt=""></a>
                                <h2 align="center"><?php echo $arr['matkul']; ?></h2>
                            </div>
                            <div class="courses-alaltic">
                               
                               </div>
                            <div class="course-des">
                                <table class="table">
                                    <tr>
                                        <td>Dosen</td>
                                        <td><?php echo $arr['dosen']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Sks</td>
                                        <td><?php echo $arr['sks']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Semester</td>
                                        <td><?php echo $arr['semester']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Durasi</td>
                                        <td><?php echo $arr['durasi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fakultas</td>
                                        <td><?php echo $arr['fakultas']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="product-buttons">
                                <a href="?p=edit_matakuliah&id=<?php echo $arr['kd_matkul'] ?>"><button type="button" class="button-default cart-btn">Edit</button></a>&nbsp;&nbsp;
                                <a href="dashboard/hapus-matakuliah.php?id=<?php echo $arr['kd_matkul'] ?>"><button type="button" type="submit" class="btn btn-danger"> Hapus</button></a>
                            </div>
                        </div>
                    </div>
<?php } ?>