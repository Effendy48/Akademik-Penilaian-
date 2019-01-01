   <?php 
        $id = $_REQUEST['id'];
        $host = mysqli_connect("localhost","root","","sistem_akademik");
        $query = mysqli_query($host,"SELECT * FROM mata_kuliah WHERE kd_matkul='$id'");
        $arr = mysqli_fetch_array($query);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Mata Kuliah</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form  method="post" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="id" type="text" class="form-control" readonly value="<?php echo $arr['kd_matkul'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="matakuliah" type="text" class="form-control" value="<?php echo $arr['matkul'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tgl_mulai" type="text" class="form-control" value="<?php echo $arr['matkul_tgl_mulai'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="durasi_mata_kuliah" type="text" class="form-control" value="<?php echo $arr['durasi']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="jumlah_sks" type="number" class="form-control" value="<?php echo $arr['sks'] ?>">
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                 <div class="form-group">
                                                                    <select name="fakultas" class="form-control">
                                                                        <option value="none" selected="" disabled="">Pilih Fakultas</option>
                                                                        <?php 
                                                                        $host = mysqli_connect("localhost","root","","sistem_akademik");
                                                                        $query = mysqli_query($host, "SELECT * FROM fakultas");
                                                                    
                                                                        while($rec = mysqli_fetch_array($query)){
                                                                        ?>
                                                                        <option value="<?php echo $rec['kd_fakultas']; ?>"><?php echo $rec['fakultas']; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="dosen" type="text" class="form-control" value="<?php echo $arr['dosen'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="semester" name="semester" type="text" class="form-control" value="<?php echo $arr['semester'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" name="simpan" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php 
                                                    if(isset($_POST['simpan'])){
                                                        $id = $_POST['id'];
                                                        $matakuliah = $_POST['matakuliah'];
                                                        $jumlah_sks = $_POST['jumlah_sks'];
                                                        $dosen = $_POST['dosen'];
                                                        $semester = $_POST['semester'];
                                                        $fakultas = $_POST['fakultas'];
                                                        $durasi_mata_kuliah = $_POST['durasi_mata_kuliah'];
                                                        $tgl_mulai = $_POST['tgl_mulai'];
                                                        $edit->editmatkul($id,$matakuliah,$jumlah_sks,$tgl_mulai,$durasi_mata_kuliah,$fakultas,$dosen,$semester);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>