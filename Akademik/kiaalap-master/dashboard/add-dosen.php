<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Dosen</a></li>
                                
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
                                                                    <input name="nid" type="text" class="form-control" placeholder="Nomor Induk Dosen">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="no_hp" type="number" class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tgl_lahir" id="finish" type="date" class="form-control" placeholder="Date of Birth">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tempat_lahir" id="postcode" type="text" class="form-control" placeholder="Tempat Lahir">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                   <select name="fakultas" class="form-control">
                                                                       <option value="none" selected="" disabled="">Pilih Fakultas</option>
                                                                       <?php 
                                                                       $host = mysqli_connect("localhost","root","","sistem_akademik");
                                                                       $query = mysqli_query($host,"SELECT * FROM fakultas");
                                                                       while($arr = mysqli_fetch_array($query)){
                                                                       ?>
                                                                       <option value="<?php echo $arr['kd_fakultas'] ?>"><?php echo $arr['fakultas']; ?></option>
                                                                   <?php } ?>
                                                                   </select>
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="deskripsi" placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="jenkel" class="form-control">
																		<option value="none" selected="" disabled="">Pilih Jenis Kelamin</option>
																		<option value="Laki - Laki">Laki - Laki</option>
																		<option value="Perempuan">Perempuan</option>
																	</select>
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
                                                        $nid = $_POST['nid'];
                                                        $nama_lengkap = $_POST['nama_lengkap'];
                                                        $alamat = $_POST['alamat'];
                                                        $no_hp = $_POST['no_hp'];
                                                        $tgl_lahir = date($_POST['tgl_lahir']);
                                                        $tempat_lahir = $_POST['tempat_lahir'];
                                                        $fakultas = $_POST['fakultas'];
                                                        $deskripsi = $_POST['deskripsi'];
                                                        $jenkel = $_POST['jenkel'];

                                                        $input->inputdosen($nid,$nama_lengkap,$alamat,$tempat_lahir,$tgl_lahir,$fakultas,$jenkel,$no_hp,$deskripsi);

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

                    