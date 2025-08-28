<header>

    <?php get_template_part('/template-parts/header/topbar')?>
    <?php 
    $site_logo = get_theme_mod( 'logo', get_template_directory_uri(). '/assets/img/logo/logo.png');
    $right_header_switch = get_theme_mod( 'right_switch', 'on' );
    $right_phone = get_theme_mod( 'phone_number', '02 (555) 520 890' );
    $right_button_title = get_theme_mod( 'button_title', 'Get Quote' );
    $right_button_url = get_theme_mod( 'button_url', '#' );
    
    ?>

    <div class="header-menu header-sticky">
        <div class="custom-container">
            <div class="row align-items-center justify-content-between ">
                <div class="col-xxl-2 col-xl-2 col-lg-3 col-8">
                    <div class="header-logo pt-15 pb-15">
                        <a href="<?php site_url();?>"><img src="<?php echo esc_url( $site_logo)?>" class="img-fluid"
                                alt="img"></a>
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

                <?php if($right_header_switch) : ?>
                <div class="col-xxl-4 col-xl-2 col-lg-3 d-none d-lg-block">
                    <div class="header-right text-end">
                        <ul class="z-index">

                            <?php if($right_phone) : ?>
                            <li class="user__text"><span><i><img src="assets/img/icon/icon-man.png" class="img-fluid"
                                            alt="img"></i><a
                                        href="tel:<?php echo esc_html( $right_phone );?>"><?php echo esc_html( $right_phone );?></a>
                                </span></li>
                            <?php endif;?>


                            <?php if($right_button_url) : ?>
                            <li><a href="<?php echo esc_url( $right_button_url );?>"
                                    class="theme-btn theme-btn-white w-btn"><?php echo esc_html( $right_button_title );?></a>
                            </li>
                            <?php endif;?>

                        </ul>
                    </div>
                    <?php endif;?>

                </div>
            </div>
        </div>
    </div>
</header>