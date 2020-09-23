<?php $user =   get_active_user();?>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo base_url("gazeteler")?>">
            <img src="<?php echo base_url("assets/admin");?>/images/logo.svg" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url("")?>">
            <img src="<?php echo base_url("assets/admin");?>/images/logo-mini.svg" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Yazılım Destek Hattı : +90 312 465 00 90</li>
        </ul>
        <div class="ml-auto search-form d-none d-md-block">
        <p style="font-weight:900; font-size: .7rem;">Gerçek zaferi siz kazanacak ve devam edeceksiniz ve mutIaka başarıIı oIacaksınız. <img style="max-height: .8rem;" src="<?php echo base_url("assets/home");?>/img/ataturk-imza.png" alt="Gazetebul"></p>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="<?php echo base_url("assets/home");?>/img/mustafa-kemal-atat%C3%BCrk-02.png" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="<?php echo base_url("assets/home");?>/img/mustafa-kemal-atat%C3%BCrk-02.png" alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user->full_name;?></p>
                        <p class="font-weight-light text-muted mb-0"><?php echo $user->email;?></p>
                    </div>
                    <a href="<?php echo base_url("users/editPage/$user->id");?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary"></i> Profil Düzenle</span></a>
                    <a href="<?php echo base_url("users/editPass/$user->id");?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-key text-primary"></i> Şifre Değiştir</span></a>
                    <a href="<?php echo base_url("cikis");?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Çıkış</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>