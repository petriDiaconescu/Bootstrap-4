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
  
  //Add new Image Size
  add_image_size('product_thumb', 400, 266, true);
  add_image_size('slider', 1140, 543, true);
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
  register_sidebar(array(
    'name'            => 'Sidebar Widget 1',
    'id'              => 'sidebar_widget_1',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="text-center text-uppercase pt-4">',
    'after_title'     => '</h2>'  
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
			'business_hours_widget', // Base ID
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
      //body of the widget
		?>
      <div class="sidebar business-hours p-3">
        <?php $home = get_page_by_title('Home'); ?>
        <p class="text-center mt-5">
          <?php the_field('business_schedule_text', $home->ID); ?>
        </p>
        <?php 
          $table = get_field('business_schedule', $home->ID);
          if($table):
        ?>
          <table class="table table-hover text-center mt-5">
            <thead class="table-danger">
              <tr>
                <?php foreach($table['header'] as $th): ?>
                  <th class="text-center"><?php echo $th['c'] ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
            <?php foreach($table['body'] as $tr): ?>
              <tr>
              <?php foreach($tr as $td): ?>  
                <td><?php echo $td['c'] ?></td>
              <?php endforeach; ?>  
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>
      </div>
    <?php
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

// Register Custom Post Type
function carolinaspa_products() {

	$labels = array(
		'name'                  => _x( 'Our Products', 'Post Type General Name', 'carolinaspa' ),
		'singular_name'         => _x( 'Our Product', 'Post Type Singular Name', 'carolinaspa' ),
		'menu_name'             => __( 'Our Products', 'carolinaspa' ),
		'name_admin_bar'        => __( 'Our Products', 'carolinaspa' ),
		'archives'              => __( 'Our Products Archives', 'carolinaspa' ),
		'attributes'            => __( 'Our Products Attributes', 'carolinaspa' ),
		'parent_item_colon'     => __( 'Parent:', 'carolinaspa' ),
		'all_items'             => __( 'All Products', 'carolinaspa' ),
		'add_new_item'          => __( 'Add new Product', 'carolinaspa' ),
		'add_new'               => __( 'Add New Product', 'carolinaspa' ),
		'new_item'              => __( 'New Product', 'carolinaspa' ),
		'edit_item'             => __( 'Edit Product', 'carolinaspa' ),
		'update_item'           => __( 'Update Product', 'carolinaspa' ),
		'view_item'             => __( 'View Product', 'carolinaspa' ),
		'view_items'            => __( 'View Products', 'carolinaspa' ),
		'search_items'          => __( 'Search Product', 'carolinaspa' ),
		'not_found'             => __( 'Not found', 'carolinaspa' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'carolinaspa' ),
		'featured_image'        => __( 'Featured Image', 'carolinaspa' ),
		'set_featured_image'    => __( 'Set featured image', 'carolinaspa' ),
		'remove_featured_image' => __( 'Remove featured image', 'carolinaspa' ),
		'use_featured_image'    => __( 'Use as featured image', 'carolinaspa' ),
		'insert_into_item'      => __( 'Insert into Product', 'carolinaspa' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'carolinaspa' ),
		'items_list'            => __( 'Product list', 'carolinaspa' ),
		'items_list_navigation' => __( 'Product list navigation', 'carolinaspa' ),
		'filter_items_list'     => __( 'Product items list', 'carolinaspa' ),
	);
	$args = array(
		'label'                 => __( 'Our Product', 'carolinaspa' ),
		'description'           => __( 'Shop Products for Carolina Spa', 'carolinaspa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'our_products', $args );

}
add_action( 'init', 'carolinaspa_products', 0 );

//Shortcode that displays the products
//Use the shortcode: [carolinaspa_products]

function carolinaspa_products_shortcode(){
  $args = array(
    'posts_per_page' => 10,
    'post_type'      => 'our_products',
    'orderby'        => 'name',
    'order'          => 'ASC'  
  );
  
  $products = new WP_Query($args);
  echo '<div class="row products">';
  while($products->have_posts()): $products->the_post();
  ?>
    <div class="col-6 col-md-3 mb-5 mb-md-0">
      <div class="card">
        <a href="<?php the_permalink() ?>">
          <?php 
            the_post_thumbnail('product_thumb', 
              array(
               'class' => 'card-img-top img-fluid')
              ); 
          ?>
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0"><?php the_title() ?></h3>
            <p class="card-text text-uppercase">
              <?php the_field('short_description') ?>
            </p>
            <p class="price text-center mb-0">$ <?php the_field('price') ?></p>
          </div>
        </a>
      </div>
    </div><!-- col-6 col-md-3   -->
  <?php 
  endwhile;  wp_reset_postdata();
  echo "</div>";
}

add_shortcode('carolinaspa_products', 'carolinaspa_products_shortcode');

//shortcut that displays the contact form
//Use the shortcode: [carolinaspa_mail]

function carolinaspa_contact_form(){
?>
    <form id="contact_form" action="<?php echo get_template_directory_uri(); ?>/send.php" method="POST" class="p-5 mt-5 contact-form">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
      <small class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
      <small class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" rows="6" class="form-control"></textarea>
      <small class="form-text text-muted"></small>
    </div>

    <input type="submit" class="btn btn-primary text-uppercase" name="submit" value="Submit" />
    <div id="output" class="alert alert-success text-center mt-3 d-none"></div>
  </form>
<?php    
}

add_shortcode('carolinaspa_mail', 'carolinaspa_contact_form');
?>