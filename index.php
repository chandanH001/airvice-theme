<?php get_header();?>


<section class="blog-area pt-120 pb-115">
    <div class="container">
        <div class="row">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-lg-4 col-md-6">
                <?php get_template_part('/template-parts/content', get_post_format())?>
            </div>
            <?php endwhile;else: ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


        </div>
        <div class="row">
            <div class="col-12">
                <div class="basic-pagination mt-30 wow fadeInUp" data-wow-delay=".5s">
                    <ul>
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#">
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer();?>