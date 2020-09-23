<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tedarikçi Ekle</h4>
                                <form action="<?php echo base_url('supplier/save');?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" placeholder="Tedarikçi Adı Giriniz" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" name="address" placeholder="Adres Giriniz" required></textarea>
                                    </div>
                                    <b class="card-title">Telefon</b>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" placeholder="Telefon Numarası Giriniz" required>
                                    </div>
                                    <b class="card-title">E-Posta</b>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-Posta Adresi Giriniz" required>
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
                                    <a href="<?php echo base_url('supplier');?>" class="btn btn-light">İptal</a>
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