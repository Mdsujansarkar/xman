<div class="testimonial-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonai-slider-content">
                        <?php 
                        $testmonial = new WP_Query(array(
                          'post_type' => 'tesimonial',
                          'posts_per_page' => 3
                        ));
                        while( $testmonial -> have_posts()):  $testmonial ->the_post();
                        ?>
                        <div class="quate">
                            <h3><?php the_title(); ?></h3>
                            <div class="calind-image">
                                <?php the_post_thumbnail('thumbnail',array('class' => 'calind-image')); ?>
                                <p class="desination1"><?php the_content(); ?></p>
                                <p class="desination"><?php echo get_post_meta(get_the_ID(), 'xman_testimonial_field', true); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-part">
                       <?php echo do_shortcode('[contact-form-7 id="295" title="xman contact"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>