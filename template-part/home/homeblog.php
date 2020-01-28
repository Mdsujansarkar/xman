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
                            <a href="#"><img src="images/bg@1X.png" alt=""></a>
                        </div>
                        <div class="reading-part">
                            <h5>Webfonts Performance Smashing Videos</h5>
                            <p>By Admin</p>
                            <p class="command">commands(5)</p>
                            <p class="readmore"><a href="#">readmore</a></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>