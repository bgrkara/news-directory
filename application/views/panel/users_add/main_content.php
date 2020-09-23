<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kullanıcı Adı</h4>
                                <form action="<?php echo base_url('users/save');?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" pattern="[a-zA-Z0-9]+" name="user_name" placeholder="Kullanıcı Adı" required>
                                    </div>
                                    <b class="card-title">Ad Soyad</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="full_name" placeholder="Ad Soyad" required>
                                    </div>
                                    <b class="card-title">E-Posta</b>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-Posta Adresi" required>
                                    </div>
                                    <b class="card-title">Şifre</b>
                                    <div class="form-group">
                                        <input type="password" pattern="[a-zA-Z0-9]+" class="form-control" name="password" placeholder="******" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" value="1" checked>Aktif</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" value="0">Pasif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" value="submit" class="btn btn-primary mr-2">Ekle</button>
                                    <a href="<?php echo base_url('users');?>" class="btn btn-light">İptal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"><div class="col-sm-0"></div></div>
            </div>
        </div>
    </div>
</div>