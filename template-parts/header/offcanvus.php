<?php 


$opening = get_theme_mod( 'top_opening', 'unday to Thursday' );
$address = get_theme_mod( 'top_address', '28/4 Palmal, London' );
$email = get_theme_mod( 'top_email', 'info@sycho24.com ' );
$fb_url = get_theme_mod( 'fa_social_offcanvas', 'https://facebook.com/cd' );
$tw_url = get_theme_mod( 'tw_social_offcanvas', 'https://x.com/cd' );
$in_url = get_theme_mod( 'ins_social_offcanvas', 'https://x.com/cd' );
$g_url = get_theme_mod( 'google_social_offcanvas', 'https://google.com/cd' );


?>


<div class="fix">
    <div class="side-info">
        <button class="side-info-close"><i class="fal fa-times"></i></button>
        <div class="side-info-content">
            <div class="mobile-menu"></div>
            <div class="contact-infos mb-30">
                <div class="contact-list mb-30">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><i class="flaticon-history"></i><?php echo esc_html( $opening );?></li>
                        <li><i class="flaticon-pin"></i><?php echo esc_html( $address );?></li>
                        <li><i class="fal fa-envelope"></i><a
                                href="mailto:<?php echo esc_html( $email );?>"><?php echo esc_html( $email );?></a></li>
                    </ul>
                    <div class="sidebar__menu--social">
                        <a href="<?php echo esc_url( $fb_url );?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo esc_url( $tw_url );?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo esc_url( $in_url );?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo esc_url( $g_url );?>"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>