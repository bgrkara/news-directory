<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url("gazeteler/update/$row->id");?>" method="post">
                                <h4 style="font-size: 1.60rem;" class="display-4"><i class="mdi mdi-fire icon-md text-success"></i> Gazete Ayarları</h4><br />
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        <label for="fname">Gazete Adı</label><br>
                                        <input type="text" class="form-control" name="gazete_adi" value="<?php echo $row->gazete_adi;?>" placeholder="Gazete Adı Giriniz" required>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                        <label for="fname">Gazete Kategorisi</label><br>
                                        <select id="gazete_kategori" name="gazete_kategori" class="form-control form-control-sm">
                                            <option <?php echo ($row->gazete_kategori == "ulusal_gazeteler") ? "selected" : ""?> value="ulusal_gazeteler">Ulusal Gazeteler</option>
                                            <option <?php echo ($row->gazete_kategori == "spor_gazeteleri") ? "selected" : ""?> value="spor_gazeteleri">Spor Gazeteleri</option>
                                            <option <?php echo ($row->gazete_kategori == "yerel_gazeteler") ? "selected" : ""?> value="yerel_gazeteler">Yerel Gazeteler</option>
                                            <option <?php echo ($row->gazete_kategori == "yabanci_gazeteler") ? "selected" : ""?> value="yabanci_gazeteler">Yabancı Gazeteler</option>
                                            <option <?php echo ($row->gazete_kategori == "ekonomi_gazeteleri") ? "selected" : ""?> value="ekonomi_gazeteleri">Ekonomi Gazeteleri</option>
                                            <option <?php echo ($row->gazete_kategori == "sosyal_siteler") ? "selected" : ""?> value="sosyal_siteler">Sosyal Siteler</option>
                                            <option <?php echo ($row->gazete_kategori == "standart_web_siteler") ? "selected" : ""?> value="standart_web_siteler">Standart Web Siteler</option>
                                            <option <?php echo ($row->gazete_kategori == "televizyon") ? "selected" : ""?> value="televizyon">Televizyon</option>
                                            <option <?php echo ($row->gazete_kategori == "radyo") ? "selected" : ""?> value="radyo">Radyo</option>
                                            <option <?php echo ($row->gazete_kategori == "dergiler") ? "selected" : ""?> value="dergiler">Dergiler</option>
                                            <option <?php echo ($row->gazete_kategori == "sponsor_medya") ? "selected" : ""?> value="sponsor_medya" style="color:#ffc168; background-color: #13183E;">Sponsor Medya</option>
                                        </select>
                                        </div>

                                        <div class="col-sm-4">
                                        <label for="fname">Gazete Şehir</label><br>
                                        <select id="gazete_sehir" name="gazete_sehir" class="form-control form-control-sm">
                                            <option <?php echo ($row->gazete_sehir == "sehir_none") ? "selected" : ""?> value="sehir_none">--Şehir Seçiniz--</option>
                                            <option <?php echo ($row->gazete_sehir == "adana") ? "selected" : ""?> value="adana">Adana</option>
                                            <option <?php echo ($row->gazete_sehir == "adiyaman") ? "selected" : ""?> value="adiyaman">Adıyaman</option>
                                            <option <?php echo ($row->gazete_sehir == "afyon") ? "selected" : ""?> value="afyon">Afyon</option>
                                            <option <?php echo ($row->gazete_sehir == "agri") ? "selected" : ""?> value="agri">Ağrı</option>
                                            <option <?php echo ($row->gazete_sehir == "aksaray") ? "selected" : ""?> value="aksaray">Aksaray</option>
                                            <option <?php echo ($row->gazete_sehir == "amasya") ? "selected" : ""?> value="amasya">Amasya</option>
                                            <option <?php echo ($row->gazete_sehir == "ankara") ? "selected" : ""?> value="ankara">Ankara</option>
                                            <option <?php echo ($row->gazete_sehir == "antalya") ? "selected" : ""?> value="antalya">Antalya</option>
                                            <option <?php echo ($row->gazete_sehir == "ardahan") ? "selected" : ""?> value="ardahan">Ardahan</option>
                                            <option <?php echo ($row->gazete_sehir == "artvin") ? "selected" : ""?> value="artvin">Artvin</option>
                                            <option <?php echo ($row->gazete_sehir == "aydin") ? "selected" : ""?> value="aydin">Aydın</option>
                                            <option <?php echo ($row->gazete_sehir == "balikesir") ? "selected" : ""?> value="balikesir">Balıkesir</option>
                                            <option <?php echo ($row->gazete_sehir == "bartin") ? "selected" : ""?> value="bartin">Bartın</option>
                                            <option <?php echo ($row->gazete_sehir == "batman") ? "selected" : ""?> value="batman">Batman</option>
                                            <option <?php echo ($row->gazete_sehir == "bayburt") ? "selected" : ""?> value="bayburt">Bayburt</option>
                                            <option <?php echo ($row->gazete_sehir == "bilecik") ? "selected" : ""?> value="bilecik">Bilecik</option>
                                            <option <?php echo ($row->gazete_sehir == "bingol") ? "selected" : ""?> value="bingol">Bingöl</option>
                                            <option <?php echo ($row->gazete_sehir == "bitlis") ? "selected" : ""?> value="bitlis">Bitlis</option>
                                            <option <?php echo ($row->gazete_sehir == "bolu") ? "selected" : ""?> value="bolu">Bolu</option>
                                            <option <?php echo ($row->gazete_sehir == "burdur") ? "selected" : ""?> value="burdur">Burdur</option>
                                            <option <?php echo ($row->gazete_sehir == "bursa") ? "selected" : ""?> value="bursa">Bursa</option>
                                            <option <?php echo ($row->gazete_sehir == "canakkale") ? "selected" : ""?> value="canakkale">Çanakkale</option>
                                            <option <?php echo ($row->gazete_sehir == "cankiri") ? "selected" : ""?> value="cankiri">Çankırı</option>
                                            <option <?php echo ($row->gazete_sehir == "corum") ? "selected" : ""?> value="corum">Çorum</option>
                                            <option <?php echo ($row->gazete_sehir == "denizli") ? "selected" : ""?> value="denizli">Denizli</option>
                                            <option <?php echo ($row->gazete_sehir == "diyarbakir") ? "selected" : ""?> value="diyarbakir">Diyarbakır</option>
                                            <option <?php echo ($row->gazete_sehir == "duzce") ? "selected" : ""?> value="duzce">Düzce</option>
                                            <option <?php echo ($row->gazete_sehir == "edirne") ? "selected" : ""?> value="edirne">Edirne</option>
                                            <option <?php echo ($row->gazete_sehir == "elazig") ? "selected" : ""?> value="elazig">Elazığ</option>
                                            <option <?php echo ($row->gazete_sehir == "erzincan") ? "selected" : ""?> value="erzincan">Erzincan</option>
                                            <option <?php echo ($row->gazete_sehir == "erzurum") ? "selected" : ""?> value="erzurum">Erzurum</option>
                                            <option <?php echo ($row->gazete_sehir == "eskisehir") ? "selected" : ""?> value="eskisehir">Eskişehir</option>
                                            <option <?php echo ($row->gazete_sehir == "gaziantep") ? "selected" : ""?> value="gaziantep">Gaziantep</option>
                                            <option <?php echo ($row->gazete_sehir == "giresun") ? "selected" : ""?> value="giresun">Giresun</option>
                                            <option <?php echo ($row->gazete_sehir == "gumushane") ? "selected" : ""?> value="gumushane">Gümüşhane</option>
                                            <option <?php echo ($row->gazete_sehir == "hakkari") ? "selected" : ""?> value="hakkari">Hakkari</option>
                                            <option <?php echo ($row->gazete_sehir == "hatay") ? "selected" : ""?> value="hatay">Hatay</option>
                                            <option <?php echo ($row->gazete_sehir == "igdir") ? "selected" : ""?> value="igdir">Iğdır</option>
                                            <option <?php echo ($row->gazete_sehir == "isparta") ? "selected" : ""?> value="isparta">Isparta</option>
                                            <option <?php echo ($row->gazete_sehir == "istanbul") ? "selected" : ""?> value="istanbul">İstanbul</option>
                                            <option <?php echo ($row->gazete_sehir == "izmir") ? "selected" : ""?> value="izmir">izmir</option>
                                            <option <?php echo ($row->gazete_sehir == "karabuk") ? "selected" : ""?> value="karabuk">Karabük</option>
                                            <option <?php echo ($row->gazete_sehir == "karaman") ? "selected" : ""?> value="karaman">Karaman</option>
                                            <option <?php echo ($row->gazete_sehir == "kars") ? "selected" : ""?> value="kars">Kars</option>
                                            <option <?php echo ($row->gazete_sehir == "kastamonu") ? "selected" : ""?> value="kastamonu">Kastamonu</option>
                                            <option <?php echo ($row->gazete_sehir == "kayseri") ? "selected" : ""?> value="kayseri">Kayseri</option>
                                            <option <?php echo ($row->gazete_sehir == "kilis") ? "selected" : ""?> value="kilis">Kilis</option>
                                            <option <?php echo ($row->gazete_sehir == "kirklareli") ? "selected" : ""?> value="kirklareli">Kırklareli</option>
                                            <option <?php echo ($row->gazete_sehir == "kirikkale") ? "selected" : ""?> value="kirikkale">Kırıkkale</option>
                                            <option <?php echo ($row->gazete_sehir == "kirsehir") ? "selected" : ""?> value="kirsehir">Kırşehir</option>
                                            <option <?php echo ($row->gazete_sehir == "kocaeli") ? "selected" : ""?> value="kocaeli">Kocaeli</option>
                                            <option <?php echo ($row->gazete_sehir == "konya") ? "selected" : ""?> value="konya">Konya</option>
                                            <option <?php echo ($row->gazete_sehir == "kutahya") ? "selected" : ""?> value="kutahya">Kütahya</option>
                                            <option <?php echo ($row->gazete_sehir == "malatya") ? "selected" : ""?> value="malatya">Malatya</option>
                                            <option <?php echo ($row->gazete_sehir == "manisa") ? "selected" : ""?> value="manisa">Manisa</option>
                                            <option <?php echo ($row->gazete_sehir == "kahramanmaras") ? "selected" : ""?> value="kahramanmaras">Kahramanmaraş</option>
                                            <option <?php echo ($row->gazete_sehir == "mardin") ? "selected" : ""?> value="mardin">Mardin</option>
                                            <option <?php echo ($row->gazete_sehir == "mugla") ? "selected" : ""?> value="mugla">Muğla</option>
                                            <option <?php echo ($row->gazete_sehir == "mus") ? "selected" : ""?> value="mus">Muş</option>
                                            <option <?php echo ($row->gazete_sehir == "nevsehir") ? "selected" : ""?> value="nevsehir">Nevşehir</option>
                                            <option <?php echo ($row->gazete_sehir == "nigde") ? "selected" : ""?> value="nigde">Niğde</option>
                                            <option <?php echo ($row->gazete_sehir == "ordu") ? "selected" : ""?> value="ordu">Ordu</option>
                                            <option <?php echo ($row->gazete_sehir == "osmaniye") ? "selected" : ""?> value="osmaniye">Osmaniye</option>
                                            <option <?php echo ($row->gazete_sehir == "rize") ? "selected" : ""?> value="rize">Rize</option>
                                            <option <?php echo ($row->gazete_sehir == "sakarya") ? "selected" : ""?> value="sakarya">Sakarya</option>
                                            <option <?php echo ($row->gazete_sehir == "samsun") ? "selected" : ""?> value="samsun">Samsun</option>
                                            <option <?php echo ($row->gazete_sehir == "siirt") ? "selected" : ""?> value="siirt">Siirt</option>
                                            <option <?php echo ($row->gazete_sehir == "sinop") ? "selected" : ""?> value="sinop">Sinop</option>
                                            <option <?php echo ($row->gazete_sehir == "sivas") ? "selected" : ""?> value="sivas">Sivas</option>
                                            <option <?php echo ($row->gazete_sehir == "sirnak") ? "selected" : ""?> value="sirnak">Şırnak</option>
                                            <option <?php echo ($row->gazete_sehir == "tekirdag") ? "selected" : ""?> value="tekirdag">Tekirdağ</option>
                                            <option <?php echo ($row->gazete_sehir == "tokat") ? "selected" : ""?> value="tokat">Tokat</option>
                                            <option <?php echo ($row->gazete_sehir == "trabzon") ? "selected" : ""?> value="trabzon">Trabzon</option>
                                            <option <?php echo ($row->gazete_sehir == "tunceli") ? "selected" : ""?> value="tunceli">Tunceli</option>
                                            <option <?php echo ($row->gazete_sehir == "sanliurfa") ? "selected" : ""?> value="sanliurfa">Şanlıurfa</option>
                                            <option <?php echo ($row->gazete_sehir == "sirnak") ? "selected" : ""?> value="sirnak">Şırnak</option>
                                            <option <?php echo ($row->gazete_sehir == "usak") ? "selected" : ""?> value="usak">Uşak</option>
                                            <option <?php echo ($row->gazete_sehir == "van") ? "selected" : ""?> value="van">Van</option>
                                            <option <?php echo ($row->gazete_sehir == "yalova") ? "selected" : ""?> value="yalova">Yalova</option>
                                            <option <?php echo ($row->gazete_sehir == "yozgat") ? "selected" : ""?> value="yozgat">Yozgat</option>
                                            <option <?php echo ($row->gazete_sehir == "zonguldak") ? "selected" : ""?> value="zonguldak">Zonguldak</option>
                                        </select>
                                        <small class="text-muted">Sadece Yerel Gazetelerde Şehir Seçimi Yapabilirsiniz.</small>
                                        </div>

                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                        <label for="fname">Gazete URL Adresi</label><br>
                                        <input type="text" class="form-control" name="gazete_url" value="<?php echo $row->gazete_url;?>" placeholder="https://gazeteurladresi.com" required>
                                        </div>

                                        <div class="col-sm-4">
                                        <label for="fname">Gazete Ülke</label><br>
                                        <select id="gazete_ukle" name="gazete_ukle" class="form-control form-control-sm">
                                            <option value="AFG" <?php echo ($row->gazete_ukle == "AFG") ? "selected" : ""?>>Afghanistan</option>
                                            <option <?php echo ($row->gazete_ukle == "ALA") ? "selected" : ""?> value="ALA" >Aland Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "ALB") ? "selected" : ""?> value="ALB">Albania</option>
                                            <option <?php echo ($row->gazete_ukle == "DZA") ? "selected" : ""?> value="DZA">Algeria</option>
                                            <option <?php echo ($row->gazete_ukle == "ASM") ? "selected" : ""?> value="ASM">American Samoa</option>
                                            <option <?php echo ($row->gazete_ukle == "ANDO") ? "selected" : ""?> value="ANDO">Andorra</option>
                                            <option <?php echo ($row->gazete_ukle == "AGO") ? "selected" : ""?> value="AGO">Angola</option>
                                            <option <?php echo ($row->gazete_ukle == "AIA") ? "selected" : ""?> value="AIA">Anguilla</option>
                                            <option <?php echo ($row->gazete_ukle == "ATA") ? "selected" : ""?> value="ATA">Antarctica</option>
                                            <option <?php echo ($row->gazete_ukle == "ATG") ? "selected" : ""?> value="ATG">Antigua and Barbuda</option>
                                            <option <?php echo ($row->gazete_ukle == "ARG") ? "selected" : ""?> value="ARG">Argentina</option>
                                            <option <?php echo ($row->gazete_ukle == "ARM") ? "selected" : ""?> value="ARM">Armenia</option>
                                            <option <?php echo ($row->gazete_ukle == "ABW") ? "selected" : ""?> value="ABW">Aruba</option>
                                            <option <?php echo ($row->gazete_ukle == "AUS") ? "selected" : ""?> value="AUS">Australia</option>
                                            <option <?php echo ($row->gazete_ukle == "AUT") ? "selected" : ""?> value="AUT">Austria</option>
                                            <option <?php echo ($row->gazete_ukle == "AZE") ? "selected" : ""?> value="AZE">Azerbaijan</option>
                                            <option <?php echo ($row->gazete_ukle == "BHS") ? "selected" : ""?> value="BHS">Bahamas</option>
                                            <option <?php echo ($row->gazete_ukle == "BHR") ? "selected" : ""?> value="BHR">Bahrain</option>
                                            <option <?php echo ($row->gazete_ukle == "BGD") ? "selected" : ""?> value="BGD">Bangladesh</option>
                                            <option <?php echo ($row->gazete_ukle == "BRB") ? "selected" : ""?> value="BRB">Barbados</option>
                                            <option <?php echo ($row->gazete_ukle == "BLR") ? "selected" : ""?> value="BLR">Belarus</option>
                                            <option <?php echo ($row->gazete_ukle == "BEL") ? "selected" : ""?> value="BEL">Belgium</option>
                                            <option <?php echo ($row->gazete_ukle == "BLZ") ? "selected" : ""?> value="BLZ">Belize</option>
                                            <option <?php echo ($row->gazete_ukle == "BEN") ? "selected" : ""?> value="BEN">Benin</option>
                                            <option <?php echo ($row->gazete_ukle == "BMU") ? "selected" : ""?> value="BMU">Bermuda</option>
                                            <option <?php echo ($row->gazete_ukle == "BTN") ? "selected" : ""?> value="BTN">Bhutan</option>
                                            <option <?php echo ($row->gazete_ukle == "BOL") ? "selected" : ""?> value="BOL">Bolivia, Plurinational State of</option>
                                            <option <?php echo ($row->gazete_ukle == "BES") ? "selected" : ""?> value="BES">Bonaire, Sint Eustatius and Saba</option>
                                            <option <?php echo ($row->gazete_ukle == "BIH") ? "selected" : ""?> value="BIH">Bosnia and Herzegovina</option>
                                            <option <?php echo ($row->gazete_ukle == "BWA") ? "selected" : ""?> value="BWA">Botswana</option>
                                            <option <?php echo ($row->gazete_ukle == "BVT") ? "selected" : ""?> value="BVT">Bouvet Island</option>
                                            <option <?php echo ($row->gazete_ukle == "BRA") ? "selected" : ""?> value="BRA">Brazil</option>
                                            <option <?php echo ($row->gazete_ukle == "IOT") ? "selected" : ""?> value="IOT">British Indian Ocean Territory</option>
                                            <option <?php echo ($row->gazete_ukle == "BRN") ? "selected" : ""?> value="BRN">Brunei Darussalam</option>
                                            <option <?php echo ($row->gazete_ukle == "BGR") ? "selected" : ""?> value="BGR">Bulgaria</option>
                                            <option <?php echo ($row->gazete_ukle == "BFA") ? "selected" : ""?> value="BFA">Burkina Faso</option>
                                            <option <?php echo ($row->gazete_ukle == "BDI") ? "selected" : ""?> value="BDI">Burundi</option>
                                            <option <?php echo ($row->gazete_ukle == "KHM") ? "selected" : ""?> value="KHM">Cambodia</option>
                                            <option <?php echo ($row->gazete_ukle == "CMR") ? "selected" : ""?> value="CMR">Cameroon</option>
                                            <option <?php echo ($row->gazete_ukle == "CAN") ? "selected" : ""?> value="CAN">Canada</option>
                                            <option <?php echo ($row->gazete_ukle == "CPV") ? "selected" : ""?> value="CPV">Cape Verde</option>
                                            <option <?php echo ($row->gazete_ukle == "CYM") ? "selected" : ""?> value="CYM">Cayman Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "CAF") ? "selected" : ""?> value="CAF">Central African Republic</option>
                                            <option <?php echo ($row->gazete_ukle == "TCD") ? "selected" : ""?> value="TCD">Chad</option>
                                            <option <?php echo ($row->gazete_ukle == "CHL") ? "selected" : ""?> value="CHL">Chile</option>
                                            <option <?php echo ($row->gazete_ukle == "CHN") ? "selected" : ""?> value="CHN">China</option>
                                            <option <?php echo ($row->gazete_ukle == "CXR") ? "selected" : ""?> value="CXR">Christmas Island</option>
                                            <option <?php echo ($row->gazete_ukle == "CCK") ? "selected" : ""?> value="CCK">Cocos (Keeling) Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "COL") ? "selected" : ""?> value="COL">Colombia</option>
                                            <option <?php echo ($row->gazete_ukle == "COM") ? "selected" : ""?> value="COM">Comoros</option>
                                            <option <?php echo ($row->gazete_ukle == "COG") ? "selected" : ""?> value="COG">Congo</option>
                                            <option <?php echo ($row->gazete_ukle == "COD") ? "selected" : ""?> value="COD">Congo, the Democratic Republic of the</option>
                                            <option <?php echo ($row->gazete_ukle == "COK") ? "selected" : ""?> value="COK">Cook Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "CRI") ? "selected" : ""?> value="CRI">Costa Rica</option>
                                            <option <?php echo ($row->gazete_ukle == "CIV") ? "selected" : ""?> value="CIV">Côte d'Ivoire</option>
                                            <option <?php echo ($row->gazete_ukle == "HRV") ? "selected" : ""?> value="HRV">Croatia</option>
                                            <option <?php echo ($row->gazete_ukle == "CUB") ? "selected" : ""?> value="CUB">Cuba</option>
                                            <option <?php echo ($row->gazete_ukle == "CUW") ? "selected" : ""?> value="CUW">Curaçao</option>
                                            <option <?php echo ($row->gazete_ukle == "CYP") ? "selected" : ""?> value="CYP">Cyprus</option>
                                            <option <?php echo ($row->gazete_ukle == "CZE") ? "selected" : ""?> value="CZE">Czech Republic</option>
                                            <option <?php echo ($row->gazete_ukle == "DNK") ? "selected" : ""?> value="DNK">Denmark</option>
                                            <option <?php echo ($row->gazete_ukle == "DJI") ? "selected" : ""?> value="DJI">Djibouti</option>
                                            <option <?php echo ($row->gazete_ukle == "DMA") ? "selected" : ""?> value="DMA">Dominica</option>
                                            <option <?php echo ($row->gazete_ukle == "DOM") ? "selected" : ""?> value="DOM">Dominican Republic</option>
                                            <option <?php echo ($row->gazete_ukle == "ECU") ? "selected" : ""?> value="ECU">Ecuador</option>
                                            <option <?php echo ($row->gazete_ukle == "EGY") ? "selected" : ""?> value="EGY">Egypt</option>
                                            <option <?php echo ($row->gazete_ukle == "SLV") ? "selected" : ""?> value="SLV">El Salvador</option>
                                            <option <?php echo ($row->gazete_ukle == "GNQ") ? "selected" : ""?> value="GNQ">Equatorial Guinea</option>
                                            <option <?php echo ($row->gazete_ukle == "ERI") ? "selected" : ""?> value="ERI">Eritrea</option>
                                            <option <?php echo ($row->gazete_ukle == "EST") ? "selected" : ""?> value="EST">Estonia</option>
                                            <option <?php echo ($row->gazete_ukle == "ETH") ? "selected" : ""?> value="ETH">Ethiopia</option>
                                            <option <?php echo ($row->gazete_ukle == "FLK") ? "selected" : ""?> value="FLK">Falkland Islands (Malvinas)</option>
                                            <option <?php echo ($row->gazete_ukle == "FRO") ? "selected" : ""?> value="FRO">Faroe Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "FJI") ? "selected" : ""?> value="FJI">Fiji</option>
                                            <option <?php echo ($row->gazete_ukle == "FIN") ? "selected" : ""?> value="FIN">Finland</option>
                                            <option <?php echo ($row->gazete_ukle == "FRA") ? "selected" : ""?> value="FRA">France</option>
                                            <option <?php echo ($row->gazete_ukle == "GUF") ? "selected" : ""?> value="GUF">French Guiana</option>
                                            <option <?php echo ($row->gazete_ukle == "PYF") ? "selected" : ""?> value="PYF">French Polynesia</option>
                                            <option <?php echo ($row->gazete_ukle == "ATF") ? "selected" : ""?> value="ATF">French Southern Territories</option>
                                            <option <?php echo ($row->gazete_ukle == "GAB") ? "selected" : ""?> value="GAB">Gabon</option>
                                            <option <?php echo ($row->gazete_ukle == "GMB") ? "selected" : ""?> value="GMB">Gambia</option>
                                            <option <?php echo ($row->gazete_ukle == "GEO") ? "selected" : ""?> value="GEO">Georgia</option>
                                            <option <?php echo ($row->gazete_ukle == "DEU") ? "selected" : ""?> value="DEU">Germany</option>
                                            <option <?php echo ($row->gazete_ukle == "GHA") ? "selected" : ""?> value="GHA">Ghana</option>
                                            <option <?php echo ($row->gazete_ukle == "GIB") ? "selected" : ""?> value="GIB">Gibraltar</option>
                                            <option <?php echo ($row->gazete_ukle == "GRC") ? "selected" : ""?> value="GRC">Greece</option>
                                            <option <?php echo ($row->gazete_ukle == "GRL") ? "selected" : ""?> value="GRL">Greenland</option>
                                            <option <?php echo ($row->gazete_ukle == "GRD") ? "selected" : ""?> value="GRD">Grenada</option>
                                            <option <?php echo ($row->gazete_ukle == "GLP") ? "selected" : ""?> value="GLP">Guadeloupe</option>
                                            <option <?php echo ($row->gazete_ukle == "GUM") ? "selected" : ""?> value="GUM">Guam</option>
                                            <option <?php echo ($row->gazete_ukle == "GTM") ? "selected" : ""?> value="GTM">Guatemala</option>
                                            <option <?php echo ($row->gazete_ukle == "GGY") ? "selected" : ""?> value="GGY">Guernsey</option>
                                            <option <?php echo ($row->gazete_ukle == "GIN") ? "selected" : ""?> value="GIN">Guinea</option>
                                            <option <?php echo ($row->gazete_ukle == "GNB") ? "selected" : ""?> value="GNB">Guinea-Bissau</option>
                                            <option <?php echo ($row->gazete_ukle == "GUY") ? "selected" : ""?> value="GUY">Guyana</option>
                                            <option <?php echo ($row->gazete_ukle == "HTI") ? "selected" : ""?> value="HTI">Haiti</option>
                                            <option <?php echo ($row->gazete_ukle == "HMD") ? "selected" : ""?> value="HMD">Heard Island and McDonald Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "VAT") ? "selected" : ""?> value="VAT">Holy See (Vatican City State)</option>
                                            <option <?php echo ($row->gazete_ukle == "HND") ? "selected" : ""?> value="HND">Honduras</option>
                                            <option <?php echo ($row->gazete_ukle == "HKG") ? "selected" : ""?> value="HKG">Hong Kong</option>
                                            <option <?php echo ($row->gazete_ukle == "HUN") ? "selected" : ""?> value="HUN">Hungary</option>
                                            <option <?php echo ($row->gazete_ukle == "ISL") ? "selected" : ""?> value="ISL">Iceland</option>
                                            <option <?php echo ($row->gazete_ukle == "IND") ? "selected" : ""?> value="IND">India</option>
                                            <option <?php echo ($row->gazete_ukle == "IDN") ? "selected" : ""?> value="IDN">Indonesia</option>
                                            <option <?php echo ($row->gazete_ukle == "IRN") ? "selected" : ""?> value="IRN">Iran, Islamic Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "IRQ") ? "selected" : ""?> value="IRQ">Iraq</option>
                                            <option <?php echo ($row->gazete_ukle == "IRL") ? "selected" : ""?> value="IRL">Ireland</option>
                                            <option <?php echo ($row->gazete_ukle == "IMN") ? "selected" : ""?> value="IMN">Isle of Man</option>
                                            <option <?php echo ($row->gazete_ukle == "ISR") ? "selected" : ""?> value="ISR">Israel</option>
                                            <option <?php echo ($row->gazete_ukle == "ITA") ? "selected" : ""?> value="ITA">Italy</option>
                                            <option <?php echo ($row->gazete_ukle == "JAM") ? "selected" : ""?> value="JAM">Jamaica</option>
                                            <option <?php echo ($row->gazete_ukle == "JPN") ? "selected" : ""?> value="JPN">Japan</option>
                                            <option <?php echo ($row->gazete_ukle == "JEY") ? "selected" : ""?> value="JEY">Jersey</option>
                                            <option <?php echo ($row->gazete_ukle == "JOR") ? "selected" : ""?> value="JOR">Jordan</option>
                                            <option <?php echo ($row->gazete_ukle == "KAZ") ? "selected" : ""?> value="KAZ">Kazakhstan</option>
                                            <option <?php echo ($row->gazete_ukle == "KEN") ? "selected" : ""?> value="KEN">Kenya</option>
                                            <option <?php echo ($row->gazete_ukle == "KIR") ? "selected" : ""?> value="KIR">Kiribati</option>
                                            <option <?php echo ($row->gazete_ukle == "PRK") ? "selected" : ""?> value="PRK">Korea, Democratic People's Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "KOR") ? "selected" : ""?> value="KOR">Korea, Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "KWT") ? "selected" : ""?> value="KWT">Kuwait</option>
                                            <option <?php echo ($row->gazete_ukle == "KGZ") ? "selected" : ""?> value="KGZ">Kyrgyzstan</option>
                                            <option <?php echo ($row->gazete_ukle == "LAO") ? "selected" : ""?> value="LAO">Lao People's Democratic Republic</option>
                                            <option <?php echo ($row->gazete_ukle == "LVA") ? "selected" : ""?> value="LVA">Latvia</option>
                                            <option <?php echo ($row->gazete_ukle == "LBN") ? "selected" : ""?> value="LBN">Lebanon</option>
                                            <option <?php echo ($row->gazete_ukle == "LSO") ? "selected" : ""?> value="LSO">Lesotho</option>
                                            <option <?php echo ($row->gazete_ukle == "LBR") ? "selected" : ""?> value="LBR">Liberia</option>
                                            <option <?php echo ($row->gazete_ukle == "LBY") ? "selected" : ""?> value="LBY">Libya</option>
                                            <option <?php echo ($row->gazete_ukle == "LIE") ? "selected" : ""?> value="LIE">Liechtenstein</option>
                                            <option <?php echo ($row->gazete_ukle == "LTU") ? "selected" : ""?> value="LTU">Lithuania</option>
                                            <option <?php echo ($row->gazete_ukle == "LUX") ? "selected" : ""?> value="LUX">Luxembourg</option>
                                            <option <?php echo ($row->gazete_ukle == "MAC") ? "selected" : ""?> value="MAC">Macao</option>
                                            <option <?php echo ($row->gazete_ukle == "MKD") ? "selected" : ""?> value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "MDG") ? "selected" : ""?> value="MDG">Madagascar</option>
                                            <option <?php echo ($row->gazete_ukle == "MWI") ? "selected" : ""?> value="MWI">Malawi</option>
                                            <option <?php echo ($row->gazete_ukle == "MYS") ? "selected" : ""?> value="MYS">Malaysia</option>
                                            <option <?php echo ($row->gazete_ukle == "MDV") ? "selected" : ""?> value="MDV">Maldives</option>
                                            <option <?php echo ($row->gazete_ukle == "MLI") ? "selected" : ""?> value="MLI">Mali</option>
                                            <option <?php echo ($row->gazete_ukle == "MLT") ? "selected" : ""?> value="MLT">Malta</option>
                                            <option <?php echo ($row->gazete_ukle == "MHL") ? "selected" : ""?> value="MHL">Marshall Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "MTQ") ? "selected" : ""?> value="MTQ">Martinique</option>
                                            <option <?php echo ($row->gazete_ukle == "MRT") ? "selected" : ""?> value="MRT">Mauritania</option>
                                            <option <?php echo ($row->gazete_ukle == "MUS") ? "selected" : ""?> value="MUS">Mauritius</option>
                                            <option <?php echo ($row->gazete_ukle == "MYT") ? "selected" : ""?> value="MYT">Mayotte</option>
                                            <option <?php echo ($row->gazete_ukle == "MEX") ? "selected" : ""?> value="MEX">Mexico</option>
                                            <option <?php echo ($row->gazete_ukle == "FSM") ? "selected" : ""?> value="FSM">Micronesia, Federated States of</option>
                                            <option <?php echo ($row->gazete_ukle == "MDA") ? "selected" : ""?> value="MDA">Moldova, Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "MCO") ? "selected" : ""?> value="MCO">Monaco</option>
                                            <option <?php echo ($row->gazete_ukle == "MNG") ? "selected" : ""?> value="MNG">Mongolia</option>
                                            <option <?php echo ($row->gazete_ukle == "MNE") ? "selected" : ""?> value="MNE">Montenegro</option>
                                            <option <?php echo ($row->gazete_ukle == "MSR") ? "selected" : ""?> value="MSR">Montserrat</option>
                                            <option <?php echo ($row->gazete_ukle == "MAR") ? "selected" : ""?> value="MAR">Morocco</option>
                                            <option <?php echo ($row->gazete_ukle == "MOZ") ? "selected" : ""?> value="MOZ">Mozambique</option>
                                            <option <?php echo ($row->gazete_ukle == "MMR") ? "selected" : ""?> value="MMR">Myanmar</option>
                                            <option <?php echo ($row->gazete_ukle == "NAM") ? "selected" : ""?> value="NAM">Namibia</option>
                                            <option <?php echo ($row->gazete_ukle == "NRU") ? "selected" : ""?> value="NRU">Nauru</option>
                                            <option <?php echo ($row->gazete_ukle == "NPL") ? "selected" : ""?> value="NPL">Nepal</option>
                                            <option <?php echo ($row->gazete_ukle == "NLD") ? "selected" : ""?> value="NLD">Netherlands</option>
                                            <option <?php echo ($row->gazete_ukle == "NCL") ? "selected" : ""?> value="NCL">New Caledonia</option>
                                            <option <?php echo ($row->gazete_ukle == "NZL") ? "selected" : ""?> value="NZL">New Zealand</option>
                                            <option <?php echo ($row->gazete_ukle == "NIC") ? "selected" : ""?> value="NIC">Nicaragua</option>
                                            <option <?php echo ($row->gazete_ukle == "NER") ? "selected" : ""?> value="NER">Niger</option>
                                            <option <?php echo ($row->gazete_ukle == "NGA") ? "selected" : ""?> value="NGA">Nigeria</option>
                                            <option <?php echo ($row->gazete_ukle == "NIU") ? "selected" : ""?> value="NIU">Niue</option>
                                            <option <?php echo ($row->gazete_ukle == "NFK") ? "selected" : ""?> value="NFK">Norfolk Island</option>
                                            <option <?php echo ($row->gazete_ukle == "MNP") ? "selected" : ""?> value="MNP">Northern Mariana Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "NOR") ? "selected" : ""?> value="NOR">Norway</option>
                                            <option <?php echo ($row->gazete_ukle == "OMN") ? "selected" : ""?> value="OMN">Oman</option>
                                            <option <?php echo ($row->gazete_ukle == "PAK") ? "selected" : ""?> value="PAK">Pakistan</option>
                                            <option <?php echo ($row->gazete_ukle == "PLW") ? "selected" : ""?> value="PLW">Palau</option>
                                            <option <?php echo ($row->gazete_ukle == "PSE") ? "selected" : ""?> value="PSE">Palestinian Territory, Occupied</option>
                                            <option <?php echo ($row->gazete_ukle == "PAN") ? "selected" : ""?> value="PAN">Panama</option>
                                            <option <?php echo ($row->gazete_ukle == "PNG") ? "selected" : ""?> value="PNG">Papua New Guinea</option>
                                            <option <?php echo ($row->gazete_ukle == "PRY") ? "selected" : ""?> value="PRY">Paraguay</option>
                                            <option <?php echo ($row->gazete_ukle == "PER") ? "selected" : ""?> value="PER">Peru</option>
                                            <option <?php echo ($row->gazete_ukle == "PHL") ? "selected" : ""?> value="PHL">Philippines</option>
                                            <option <?php echo ($row->gazete_ukle == "PCN") ? "selected" : ""?> value="PCN">Pitcairn</option>
                                            <option <?php echo ($row->gazete_ukle == "POL") ? "selected" : ""?> value="POL">Poland</option>
                                            <option <?php echo ($row->gazete_ukle == "PRT") ? "selected" : ""?> value="PRT">Portugal</option>
                                            <option <?php echo ($row->gazete_ukle == "PRI") ? "selected" : ""?> value="PRI">Puerto Rico</option>
                                            <option <?php echo ($row->gazete_ukle == "QAT") ? "selected" : ""?> value="QAT">Qatar</option>
                                            <option <?php echo ($row->gazete_ukle == "REU") ? "selected" : ""?> value="REU">Réunion</option>
                                            <option <?php echo ($row->gazete_ukle == "ROU") ? "selected" : ""?> value="ROU">Romania</option>
                                            <option <?php echo ($row->gazete_ukle == "RUS") ? "selected" : ""?> value="RUS">Russian Federation</option>
                                            <option <?php echo ($row->gazete_ukle == "RWA") ? "selected" : ""?> value="RWA">Rwanda</option>
                                            <option <?php echo ($row->gazete_ukle == "BLM") ? "selected" : ""?> value="BLM">Saint Barthélemy</option>
                                            <option <?php echo ($row->gazete_ukle == "SHN") ? "selected" : ""?> value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option <?php echo ($row->gazete_ukle == "KNA") ? "selected" : ""?> value="KNA">Saint Kitts and Nevis</option>
                                            <option <?php echo ($row->gazete_ukle == "LCA") ? "selected" : ""?> value="LCA">Saint Lucia</option>
                                            <option <?php echo ($row->gazete_ukle == "MAF") ? "selected" : ""?> value="MAF">Saint Martin (French part)</option>
                                            <option <?php echo ($row->gazete_ukle == "SPM") ? "selected" : ""?> value="SPM">Saint Pierre and Miquelon</option>
                                            <option <?php echo ($row->gazete_ukle == "VCT") ? "selected" : ""?> value="VCT">Saint Vincent and the Grenadines</option>
                                            <option <?php echo ($row->gazete_ukle == "WSM") ? "selected" : ""?> value="WSM">Samoa</option>
                                            <option <?php echo ($row->gazete_ukle == "SMR") ? "selected" : ""?> value="SMR">San Marino</option>
                                            <option <?php echo ($row->gazete_ukle == "STP") ? "selected" : ""?> value="STP">Sao Tome and Principe</option>
                                            <option <?php echo ($row->gazete_ukle == "SAU") ? "selected" : ""?> value="SAU">Saudi Arabia</option>
                                            <option <?php echo ($row->gazete_ukle == "SEN") ? "selected" : ""?> value="SEN">Senegal</option>
                                            <option <?php echo ($row->gazete_ukle == "SRB") ? "selected" : ""?> value="SRB">Serbia</option>
                                            <option <?php echo ($row->gazete_ukle == "SYC") ? "selected" : ""?> value="SYC">Seychelles</option>
                                            <option <?php echo ($row->gazete_ukle == "SLE") ? "selected" : ""?> value="SLE">Sierra Leone</option>
                                            <option <?php echo ($row->gazete_ukle == "SGP") ? "selected" : ""?> value="SGP">Singapore</option>
                                            <option <?php echo ($row->gazete_ukle == "SXM") ? "selected" : ""?> value="SXM">Sint Maarten (Dutch part)</option>
                                            <option <?php echo ($row->gazete_ukle == "SVK") ? "selected" : ""?> value="SVK">Slovakia</option>
                                            <option <?php echo ($row->gazete_ukle == "SVN") ? "selected" : ""?> value="SVN">Slovenia</option>
                                            <option <?php echo ($row->gazete_ukle == "SLB") ? "selected" : ""?> value="SLB">Solomon Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "SOM") ? "selected" : ""?> value="SOM">Somalia</option>
                                            <option <?php echo ($row->gazete_ukle == "ZAF") ? "selected" : ""?> value="ZAF">South Africa</option>
                                            <option <?php echo ($row->gazete_ukle == "SGS") ? "selected" : ""?> value="SGS">South Georgia and the South Sandwich Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "SSD") ? "selected" : ""?> value="SSD">South Sudan</option>
                                            <option <?php echo ($row->gazete_ukle == "ESP") ? "selected" : ""?> value="ESP">Spain</option>
                                            <option <?php echo ($row->gazete_ukle == "LKA") ? "selected" : ""?> value="LKA">Sri Lanka</option>
                                            <option <?php echo ($row->gazete_ukle == "SDN") ? "selected" : ""?> value="SDN">Sudan</option>
                                            <option <?php echo ($row->gazete_ukle == "SUR") ? "selected" : ""?> value="SUR">Suriname</option>
                                            <option <?php echo ($row->gazete_ukle == "SJM") ? "selected" : ""?> value="SJM">Svalbard and Jan Mayen</option>
                                            <option <?php echo ($row->gazete_ukle == "SWZ") ? "selected" : ""?> value="SWZ">Swaziland</option>
                                            <option <?php echo ($row->gazete_ukle == "SWE") ? "selected" : ""?> value="SWE">Sweden</option>
                                            <option <?php echo ($row->gazete_ukle == "CHE") ? "selected" : ""?> value="CHE">Switzerland</option>
                                            <option <?php echo ($row->gazete_ukle == "SYR") ? "selected" : ""?> value="SYR">Syrian Arab Republic</option>
                                            <option <?php echo ($row->gazete_ukle == "TWN") ? "selected" : ""?> value="TWN">Taiwan, Province of China</option>
                                            <option <?php echo ($row->gazete_ukle == "TJK") ? "selected" : ""?> value="TJK">Tajikistan</option>
                                            <option <?php echo ($row->gazete_ukle == "TZA") ? "selected" : ""?> value="TZA">Tanzania, United Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "THA") ? "selected" : ""?> value="THA">Thailand</option>
                                            <option <?php echo ($row->gazete_ukle == "TLS") ? "selected" : ""?> value="TLS">Timor-Leste</option>
                                            <option <?php echo ($row->gazete_ukle == "TGO") ? "selected" : ""?> value="TGO">Togo</option>
                                            <option <?php echo ($row->gazete_ukle == "TKL") ? "selected" : ""?> value="TKL">Tokelau</option>
                                            <option <?php echo ($row->gazete_ukle == "TON") ? "selected" : ""?> value="TON">Tonga</option>
                                            <option <?php echo ($row->gazete_ukle == "TTO") ? "selected" : ""?> value="TTO">Trinidad and Tobago</option>
                                            <option <?php echo ($row->gazete_ukle == "TUN") ? "selected" : ""?> value="TUN">Tunisia</option>
                                            <option <?php echo ($row->gazete_ukle == "TUR") ? "selected" : ""?> value="TUR">Türkiye</option>
                                            <option <?php echo ($row->gazete_ukle == "TKM") ? "selected" : ""?> value="TKM">Turkmenistan</option>
                                            <option <?php echo ($row->gazete_ukle == "TCA") ? "selected" : ""?> value="TCA">Turks and Caicos Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "TUV") ? "selected" : ""?> value="TUV">Tuvalu</option>
                                            <option <?php echo ($row->gazete_ukle == "UGA") ? "selected" : ""?> value="UGA">Uganda</option>
                                            <option <?php echo ($row->gazete_ukle == "UKR") ? "selected" : ""?> value="UKR">Ukraine</option>
                                            <option <?php echo ($row->gazete_ukle == "ARE") ? "selected" : ""?> value="ARE">United Arab Emirates</option>
                                            <option <?php echo ($row->gazete_ukle == "GBR") ? "selected" : ""?> value="GBR">United Kingdom</option>
                                            <option <?php echo ($row->gazete_ukle == "USA") ? "selected" : ""?> value="USA">United States</option>
                                            <option <?php echo ($row->gazete_ukle == "UMI") ? "selected" : ""?> value="UMI">United States Minor Outlying Islands</option>
                                            <option <?php echo ($row->gazete_ukle == "URY") ? "selected" : ""?> value="URY">Uruguay</option>
                                            <option <?php echo ($row->gazete_ukle == "UZB") ? "selected" : ""?> value="UZB">Uzbekistan</option>
                                            <option <?php echo ($row->gazete_ukle == "VUT") ? "selected" : ""?> value="VUT">Vanuatu</option>
                                            <option <?php echo ($row->gazete_ukle == "VEN") ? "selected" : ""?> value="VEN">Venezuela, Bolivarian Republic of</option>
                                            <option <?php echo ($row->gazete_ukle == "VNM") ? "selected" : ""?> value="VNM">Viet Nam</option>
                                            <option <?php echo ($row->gazete_ukle == "VGB") ? "selected" : ""?> value="VGB">Virgin Islands, British</option>
                                            <option <?php echo ($row->gazete_ukle == "VIR") ? "selected" : ""?> value="VIR">Virgin Islands, U.S.</option>
                                            <option <?php echo ($row->gazete_ukle == "WLF") ? "selected" : ""?> value="WLF">Wallis and Futuna</option>
                                            <option <?php echo ($row->gazete_ukle == "ESH") ? "selected" : ""?> value="ESH">Western Sahara</option>
                                            <option <?php echo ($row->gazete_ukle == "YEM") ? "selected" : ""?> value="YEM">Yemen</option>
                                            <option <?php echo ($row->gazete_ukle == "ZMB") ? "selected" : ""?> value="ZMB">Zambia</option>
                                            <option <?php echo ($row->gazete_ukle == "ZWE") ? "selected" : ""?> value="ZWE">Zimbabwe</option>
                                        </select>
                                        <small class="text-muted">Sadece Ülke Seçimi Yaparken Kullanınız.</small>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" value="1" <?php echo ($row->isActive == 1) ? "checked" : ""?>>Aktif</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" value="0" <?php echo ($row->isActive == 0) ? "checked" : ""?>>Pasif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" value="submit" class="btn btn-primary mr-2">Düzenle</button>
                                    <a href="<?php echo base_url('gazeteler');?>" class="btn btn-light">İptal</a>
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