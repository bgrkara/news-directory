<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                    <div class="slide-content bg-1"> </div>
                </div>
                <div class="col-12 col-md-8 h-100 bg-white">
                    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                        <div class="nav-get-started">
                            <p>Şifrenizi mi Unuttunuz?</p>
                            <a class="btn get-started-btn" href="#">ŞİFRE GÜNCELLE</a>
                        </div>
                        <form action="<?php echo base_url("userop/do_login")?>" method="post">
                            <img src="<?php echo base_url("assets/images/bgrkara1.png")?>" alt="">
                            <br /><br />
                            <h3 class="mr-auto">Merhaba! Hoşgeldiniz</h3>
                            <p class="mb-5 mr-auto">Bilgilerinizi aşağıya girin.</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-outline"></i>
                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="user_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-lock-outline"></i>
                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Şifre" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary submit-btn">GİRİŞ YAP</button>
                            </div>
                            <div class="wrapper mt-5 text-gray">
                                <p class="footer-text">Copyright © <?php echo date("Y");?> Buğra KARA. All rights reserved.</p>
                                <ul class="auth-footer text-gray">
                                    <li>
                                        <a href="#">Şartlar ve Koşullar</a>
                                    </li>
                                    <li>
                                        <a href="#">Çerez Politikası</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>