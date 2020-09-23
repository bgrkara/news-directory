<?php $user =   get_active_user(); ?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="<?php echo base_url("assets/admin");?>/images/faces/user.svg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?php echo $user->full_name;?></p>
                    <p class="designation"><?php echo $user->email;?></p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Menüler</li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("gazeteler")?>">
                <i class="menu-icon typcn typcn-chart-bar-outline"></i>
                <span class="menu-title">Gazeteler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("sehirler")?>">
                <i class="menu-icon typcn typcn-chart-bar-outline"></i>
                <span class="menu-title">Şehirler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("sayfalar")?>">
                <i class="menu-icon typcn typcn-chart-bar-outline"></i>
                <span class="menu-title">Sayfalar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("users")?>">
                <i class="menu-icon typcn typcn-chart-bar-outline"></i>
                <span class="menu-title">Yöneticiler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("genel-ayarlar")?>">
                <i class="menu-icon typcn typcn-chart-bar-outline"></i>
                <span class="menu-title">Genel Ayarlar</span>
            </a>
        </li>

    </ul>
</nav>