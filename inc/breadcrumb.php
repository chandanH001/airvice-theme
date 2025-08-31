<?php if ( !is_front_page() ) : ?>
<div class="page-title-area pt-210 pb-180" data-background="assets/img/bg/page-banner.jpg">
    <div class="container">
        <div class="page-title-icon">
            <i class="flaticon-air-conditioner hero__icon hero__icon1"></i>
            <i class="flaticon-heating hero__icon hero__icon2"></i>
            <i class="flaticon-vacuum-cleaner hero__icon hero__icon3"></i>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2 class="breadcrumb-title"><?php airvice_breadcrumb_title();?></h2>
                    <div class="breadcrumb-menu">
                        <nav class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-end"><span><?php bcn_display();?></span></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>