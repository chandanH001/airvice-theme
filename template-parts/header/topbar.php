<?php 

$offer = get_theme_mod( 'offer_note', 'We do not received extra charges' );
$opening = get_theme_mod( 'top_opening', 'unday to Thursday' );
$address = get_theme_mod( 'top_address', '28/4 Palmal, London' );
$email = get_theme_mod( 'top_email', 'info@sycho24.com ' );
$switch = get_theme_mod('topbar_switch', 'on')
?>


<?php if($switch) : ?>
<div class="header-top grey-bg d-none d-lg-block">
    <div class="custom-container">
        <div class="row align-items-center">
            <?php if($offer) : ?>
            <div class="col-xl-3 col-lg-4">
                <div class="header-top-left">
                    <span><i class="flaticon-return-of-investment"></i> <?php echo esc_html( $offer )?></span>
                </div>
                <?php endif ;?>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="header-top-right">
                    <ul>
                        <?php if($address) : ?>
                        <li><i class="flaticon-history"></i><?php echo esc_html( $opening )?></li>
                        <?php endif ;?>

                        <?php if($address) : ?>
                        <li><i class="flaticon-pin"></i><?php echo esc_html( $address )?></li>
                        <?php endif ;?>

                        <?php if($email) : ?>
                        <li><i class="fal fa-envelope"></i><a
                                href="mailto:<?php echo esc_html( $email )?>"><?php echo esc_html( $email )?></a></li>
                        <?php endif ;?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ;?>