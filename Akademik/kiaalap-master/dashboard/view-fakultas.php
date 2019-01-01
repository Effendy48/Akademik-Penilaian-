<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Departments List</h4>
                            <div class="add-product">
                                <a href="?p=tambah_fakultas">Add Fakultas</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Fakultas</th>
                                        <th>Dekan</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Jumlah Mahasiswa</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php 
                                    $host = mysqli_connect("localhost","root","","sistem_akademik");
                                    $query = mysqli_query($host,"SELECT * FROM fakultas");
                                    while($arr = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $arr['kd_fakultas']; ?></td>
                                        <td><?php echo $arr['fakultas']; ?></td>
                                        <td><?php echo $arr['dekan']; ?></td>
                                        <td><?php echo $arr['email']; ?></td>
                                        <td><?php echo $arr['no_tlp']; ?></td>
                                        <td><?php echo $arr['jumlah_mahasiswa']; ?></td>
                                        <td><?php echo $arr['status']; ?></td>
                                        <td><a href="dashboard/hapus-fakultas.php?id=<?php echo $arr['kd_fakultas'] ?>"><i class="fa fa-trash"></i></a></td>
                                    </tr>   
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>