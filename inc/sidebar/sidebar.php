<?php  
function xman_sidebar_register(){
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xman' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => __( 'Blog Sidebar', 'xman' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Blog widget', 'xman' ),
		'before_widget' => '<ol class="list-unstyled mb-0">',
		'after_widget'  => '</ol>',
		'before_title'  => ' <h4 class="font-italic">',
		'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => sprintf( __( 'Footer One' ), 'xman' ),
        'id'            => "footer-1",
        'description'   => '',
        'class'         => 'test',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>",        
    ));
    register_sidebar(array(
        'name'          => sprintf( __( 'Footer Two' ), 'xman' ),
        'id'            => "footer-2",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>",        
    ));
    register_sidebar(array(
        'name'          => sprintf( __( 'Footer Three' ), 'xman' ),
        'id'            => "footer-3",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>",        
    ));
}

add_action('widgets_init','xman_sidebar_register');