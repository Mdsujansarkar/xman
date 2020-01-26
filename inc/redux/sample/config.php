<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Sample Options', 'xman' ),
        'page_title'           => __( 'Sample Options', 'xman' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'xman' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'xman' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'xman' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'xman' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'xman' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'xman' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'xman' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'xman' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'xman' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'xman' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'xman' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => __( 'About Us', 'xman' ),
        'id'               => 'home_about_section',
        'desc'             => __( 'These are really basic fields!', 'xman' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home page about image', 'xman' ),
        'id'               => 'home_paga_about_section_text',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'xman' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            array(
                'id'       => 'about-text-id',
                'type'     => 'text',
                'title'    => __( 'About Heading', 'xman' ),
                'desc'     => __( 'About Heading Section', 'xman' ),
                'default'  => 'About Us'
            ),
            array(
                'id'       => 'about-text-area',
                'type'     => 'textarea',
                'title'    => __( 'About Text Area', 'xman' ),
                'desc'     => __( 'About Text Area', 'xman' ),
                'default'  => 'It is a long established facthat reader will be distracted bythe readable content page when looking at its layout'
            ),
            array(
                'id'       => 'about-text-area-description',
                'type'     => 'textarea',
                'title'    => __( 'About Text Area', 'xman' ),
                'desc'     => __( 'About Text Area', 'xman' ),
                'default'  => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example which of us ever '
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'About Three Part', 'xman' ),
        'id'               => 'about-three-part',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'xman' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            array(
                'id'       => 'about-three-part-one',
                'type'     => 'media',
                'title'    => __( 'About Image', 'xman' ),
                'desc'     => __( 'About Heading Section', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/icon/icon@1X.png'
                )
            ),
            array(
                'id'       => 'about-three-heading',
                'type'     => 'text',
                'title'    => __( 'Description', 'xman' ),
                'default'  =>'Consulting<br> for any problems'
            ),
            array(
                'id'       => 'about-three-desription',
                'type'     => 'textarea',
                'title'    => __( 'Description', 'xman' ),
                'default'  =>'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium emque laudantium totam rem'
            ),
            array(
                'id'       => 'about-three-part-two',
                'type'     => 'media',
                'title'    => __( 'About Image', 'xman' ),
                'desc'     => __( 'About Heading Section', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/icon/icon@1X.png'
                )
            ),
            array(
                'id'       => 'about-three-heading-two',
                'type'     => 'text',
                'title'    => __( 'Description', 'xman' ),
                'default'  =>'Consulting<br> for any problems'
            ),
            array(
                'id'       => 'about-three-desription-two',
                'type'     => 'textarea',
                'title'    => __( 'Description', 'xman' ),
                'default'  =>'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium emque laudantium totam rem'
            ),
            array(
                'id'       => 'about-three-part-three',
                'type'     => 'media',
                'title'    => __( 'About Image', 'xman' ),
                'desc'     => __( 'About Heading Section', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/icon/icon@1X.png'
                )
            ),
            array(
                'id'       => 'about-three-heading-three',
                'type'     => 'text',
                'title'    => __( 'Description', 'xman' ),
                'default'  =>'Consulting<br> for any problems'
            ),
            array(
                'id'       => 'about-three-desription-three',
                'type'     => 'textarea',
                'title'    => __( 'Description', 'xman' ),
                'default'  =>'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium emque laudantium totam rem'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Services Section', 'xman' ),
        'id'               => 'home_pag_service_text',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'xman' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            array(
                'id'       => 'about-service',
                'type'     => 'text',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'Services'
            ),
            array(
                'id'       => 'services-text-area',
                'type'     => 'textarea',
                'title'    => __( 'About Text Area', 'xman' ),
                'desc'     => __( 'About Text Area', 'xman' ),
                'default'  => 'It is a long established facthat reader will be distracted bythe readable content page when looking at its layout. '
            ),
            array(
                'id'       => 'services-media-one',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'service-heading-one',
                'type'     => 'text',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'service-description-one',
                'type'     => 'textarea',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'It is a long established fact that a reader will beed by readable.'
            ),
            array(
                'id'       => 'services-media-two',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'service-heading-two',
                'type'     => 'text',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'service-description-two',
                'type'     => 'textarea',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'It is a long established fact that a reader will beed by readable.'
            ),
            array(
                'id'       => 'services-media-three',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'service-heading-three',
                'type'     => 'text',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'service-description-three',
                'type'     => 'textarea',
                'title'    => __( 'Services Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'It is a long established fact that a reader will beed by readable.'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Video Section', 'xman' ),
        'id'               => 'home_pag_video_text',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'xman' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            array(
                'id'       => 'video-service',
                'type'     => 'text',
                'title'    => __( 'Video Heading', 'xman' ),
                'desc'     => __( 'Service Heading Section', 'xman' ),
                'default'  => 'We Are Ready'
            ),
            array(
                'id'       => 'video-services-text',
                'type'     => 'textarea',
                'title'    => __( 'About Text Area', 'xman' ),
                'desc'     => __( 'About Text Area', 'xman' ),
                'default'  => 'Come with us to<br>improve your business '
            ),
            array(
                'id'       => 'video-services-text-one',
                'type'     => 'text',
                'title'    => __( 'About Text Area', 'xman' ),
                'desc'     => __( 'About Text Area', 'xman' ),
                'default'  => '#'
            ),
            array(
                'id'       => 'video-services-text-two',
                'type'     => 'text',
                'title'    => __( 'About Text Area', 'xman' ),
                'desc'     => __( 'About Text Area', 'xman' ),
                'default'  => '#'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Our Case Section', 'xman' ),
        'id'               => 'home_page_case_section',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'xman' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            array(
                'id'       => 'case-section',
                'type'     => 'text',
                'title'    => __( 'Case Heading', 'xman' ),
                'desc'     => __( 'Case Heading Section', 'xman' ),
                'default'  => 'Our Case'
            ),
            array(
                'id'       => 'case-section-description',
                'type'     => 'textarea',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => 'Sed ut perspiciatis unde omiste naerror voluptate satium<br />
                doloreque laudan totam rem riam eaque ipsa quae ab illo invetore vtatise.  '
            ),
            array(
                'id'       => 'case-mdia-one',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'case-section-description-one',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'case-section-link-one',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => '#'
            ),
            array(
                'id'       => 'case-mdia-two',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'case-section-description-two',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'case-section-link-two',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => '#'
            ),
            array(
                'id'       => 'case-mdia-three',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'case-section-description-three',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'case-section-link-three',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => '#'
            ),
            array(
                'id'       => 'case-mdia-four',
                'type'     => 'media',
                'title'    => __( 'Services Image', 'xman' ),
                'desc'     => __( 'Services Image', 'xman' ),
                'default'  => array(
                'url'      =>get_template_directory_uri(). '/images/bg@1X.png'
                )
            ),
            array(
                'id'       => 'case-section-description-four',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => 'Business Consulting'
            ),
            array(
                'id'       => 'case-section-link-four',
                'type'     => 'text',
                'title'    => __( 'Case Text Area', 'xman' ),
                'default'  => '#'
            ),
        )
    ) );
   

