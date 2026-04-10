<div class="sidebar" style="background-color: #264d4d;" >
<ul class="navbar-nav  sidebar sidebar-dark accordion">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="assets/img/logo-pemda.png" alt="Logo Pemda" style="width:50px; height:50px; margin-right:1px;">
        </div>
        <div class="sidebar-brand-text mx-3">GIS</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>">
        <a class="nav-link" href="index.php"><span>Akses Internet</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item <?= basename($_SERVER['PHP_SELF'])=='jalan_kabupaten.php'?'active':'' ?>">
        <a class="nav-link" href="jalan_kabupaten.php"><span>Jalan Kabupaten</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item <?= basename($_SERVER['PHP_SELF'])=='Kemudahan_Air_Minum.php'?'active':'' ?>">
        <a class="nav-link" href="Kemudahan_Air_Minum.php"><span>Kemudahan Air Minum</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item <?= basename($_SERVER['PHP_SELF'])=='Kemudahan_Akses_Mitigasi.php'?'active':'' ?>">
        <a class="nav-link" href="Kemudahan_Akses_Mitigasi.php"><span>Kemudahan Akses Mitigasi</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item <?= basename($_SERVER['PHP_SELF'])=='Ketersediaan_Air_Minum.php'?'active':'' ?>">
        <a class="nav-link" href="Ketersediaan_Air_Minum.php"><span>Ketersediaan Air Minum</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
</ul>
<!-- End Sidebar -->
    </div>
<div id="content-wrapper" class="d-flex flex-column">