<div class="slider-area">
  <?php for($i = 1; $i <= get_theme_mod('slide_number',1); $i++): ?>
        <div class="singal-slide">
             <div class="slider-image slider-height d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/test-image.jpg');">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                         <div class="slider-content animated bounce delay-25">
                          <h2>Meet with us to<br>success dream <span>business</span></h2>
                          <p>There are many variations of passages of Lorem Ipsum available but the majority have sufered alteration in some form by injected humour randomised </p>
                          <a href="#" class="action-btn">GET START</a>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
  <?php endfor; ?>
 </div>