<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url()?>templatebkn/images/icon/logobkn.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="mt-3">
                        <div class="text-muted "><h5>PKPT</h5></div>
                        <a href="<?php echo base_url()?>rekap">
                                <i class="fa fa-envelope"></i>Rekap Audit</a>
                        </li>
                        <li>
                        <a href="<?php echo base_url()?>peta">
                                <i class="fa fa-map-marker"></i>Peta Audit</a>
                        </li>
                        <li>
                        <a href="<?php echo base_url()?>pkpt">
                                <i class="fa fa-upload"></i>Upload PKPT Final</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="fa fa-flag"></i>PKPT Final</a>
                        </li>
                        <div class="text-muted mt-4 "><h5>Surat Tugas </h5></div>
                        <li>
                            <a href="<?php echo base_url()?>surat">
                                <i class="fa fa-envelope"></i>Surat Tugas</a>
                        </li>
                        <li>
                        <a href="<?php echo base_url()?>Inputsurat">
                                <i class="fa fa-list-alt"></i>Input Surat Tugas</a>
                        </li>
                        <li>
                        <a href="<?php echo base_url()?>viewsurat">
                                <i class="fa fa-eye"></i>View Tugas Pegawai</a>
                        </li>
                        <div class="text-muted mt-4 "><h5>Laporan Hasil Audit (LHA) </h5></div>
                        <li>
                        <a href="<?php echo base_url()?>programaudit">
                                <i class="fa fa-clock-o"></i>Program Kerja Audit</a>
                        </li>
                        <div class="text-muted mt-4 "><h5>Laporan Hasil Evaluasi (LHE) </h5></div>
                        <li>
                            <a href="evaluasi.html">
                                <i class="fa fa-check-square"></i>Evaluasi Audit</a>
                        </li>
                        <div class="text-muted mt-4 "><h5>Laporan Hasil Review (LHR) </h5></div>
                        <li>
                            <a href="review.html">
                                <i class="fa fa-check-square"></i>Review Audit</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->