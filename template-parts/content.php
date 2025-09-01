<article id="post-<?php the_ID(  );?>" <?php post_class('ablog ablog-2 mb-30 wow fadeInUp');?> data-wow-delay=".3s">
    <div class="ablog__img">
        <?php the_post_thumbnail(); ?> </div>
    <div class="ablog__text ablog__text2">
        <div class="blog__date blog__date2">
            <h3 class="text-white"><?php echo get_the_date('d'); ?></h3>
            <span class="text-white"><?php echo get_the_date('M'); ?></span>
        </div>

        <div class="ablog__meta">
            <ul>
                <!-- Category -->
                <li>
                    <i class="far fa-bookmark"></i>
                    <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' 
                             . esc_html( $categories[0]->name ) . 
                             '</a>';
                    }
                    ?>
                </li>

                <!-- Comments -->
                <li>
                    <i class="far fa-comments"></i>
                    <a href="<?php comments_link(); ?>">
                        <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
                    </a>
                </li>
            </ul>
        </div>

        <h4 class="ablog__text--title ablog__text--title2">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>

        <?php the_excerpt(); ?>

        <div class="ablog__user">
            <div class="ablog__user--img">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 50, '', '', [ 'class' => 'img-fluid' ] ); ?>
            </div>
            <div class="ablog__user--title">
                <h5>
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                        By <?php the_author(); ?>
                    </a>
                </h5>
            </div>
        </div>
    </div>
</article>