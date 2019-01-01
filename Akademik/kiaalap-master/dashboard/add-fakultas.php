<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Fakultas</a></li>
                              
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
                                                                <input name="fakultas" type="text" class="form-control" placeholder="Fakultas">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="dekan" type="text" class="form-control" placeholder="Dekan Fakultas">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="email" type="email" class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="phone" type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="jumlah_mhs" type="number" class="form-control" placeholder="Jumlah Mahasiswa">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="status" type="text" class="form-control" placeholder="Status">
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
                                                        $fakultas = $_POST['fakultas'];
                                                        $dekan = $_POST['dekan'];
                                                        $email = $_POST['email'];
                                                        $phone = $_POST['phone'];
                                                        $jumlah_mhs = $_POST['jumlah_mhs'];
                                                        $status = $_POST['status'];
                                                        $input->inputfakultas($fakultas,$dekan,$email,$phone,$jumlah_mhs,$status);
                                                    }
                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            
                        </div>
                    </div>