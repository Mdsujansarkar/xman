<div class="slider-area">
  <?php for($i= 1; $i <= get_theme_mod('slide_number',1); $i++): ?>
        <div class="singal-slide">
          <?php   $background_image =  get_theme_mod('background_image_url',''); ?>
             <div class="slider-image slider-height d-flex align-items-center" style="background-image: url('<?php echo esc_url($background_image); ?>');">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                         <div class="slider-content animated bounce delay-25">
                          <h2><?php echo get_theme_mod('main_text_heading','Write Something'); ?></h2>
                          <p><?php echo get_theme_mod('slider_descriptionl','Write Something'); ?> </p>
                          <a href="<?php echo esc_url('slider_link'); ?>" class="action-btn"><?php echo esc_attr(get_theme_mod('slider_link_text','GET START')); ?></a>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
  <?php endfor; ?>
 </div>