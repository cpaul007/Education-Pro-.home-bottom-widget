//* Add home bottom widgets
        add_action( 'genesis_before_footer', 'education_home_bottom_widgets');
        

function education_home_bottom_widgets() {
 if( !is_front_page() ):
    genesis_widget_area( 'home-bottom', array(
        'before' => '<div class="home-bottom widget-area"><div class="wrap">',
        'after'  => '</div></div>',
    ) );
 endif;
}
