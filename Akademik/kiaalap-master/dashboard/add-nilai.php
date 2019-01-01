<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Nilai</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" method="post" action="#" class="add-department">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                               <select name="nim" class="form-control">
                                                                    <option value="none" selected=""  disabled="">--Pilih Mahasiswa--</option>
                                                                    <?php 
                                                                     $host = mysqli_connect("localhost","root","","sistem_akademik");
                                                                        $query = mysqli_query($host, "SELECT * FROM mahasiswa");
                                                                    
                                                                        while($rec = mysqli_fetch_array($query)){
                                                                        ?>
                                                                        <option value="<?php echo $rec['nim'] ?>"><?php echo $rec['nim']; ?></option>
                                                                        <?php } ?>
                                                                </select>
                                                            </div>
                                                             <div class="form-group">
                                                                <select name="mata_kuliah" class="form-control">
                                                                    <option value="0" selected="" disabled="">--Pilih Mata Kuliah--</option>
                                                                    <?php 
                                                                     $host = mysqli_connect("localhost","root","","sistem_akademik");
                                                                        $query = mysqli_query($host, "SELECT * FROM mata_kuliah");
                                                                    
                                                                        while($rec = mysqli_fetch_array($query)){
                                                                        ?>
                                                                        <option value="<?php echo $rec['kd_matkul'] ?>"><?php echo $rec['matkul']; ?></option>
                                                                        <?php } ?>
                                                                </select>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <input name="ekt1" type="number" class="form-control" placeholder="Nilai EKT 1">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="ekt2" type="number" class="form-control" placeholder="Nilai EKT 2">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="uts" type="number" class="form-control" placeholder="Nilai UTS">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="uas" type="number" class="form-control" placeholder="Nilai UAS">
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
                                                        $mata_kuliah = $_POST['mata_kuliah'];
                                                        $ekt1 = $_POST['ekt1'];
                                                        $ekt2 = $_POST['ekt2'];
                                                        $uts = $_POST['uts'];
                                                        $uas = $_POST['uas'];
                                                        $input->inputnilai($mata_kuliah,$nim,$uts,$uas,$ekt1,$ekt2);
                                                    }
                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            
                        </div>
                    </div>