<section>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-bord-2 best-news">
                    <h2>EN ÇOK OKUNAN GAZETELER</h2>
                    <ul>
                        <li><span class="count-news">1</span><a href="https://www.sozcu.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/sozcu-gazetesi.png" alt="Sözcü Gazetesi"></a></li>
                        <li><span class="count-news">2</span><a href="https://www.sabah.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/sabah-gazetesi.png" alt="Sabah Gazetesi"></a></li>
                        <li><span class="count-news">3</span><a href="https://www.hurriyet.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/hurriyet-gazetesi.png" alt="Hürriyet Gazetesi"></a></li>
                        <li><span class="count-news">4</span><a href="https://www.turkiyegazetesi.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/turkiye-gazetesi.png" alt="Türkiye Gazetesi"></a></li>
                        <li><span class="count-news">5</span><a href="https://www.milliyet.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/milliyet-gazetesi.png" alt="Milliyet Gazetesi"></a></li>
                        <li><span class="count-news">6</span><a href="https://www.aksam.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/aksam-gazetesi.png" alt="Akşam Gazetesi"></a></li>
                        <li><span class="count-news">7</span><a href="https://www.takvim.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/takvim-gazetesi.png" alt="Takvim Gazetesi"></a></li>
                        <li><span class="count-news">8</span><a href="https://www.yenisafak.com/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/yeni-safak-gazetesi.png" alt="Yeni Şafak Gazetesi"></a>
                        </li>
                        <li><span class="count-news">9</span><a href="https://www.fanatik.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/fanatik-gazetesi.png" alt="Fanatik Gazetesi"></a></li>
                        <li><span class="count-news">10</span><a href="https://www.fotomac.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/fotomac-gazetesi.png" alt="Fotomaç Gazetesi"></a></li>
                                    <li><span class="count-news">11</span><a href="https://www.yeniakit.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/yeni-akit-gazetesi.jpg" alt="Yeni Akit Gazetesi"></a></li>
                                    <li><span class="count-news">12</span><a href="https://www.cumhuriyet.com.tr/" target="_blank" rel="noopener"><img
                                     src="<?php echo base_url("assets/home");?>/img/gazete-logo/cumhuriyet-gazetesi.png" alt="Cumhuriyet Gazetesi"></a></li>
                                    <li><span class="count-news">13</span><a href="https://www.aydinlik.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/aydinlik-gazetesi.png" alt="Aydınlık Gazetesi"></a></li>
                                    <li><span class="count-news">14</span><a href="https://www.karar.com/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/karar-gazetesi.png" alt="Karar Gazetesi"></a></li>
                                    <li><span class="count-news">15</span><a href="https://www.yeniasir.com.tr/" target="_blank" rel="noopener"><img
                                    src="<?php echo base_url("assets/home");?>/img/gazete-logo/yeni-asir-gazetesi.png" alt="Yeni Asır Gazetesi"></a></li>
                    </ul>
                </div>
                <div class="col-10">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Gazetebul-Ust -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2644295701891168"
     data-ad-slot="8060412797"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

                    <div id="sehirtitle" class="row">
                    <h1 style="font-size: 1.4rem; text-align: center;"><?php echo $yerelgazetedetay->sehir_adi;?> Yerel Gazeteleri</h1>
                    </div>

                    <!--Ulusal Gazete Listesi-->
                    <div class="row">
                        <div class="col-2 col-bord-2 main-news">
                            <h2 class="all-list">YEREL GAZETELER</h2>

                            <ul>
                              <?php  
                              foreach($gazeteler as $yerel){?>
                              <li><a href="<?php echo $yerel->gazete_url;?>" target="_blank" rel="noopener"><i class="fad fa-bolt"></i> <?php echo $yerel->gazete_adi;?></a></li>
                              <?php };?>
                                  </ul>
                        </div>
                        <!--Sponsor Medya-->
                        <div class="col-5">
                        <h2 class="all-list"><?php echo mb_strtoupper($yerelgazetedetay->sehir_adi, "UTF-8");?> ŞEHRİ HAKKINDA BİLGİLER</h2>
                        <div class="row"><h3><?php echo $yerelgazetedetay->sehir_adi;?> Telefon Kodu :</h3><p>&nbsp;&nbsp;(<?php echo $yerelgazetedetay->ilce_telkod;?>)</p></div>
                        <div class="row"><h3><?php echo $yerelgazetedetay->sehir_adi;?> İl Plaka Kodu :</h3><p>&nbsp;&nbsp;(<?php echo $yerelgazetedetay->ilce_plaka;?>)</p></div>
                        <div class="row"><h3><?php echo $yerelgazetedetay->sehir_adi;?> ilçeleri :</h3><p><?php echo $yerelgazetedetay->ilceler_liste;?></p></div>
                        <div class="row"><h3><?php echo $yerelgazetedetay->sehir_adi;?> Komşu iller :</h3><p><?php echo $yerelgazetedetay->ilce_komsu;?></p></div>
                        <div class="row"><h3><?php echo $yerelgazetedetay->sehir_adi;?> Nüfus Bilgisi :</h3><p>(Adrese Dayalı Nüfus Kayıt Sistemi - 2007 Nüfus Sayımı Sonuçları)
                        <?php echo $yerelgazetedetay->ilce_nufus;?></p></div>
                        </div>
                        <div class="col-4 col-sponsor">
                            <div class="sponsor-content">
                                <h2 class="all-list">SPONSOR MEDYA</h2>
                            <p>Sponsor Link <span data-toggle="tooltip" data-placement="right" title="Sponsor Link Hakkında Fazla Bilgi Almak İçin Tıkla!"><a class="sponsor-sub" href="#">Nasıl Çalışır?</a></span></p>
                            <ul>
                            <?php  
                              foreach($sponsorhome as $sponsor){?>
                              <li><span class="sponsor"><i class="fad fa-ad"></i> SPONSOR</span><a href="#"><i class="fad fa-bolt"></i> <?php echo $sponsor->gazete_adi;?></a></li>
                              <?php };?>
                            </ul>
                            </div>
                            <!--Sponsor Medya-->
                            <!--Reklam Alanı 300x300-->
                               <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Gazetebul-Alt -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-2644295701891168"
                                     data-ad-slot="6105167448"
                                     data-ad-format="auto"
                                     data-full-width-responsive="true"></ins>
                                <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            <!--Reklam Alanı 300x300-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="city">
                    <div class="city-title">
                        <p>NEREDESİN?</p><hr>
                    </div>
                    <ul>
      
                      <?php 

                      if(isset($items)){
                        foreach($items as $item){?>
                        <li><a href="<?php echo base_url("yerel/$item->sehir_url");?>"><?php echo $item->sehir_adi;?></a></li>
                      <?php }};?>
                    </ul>
                </div>
            </div>
        </div>
    </section>