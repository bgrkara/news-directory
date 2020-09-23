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
                    <!--ADS Content-->
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

                    <!--Ulusal Gazete Listesi-->
                    <div class="row">
                        <div class="col-2 col-bord-2 main-news">
                            <h2 class="all-list">ULUSAL GAZETELER</h2>
                            <ul>
                              <?php  
                              foreach($gazet as $gazete){?>
                              <li><a href="<?php echo $gazete->gazete_url;?>" target="_blank" rel="noopener"><i class="fad fa-bolt"></i> <?php echo $gazete->gazete_adi;?></a></li>
                              <?php };?>
                                  </ul>
                        </div>
                        <!--Spor Gazeteleri-->
                        <div class="col-2 col-sport">
                            <h2 class="all-list">SPOR GAZETELERİ</h2>
                            <ul>
                            <?php  
                              foreach($gazetspor as $gazetespor){?>
                              <li><a href="<?php echo $gazetespor->gazete_url;?>" target="_blank" rel="noopener"><i class="fad fa-bolt"></i> <?php echo $gazetespor->gazete_adi;?></a></li>
                              <?php };?>
                            </ul>
                        </div>
                        <!--Spor Gazeteleri-->
                        <!--Yabancı Kaynak-->
                        <div class="col-2 col-sport foreign">
                            <h2 class="all-list">YABANCI GAZETELER</h2>
                            <ul>
                            <?php  
                              foreach($gazetyaban as $yabancigazete){?>
                              <li><a href="<?php echo $yabancigazete->gazete_url;?>" target="_blank" rel="noopener"><i class="fad fa-bolt"></i> <?php echo $yabancigazete->gazete_adi;?></a><span class="country">(<?php echo $yabancigazete->gazete_ukle;?>)</span></li>
                              <?php };?>    
                            </ul>
                        </div>
                        <!--Yabancı Kaynak-->

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
                        foreach($items as $item){?>
                        <li><a href="<?php echo base_url("yerel/$item->sehir_url");?>"><?php echo $item->sehir_adi;?></a></li>
                      <?php };?>
                    </ul>
                </div>
            </div>
        </div>
    </section>