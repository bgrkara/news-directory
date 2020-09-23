<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Şehir Adı</h4>
                                <form action="<?php echo base_url("sehirler/update/$sehirler->id");?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sehir_adi" value="<?php echo $sehirler->sehir_adi; ?>" placeholder="Şehir Adı Giriniz" required>
                                        <input type="hidden" name="id" value="<?php echo $sehirler->id;?>">
                                    </div>
                                    <!--Editör Alanı-->
                                    <div class="form-group">
                                    <h4 class="card-title">Şehir Hakkında Bilgi</h4>
                                    <textarea name="sehir_aciklama" id="simpleMde" class="form-control" placeholder="Şehir Hakkında Bilgi Giriniz."><?php echo $sehirler->sehir_aciklama; ?></textarea>
                                    <small class="text-muted">Zorunlu Değil Ancak Bilgi Önemlidir!</small>
                                    </div>
                                    <!--Editör Alanı-->
                                    <br /><h4 style="font-size: 1.60rem;" class="display-4"><i class="mdi mdi-fire icon-md text-info"></i> Şehir SEO Ayarları</h4><br />
                                    <!--SEO Ayar Alanı-->
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Başlığı</h4>
                                        <input type="text" class="form-control" name="sehir_title" value="<?php echo $sehirler->sehir_title; ?>" placeholder="Şehir SEO Başlığı Giriniz" maxlength="70">
                                        <small class="text-muted">Maksimum 70 Karakter ile Sınırlandırılmıştır.</small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Description Açıklama</h4>
                                        <textarea name="sehir_description" class="form-control" rows="2" placeholder="Şehir SEO Description Açıklama Giriniz" maxlength="170"><?php echo $sehirler->sehir_description; ?></textarea>
                                        <small class="text-muted">Maksimum 170 Karakter ile Sınırlandırılmıştır.</small>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">SEO Keywords</h4>
                                        <input type="text" class="form-control" name="sehir_keywords" value="<?php echo $sehirler->sehir_keywords; ?>" placeholder="ankara gazeteleri,yerel gazeteler,gazete" value="gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,">
                                        <small class="text-muted">Anahtar Kelimelerin Aralarına " , " Virgül Koyarak Giriniz.</small>
                                    </div>

                                    <div class="form-group">
                                        <h4 class="card-title">SEO URL Düzenle</h4>
                                        <input type="text" class="form-control" name="sehir_url" value="<?php echo $sehirler->sehir_url; ?>" placeholder="sehir-yerel-gazeteleri">
                                        <small class="text-muted">SEO URL Girerken aralarına "-" işareti veya BOŞLUK bırakabilirsiniz.</small>
                                    </div>
                                     <!--SEO Ayar Alanı-->

                                     <!--İlçe Bilgileri-->
                                     <br /><h4 style="font-size: 1.60rem;" class="display-4"><i class="mdi mdi-fire icon-md text-info"></i> İl Detay Bilgileri</h4><br />
                                    <div class="form-group">
                                        <h4 class="card-title">Telefon Kodu</h4>
                                        <input type="text" class="form-control" name="ilce_telkod" value="<?php echo $sehirler->ilce_telkod; ?>" placeholder="Telefon Kodunu Giriniz." maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">Plaka Kodu</h4>
                                        <input type="text" class="form-control" name="ilce_plaka" value="<?php echo $sehirler->ilce_plaka; ?>" placeholder="Plaka Kodunu Giriniz." maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">İlçeler Listesi</h4>
                                        <input type="text" class="form-control" name="ilceler_liste" value="<?php echo $sehirler->ilceler_liste; ?>" placeholder="İlçeleri aralarına virgül koyarak giriniz : Altındağ, Keçiören, Çankaya...">
                                        <small class="text-muted">NOT: İlçeleri aralarına "," Virgül Koyarak Giriniz.</small>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">Komşu (Sınır) İl Listesi</h4>
                                        <input type="text" class="form-control" name="ilce_komsu" value="<?php echo $sehirler->ilce_komsu; ?>" placeholder="Komşu İllerin aralarına virgül koyarak giriniz : Çankırı, Bolu, Eskişehir...">
                                        <small class="text-muted">NOT: Komşu İllerin aralarına "," Virgül Koyarak Giriniz.</small>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="card-title">İL Nüfus Bilgisi</h4>
                                        <input type="text" class="form-control" name="ilce_nufus" value="<?php echo $sehirler->ilce_nufus; ?>" placeholder="(Adrese Dayalı Nüfus Kayıt Sistemi - 2007 Nüfus Sayımı Sonuçları) Ankara'nın nüfusu 4.466.756'dır.">
                                        <small class="text-muted">NOT: Örnekteki Gibi Konuşma Diliyle Nufüs Bilgisini Girebilirsniz.</small>
                                    </div>
                                    <!--İlçe Bilgileri-->

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
                                    <a href="<?php echo base_url('sehirler');?>" class="btn btn-light">İptal</a>
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