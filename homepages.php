<?php  
/**
 * Template Name: Home page
 * 
 */ 

?>
<?php get_header(); ?>
    <main>
       <?php get_template_part('template-part/home/hero'); ?>
        <!-- About Section -->
      <?php get_template_part('template-part/home/about'); ?>
        <!-- services Section -->
      <?php get_template_part('template-part/home/services'); ?>
    <!-- Video Section -->
   <?php get_template_part('template-part/home/video'); ?>
    <!-- Our Case Section -->
   <?php get_template_part('template-part/home/case'); ?>

    <!-- Testimonial Part -->
   <?php get_template_part('template-part/home/testimonial'); ?>
   <?php get_template_part('template-part/home/accordion'); ?>
   <?php get_template_part('template-part/home/homeblog'); ?>
    </main>
 <?php get_footer(); ?>