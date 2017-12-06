<?php
/** add javascripts and stylesheets */
function carolinaspa_styles(){
  
  //Add stylesheets
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900');
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
  
  //Ad JS files
  wp_enqueue_script('jquery');
  wp_enqueue_script(
    'tether', 
    get_template_directory_uri() . '/js/tether.min.js',
    array('jquery'),
    '1.0.0',
    true
  );
  wp_enqueue_script(
    'bootstrap', 
    get_template_directory_uri() . '/js/bootstrap.min.js',
    array('jquery'),
    '4.0.0',
    true
  );
  wp_enqueue_script(
    'scripts', 
    get_template_directory_uri() . '/js/scripts.js',
    array('jquery'),
    '1.0.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'carolinaspa_styles');

//Setup theme
function carolinaspa_setup(){
  //Create the menus
  register_nav_menus(array(
    'main_menu' =>  esc_html__('Main_Menu', 'carolinaspa'),   
    'social_menu' =>  esc_html__('Social', 'carolinaspa')    
  ));
  
  //featured images
  add_theme_support('post-thumbnails');
  
  //change thumb size
  update_option('thumbnail_size_w', 216);
  update_option('thumbnail_size_h', 144);
  update_option('thumbnail_crop', 1);
}

add_action('after_setup_theme', 'carolinaspa_setup');

//Add bootstrap nav-item class to the <li> of the Main menu
function carolinaspa_custom_li_class($classes, $item, $args){
  if($args->theme_location == 'main_menu'){
    $classes[] = 'nav-item';
  }
  
  return $classes;
}

add_filter('nav_menu_css_class', 'carolinaspa_custom_li_class', 1, 3);

//Add bootstrap nav-link class to the <a> of the Main menu
function carolinaspa_custom_anchor_class($atts, $item, $args){
  if($args->theme_location == 'main_menu'){
    $class = 'class';
    $atts[$class] = 'nav-link';
  }
  
  return $atts;
}

add_filter('nav_menu_link_attributes', 'carolinaspa_custom_anchor_class', 10, 3);

//widgets
function carolinaspa_widgets(){
  register_sidebar(array(
    'name'            => 'Footer Widget 1',
    'id'              => 'footer_widget_1',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
  register_sidebar(array(
    'name'            => 'Footer Widget 2',
    'id'              => 'footer_widget_2',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
  
  register_sidebar(array(
    'name'            => 'Footer Widget 3',
    'id'              => 'footer_widget_3',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
  register_sidebar(array(
    'name'            => 'Footer Widget 2',
    'id'              => 'footer_widget_2',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
  
  register_sidebar(array(
    'name'            => 'Footer Widget 3',
    'id'              => 'footer_widget_3',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
}


add_action('widgets_init', 'carolinaspa_widgets');

//Create Custom Widget for the business hours
/**
 * Adds Foo_Widget widget.
 */
class Business_Hours extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Business Hours Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Business Hours (Check About Us to make some changes)', 'text_domain' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		echo esc_html__( 'Hello, World!', 'text_domain' );
		echo $args['after_widget'];
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // class Business_Hours
// register Business_Hours widget
function register_business_hours() {
    register_widget( 'Business_Hours' );
}
add_action( 'widgets_init', 'register_business_hours' );