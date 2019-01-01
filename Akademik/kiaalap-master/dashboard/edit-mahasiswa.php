     <?php 
        $id = $_REQUEST['id'];
        $host = mysqli_connect("localhost","root","","sistem_akademik");
        $query = mysqli_query($host,"SELECT * FROM mahasiswa");
        $arr = mysqli_fetch_array($query);
?>
     <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Data Mahasiswa</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nim" type="text" class="form-control" value="<?php echo $arr['nim'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nama" type="text" class="form-control" value="<?php echo $arr["nama"] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="alamat" type="text" class="form-control" value="<?php echo $arr["alamat"] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="no_hp" type="number" class="form-control" value="<?php echo $arr["no_hp"] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tgl_lahir" id="finish" type="text" class="form-control" value="<?php echo $arr['tempat_tgl_lahir'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="jenkel" class="form-control">
                                                                        <option value="none" selected="" disabled="">Pilih Jenis Kelamin</option>
                                                                        <option value="L">Laki - Laki</option>
                                                                        <option value="P">Perempuan</option>
                                                                    </select>
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
                                                                    <select name="prodi" class="form-control">
                                                                        <option value="none" selected="" disabled="">Pilih Program Studi</option>
                                                                        <?php 
                                                                        $host = mysqli_connect("localhost","root","","sistem_akademik");
                                                                        $query = mysqli_query($host, "SELECT * FROM prodi");
                                                                    
                                                                        while($rec = mysqli_fetch_array($query)){
                                                                        ?>
                                                                        <option value="<?php echo $rec['kd_prodi']; ?>"><?php echo $rec['prodi']; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="semester" type="text" class="form-control" value="<?php echo $arr['semester']; ?>">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input name="website" type="text" class="form-control" value="<?php echo $arr['website_url'] ?>">
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
                                                        <?php 
                                                        if(isset($_POST['simpan'])){
                                                            $nim = $_POST['nim'];
                                                            $nama = $_POST['nama'];
                                                            $semester = $_POST['semester'];
                                                            $alamat = $_POST['alamat'];
                                                            $no_hp = $_POST['no_hp'];
                                                            $tgl_lahir = $_POST['tgl_lahir'];
                                                            $website = $_POST['website'];
                                                            $prodi = $_POST['prodi'];
                                                            $fakultas = $_POST['fakultas'];
                                                            $edit->editmahasiswa($nim,$nama,$alamat,$fakultas,$prodi,$semester,$tgl_lahir,$website,$no_hp);

                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>