<header>

    <?php get_template_part('/template-parts/header/topbar')?>

    <div class="header-menu header-sticky">
        <div class="custom-container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-3 col-8">
                    <div class="header-logo pt-15 pb-15">
                        <a href="index.html"><img src="assets/img/logo/logo.png" class="img-fluid" alt="img"></a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-8 col-lg-6 col-4">
                    <div class="main-menu d-none d-lg-block">
                        <nav id="mobile-menu">
                            <?php airvice_main_menu();?>
                        </nav>
                    </div>
                    <div class="side-menu-icon d-lg-none text-end">
                        <button class="side-toggle"><i class="far fa-bars"></i></button>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-2 col-lg-3 d-none d-lg-block">
                    <div class="header-right text-end">
                        <ul class="z-index">
                            <li class="user__text"><span><i><img src="assets/img/icon/icon-man.png" class="img-fluid"
                                            alt="img"></i><a href="tel:029575824">02 (555) 520
                                        890</a> </span></li>
                            <li><a href="contact.html" class="theme-btn theme-btn-white w-btn">Get Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>