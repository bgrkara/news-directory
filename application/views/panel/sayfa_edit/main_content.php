<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sayfa Adı</h4>
                                <form action="<?php echo base_url("sayfalar/update/$sayfalar->id");?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sayfa_adi" value="<?php echo $sayfalar->sayfa_adi; ?>" placeholder="Sayfa Adı Giriniz" required>
                                        <input type="hidden" name="id" value="<?php echo $sayfalar->id;?>">
                                    </div>
                                    <!--Editör Alanı-->
                                    <div class="form-group">
                                    <h4 class="card-title">Sayfa İçeriği Giriniz</h4>
                                    <textarea name="sayfa_icerik" id="sayfadetay" class="form-control" placeholder="Şehir Hakkında Bilgi Giriniz."><?php echo $sayfalar->sayfa_icerik;?></textarea>
                                    <small class="text-muted">Zorunlu Değil Ancak Bilgi Önemlidir!</small>
                                    </div>
                                    <!--Editör Alanı-->
                                    <br /><h4 style="font-size: 1.60rem;" class="display-4"><i class="mdi mdi-fire icon-md text-info"></i> Sayfa SEO Ayarları</h4><br />
                                    <!--SEO Ayar Alanı-->
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Başlığı</h4>
                                        <input type="text" class="form-control" name="sayfa_title" value="<?php echo $sayfalar->sayfa_title; ?>" placeholder="Şehir SEO Başlığı Giriniz" maxlength="70">
                                        <small class="text-muted">Maksimum 70 Karakter ile Sınırlandırılmıştır.</small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Description Açıklama</h4>
                                        <textarea name="sayfa_description" class="form-control" rows="2" placeholder="Sayfa SEO Description Açıklama Giriniz" maxlength="170"><?php echo $sayfalar->sayfa_description; ?></textarea>
                                        <small class="text-muted">Maksimum 170 Karakter ile Sınırlandırılmıştır.</small>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Keywords</h4>
                                        <input type="text" class="form-control" name="sayfa_keywords" value="<?php echo $sayfalar->sayfa_keywords; ?>" placeholder="ankara gazeteleri,yerel gazeteler,gazete" value="gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,">
                                        <small class="text-muted">Anahtar Kelimelerin Aralarına " , " Virgül Koyarak Giriniz.</small>
                                    </div>

                                    <div class="form-group">
                                        <h4 class="card-title">SEO URL Düzenle</h4>
                                        <input type="text" class="form-control" name="sayfa_url" value="<?php echo $sayfalar->sayfa_url; ?>" placeholder="sayfa-url-yapisi">
                                        <small class="text-muted">SEO URL Girerken aralarına "-" işareti veya BOŞLUK bırakabilirsiniz.</small>
                                    </div>
                                     <!--SEO Ayar Alanı-->


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
                                    <button type="submit" value="submit" class="btn btn-primary mr-2">Düzenle</button>
                                    <a href="<?php echo base_url('sayfalar');?>" class="btn btn-light">İptal</a>
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