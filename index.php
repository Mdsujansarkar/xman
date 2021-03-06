<?php get_header(); ?>
    <main>
    <div class="our-blog pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-main-contant">
                            <h1>Our Blog <span class="hr"></span></h1>
                            <h5 class="pt">Sed ut perspiciatis unde omiste naerror voluptate satium <br> doloreque laudan totam rem riam eaque ipsa quae ab illo invetore vtatise. </h5>
                     </div>
                </div>
                <div class="row pt-40">
                    <?php
                        if ( have_posts() ): 
                            while( have_posts() ) : the_post();
                    ?>
                    <div class="col-xl-6 blog-images">
                        <div class="blog-image">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail',array( 'width' => 100, 'height' => 100 )); ?></a>
                        </div>
                        <div class="reading-part">
                           <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                            <p><?php the_excerpt(); ?></p>
                            <p>By Admin</p>
                            <p class="command">commands(5)</p>
                            <p class="readmore"><a href="<?php the_permalink(); ?>">readmore</a></p>
                        </div>
                    </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </main>
 <?php get_footer(); ?>
 