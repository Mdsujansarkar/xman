<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>From its medieval origins</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header Top Section -->
    <div class="header-top-section gray-back">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 d-flex align-items-center">
                    <div class="welcome-text">
                        <span><?php echo get_theme_mod('top_header_section'); ?></span>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="header-social-icon pt-20 pb-20 header-border float-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <?php $icon = get_theme_mod( 'fontawosme_icon_facebook', 'fab fa-facebook-f' ); ?>
                                    <i class="<?php echo esc_attr($icon); ?>"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php $icon1 = get_theme_mod( 'fontawosme_icon_twitter', 'fab fa-twitter' ); ?>
                                    <i class="<?php echo esc_attr($icon1); ?>"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php $icon2 = get_theme_mod( 'fontawosme_icon_3', 'fab fa-github' ); ?>
                                <i class="<?php echo esc_attr($icon2); ?>"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php $icon3 = get_theme_mod( 'fontawosme_icon_4', 'fab fa-mailchimp' ); ?>
                                <i class="<?php echo esc_attr($icon3); ?>"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                <?php $icon4 = get_theme_mod( 'fontawosme_icon_5', 'fab fa-instagram' ); ?>
                                <i class="<?php echo esc_attr($icon4); ?>"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Call To Action -->
    <div class="header-call-to-action pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="logo-section">
                        <?php if( has_custom_logo() ) {
						echo get_custom_logo();
					} else { ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
							<h3><?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?></h3>
						</a>
					<?php } ?>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="singal-cate">
                        <div class="sing-icon">
                          
                            <i class="far fa-envelope"></i><span>Email us</span>
                        </div>
                        <?php $emai_address = get_theme_mod( 'phone_control', 'support@gmail.com' ); ?>
                        <h6><?php echo esc_attr($emai_address); ?></h6>
                    </div>
                    <div class="singal-cate">
                        <div class="sing-icon">
                            <i class="fas fa-phone"></i><span>Email us</span>
                        </div>
                        <?php $phone_number = get_theme_mod( 'phone_number', '+1255866558(0000)' ); ?>
                        <h6><?php echo esc_attr($phone_number); ?></h6>
                    </div>
                    <div class="singal-cate">
                        <div class="sing-icon">
                            <i class="far fa-clock"></i><span>Email us</span>
                        </div>
                        <?php $alerm = get_theme_mod( 'alarm_section', '10.am-8.pm' ); ?>
                        <h6><?php echo esc_attr($alerm); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area">
        <div class="container">
            <div class="theme-bg pt-20 pb-20">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="nav">
                            <div class="main-menu">
                                <?php
                            wp_nav_menu( array(
						'theme_location'    => 'menu-1',

                    ) );
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="contact-button">
                            <a href="#">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Salider Area -->
