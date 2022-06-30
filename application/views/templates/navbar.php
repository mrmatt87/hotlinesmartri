<style>
    .pcoded-navbar {
        display: block;
        z-index: 1029;
        position: absolute;
        transition: all 0.3s ease-in-out;
        width: 264px;
        height: 100%;
        top: 0;
        background: #0081C7;
        color: #b5bdca;
        box-shadow: 0 19px 7px rgb(0 0 0 / 60%), 0 15px 12px rgb(0 0 0 / 62%);
    }

    .pcoded-navbar .pcoded-submenu {
        background: #1a493e;
        padding: 15px 0;
    }

    .pcoded-navbar a {
        color: #fff;
    }

    .pcoded-navbar .pcoded-inner-navbar>li.active>a,
    .pcoded-navbar .pcoded-inner-navbar>li.pcoded-trigger>a {
        background: #0081C7;
        color: #fff;
        border-radius: 15px 0px 0px 15px;
        /* box-shadow: 0 19px 38px rgb(0 0 0 / 30%), 0 15px 12px rgb(0 0 0 / 22%); */
    }

    .pcoded-navbar .pcoded-inner-navbar li.active>a,
    .pcoded-navbar .pcoded-inner-navbar li:focus>a,
    .pcoded-navbar .pcoded-inner-navbar li:hover>a {
        background: #fff;
        color: #004F7B;
    }

    .pcoded-mtext {
        font-size: 15px;
        /* font-weight: bold; */
    }

    .pcoded-navbar .pcoded-submenu {
        background: #004F7B;
        padding: 15px 0;
        color: white;
    }
</style>

<nav class="pcoded-navbar menupos-fixed ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="#" class="b-brand">
                <br>
                <p></p>

                <!-- <img src="<?php echo base_url(); ?>image/fi-logo.PNG" width="170" height="70"> -->
            </a>

            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">

            <?php
            $kd_level_user = $this->session->userdata('id_level_user');
            $sql_menu = "SELECT * FROM `tabel_menu` WHERE id IN(SELECT id_menu FROM tbl_user_rule WHERE id_level_user = $kd_level_user) AND is_main_menu = 0";
            ?>
            <?php

            $page = $this->uri->segment(1); ?>

            <ul class="nav pcoded-inner-navbar ">

                <!-- ----------------------------------- PROGRAMMER ---------------------------------------- -->

                <?php if ($kd_level_user == 2) : ?>

                    <li class="<?= ($page == 'dashboard' || $page == 'susulan') ? 'active' : ''; ?>"><a href="<?= base_url(); ?>dashboard" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>
                    <li class="<?= ($page == 'tracking' || $page == 'susulan') ? 'active' : ''; ?>"><a href="<?= base_url(); ?>tracking" class="nav-link"><span class="pcoded-micon"><i class="fa fa-search"></i></span><span class="pcoded-mtext">Tracking</span></a></li>
                    <li class="<?= ($page == 'mastertable') ? 'active' : ''; ?>"><a href="<?= base_url(); ?>mastertable2" class="nav-link"><span class="pcoded-micon"><i class="fa fa-table"></i></span><span class="pcoded-mtext">Master Table</span></a></li>
                    <li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fa fa-file"></i></span><span class="pcoded-mtext">Summary</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Diagnostic</span></a></li>
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Action Plan</span></a></li>
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Readiness</span></a></li>
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Follow Up</span></a></li>
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Evaluation</span></a></li>
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Verification</span></a></li>
                            <li data-username="home" class="nav-item"><a href="<?= site_url('x') ?>" class="nav-link"><span class="pcoded-micon"><i class="fa fa-circle"></i></span><span class="pcoded-mtext">Report</span></a></li>
                        </ul>
                    </li>

                    <li class="<?= ($page == 'userdata') ? 'active' : ''; ?>"><a href="<?= base_url(); ?>mastertable2" class="nav-link"><span class="pcoded-micon"><i class="fa fa-database"></i></span><span class="pcoded-mtext">User Data</span></a></li>

                    <li class="<?= ($page == 'about') ? 'active' : ''; ?>"><a href="<?= base_url(); ?>aboutt" class="nav-link"><span class="pcoded-micon"><i class="fa fa-info"></i></span><span class="pcoded-mtext">About</span></a></li>

                    </span>
                    </a>
                    </li>

                <?php else : ?>

                <?php endif; ?>

            </ul>
        </div>
    </div>
    </div>
</nav>