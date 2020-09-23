<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Genel Ayarlar</h4><br />
                                <h4 class="card-title">Anasayfa Description</h4>
                                <form action="<?php echo base_url("genel-ayarlar/update");?>" method="post">
                                    <br /><h4 style="font-size: 1.60rem;" class="display-4"><i class="mdi mdi-fire icon-md text-info"></i> Şehir SEO Ayarları</h4><br />

                                    <!--SEO Ayar Alanı-->
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Başlığı</h4>
                                        <input type="text" class="form-control" name="home_title" value="<?php echo $generalsettings->home_title; ?>" placeholder="Anasayfa SEO Başlığı Giriniz" maxlength="70">
                                        <small class="text-muted">Maksimum 70 Karakter ile Sınırlandırılmıştır.</small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Description Açıklama</h4>
                                        <textarea name="home_description" class="form-control" rows="2" placeholder="Şehir SEO Description Açıklama Giriniz" maxlength="170"><?php echo $generalsettings->home_description; ?></textarea>
                                        <small class="text-muted">Maksimum 170 Karakter ile Sınırlandırılmıştır.</small>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Keywords</h4>
                                        <input type="text" class="form-control" name="home_keywords" value="<?php echo $generalsettings->home_keywords; ?>" placeholder="ankara gazeteleri,yerel gazeteler,gazete" value="gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,">
                                        <small class="text-muted">Anahtar Kelimelerin Aralarına " , " Virgül Koyarak Giriniz.</small>
                                    </div>

                                    <!--Editör Alanı-->
                                    <div class="form-group">
                                    <h4 class="card-title">Footer Açıklama 1. Bölüm</h4>
                                    <textarea name="home_accordion1" disabled="" id="simpleMde" class="form-control" placeholder="Site Hakkında Bilgi Giriniz."><?php echo $generalsettings->home_accordion1; ?></textarea>
                                    <small class="text-muted">Zorunlu Değil Ancak Bilgi Önemlidir!</small><br />
                                    <h4 class="card-title">Footer Açıklama 2. Bölüm</h4>
                                    <textarea name="home_accordion2" disabled="" id="simpleMde" class="form-control" placeholder="Site Hakkında Bilgi Giriniz."><?php echo $generalsettings->home_accordion2; ?></textarea>
                                    <small class="text-muted">Zorunlu Değil Ancak Bilgi Önemlidir!</small>
                                    </div>
                                    <!--Editör Alanı-->
                                     <!--SEO Ayar Alanı-->
                                    <button type="submit" value="submit" class="btn btn-primary mr-2">Düzenle</button>
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