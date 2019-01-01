<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Nilai Mahasiswa</h4>
                            <div class="add-product">
                                <a href="?p=tambah_nilai">Add Nilai</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Mata Kuliah</th>
                                        <th>EKT 1</th>
                                        <th>UTS</th>
                                        <th>EKT 2</th>
                                        <th>UAS</th>
                                        <th>RATA - RATA</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                        <th>
                                    </tr>
                                    <?php 
                                    $host = mysqli_connect("localhost","root","","sistem_akademik");
                                    $query = mysqli_query($host,"SELECT * FROM nilai, mata_kuliah, mahasiswa WHERE mata_kuliah.kd_matkul = nilai.kd_matkul AND mahasiswa.nim = nilai.nim");
                                     $no = 1;
                                    while($arr = mysqli_fetch_array($query)){
                                        $ekt1 = $arr['ekt1'];
                                        $ekt2 = $arr['ekt2'];
                                        $uts = $arr['uts'];
                                        $uas = $arr['uas'];
                                        $ratarata = ($ekt1 + $ekt2 + $uts + $uas) / 4;
                                       
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $arr['nim']; ?></td>
                                        <td><?php echo $arr['nama']; ?></td>
                                        <td><?php echo $arr['matkul']; ?></td>
                                        <td><?php echo $arr['ekt1']; ?></td>
                                        <td><?php echo $arr['uts']; ?></td>
                                        <td><?php echo $arr['ekt2']; ?></td>
                                        <td><?php echo $arr['uas']; ?></td>
                                        <td><?php echo $ratarata; ?></td>
                                        <td><?php 
                                            if($ratarata >= 65){
                                                echo "<p style='color:green;'>Lulus</p>";
                                            }else{
                                                echo "<p style='color:red;'>Tidak Lulus</p>";
                                            }
                                        ?></td>
                                        <td><a href="dashboard/hapus-nilai.php?id=<?php echo $arr['kd_nilai'] ?>"><i class="fa fa-trash"></i></a></td>
                                    </tr>   
                                <?php $no++;} ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>