<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kullanıcı Adı</h4>
                                <form action="<?php if (isset($row)) {
                                    echo base_url("users/updatePass/$row->id");
                                } ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" pattern="[a-zA-Z0-9]+" name="user_name" disabled value="<?php if (isset($row)) {
                                            echo $row->user_name;
                                        } ?>">
                                    </div>
                                    <b class="card-title">Ad Soyad</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="full_name" value="<?php echo $row->full_name;?>" disabled>
                                    </div>
                                    <b class="card-title">E-Posta</b>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="<?php echo $row->email;?>" disabled>
                                    </div>
                                    <b class="card-title">Şifre</b>
                                    <div class="form-group">
                                        <input type="password" pattern="[a-zA-Z0-9]+" class="form-control" name="password" placeholder="Yeni Şifrenizi Giriniz">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" disabled value="1" <?php echo ($row->isActive == 1) ? "checked" : ""?>>Aktif</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" disabled value="0" <?php echo ($row->isActive == 0) ? "checked" : ""?>>Pasif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" value="submit" class="btn btn-primary mr-2">Düzenle</button>
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