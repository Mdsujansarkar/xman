<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aryx
 * @since 1,0
 */

get_header();
?>
 <main role="main" class="container">
      <div class="row">
        <?php  
        $full_width = 'col-md-8 blog-main';
        $text_center = ' ';
        if(!is_active_sidebar("sidebar-1")){
          $full_width = "col-md-10 col-lg-10 offset-md-1 blog-main";
          $text_center ="text-center";
      } ?>
        
        <div class="<?php echo $full_width; ?> ">
        <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>
            <?php the_content(); ?>
          </div><!-- /.blog-post -->

   

          <nav class="blog-pagination">
            <?php  
            the_posts_pagination(array(
             'screen_reader_text' =>' ',
             'mid_size' => 3,
             'prev_text' => __( 'New', 'bizteh' ),
             'next_text' => __( 'Old', 'bizteh' ),
            ));
          
            ?>
            <a class="btn btn-outline-primary" href="<?php previous_post_link(); ?>">Older</a>
            <a class="btn btn-outline-secondary" href="<?php next_post_link(); ?>">Newer</a>
          </nav>
          <?php if(comments_open()): ?>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?php comments_template(); ?>
                </div>
                <?php endif; ?>
          <?php endwhile; ?>
        </div><!-- /.blog-main -->
        <?php get_sidebar(); ?>
        <!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
<?php get_footer(); ?>