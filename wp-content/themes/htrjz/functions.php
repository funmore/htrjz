<?php 
	function learningWordPress_resources(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts','learningWordPress_resources');
	function func1(){
		bloginfo('name');
		echo "func1";
	}

	register_nav_menus(array(
			'primary'=>('Primary Menu'),
			'footer'=>('Footer Menu'), 
		));


	function before_head_scripts() {
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'ie10-css', get_template_directory_uri().'/css/ie10-viewport-bug-workaround.css', array('bootstrap-css') );
		wp_enqueue_script( 'ie-emulation-modes-warning', get_template_directory_uri().'/js/ie-emulation-modes-warning.js', array(),false,false );

	 }
	add_action( 'wp_enqueue_scripts', 'before_head_scripts' );


    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function before_body_scripts() {
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js', array(), null, true);
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.0', true );
		wp_enqueue_script( 'holder', get_template_directory_uri().'/js/holder.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'ie-viewport-bug-wordaround',get_template_directory_uri().'/js/ie10-viewport-bug-workaround.js', array('jquery'), null, true );
		wp_enqueue_script( 'commonJs',get_template_directory_uri().'/js/common.js', array('jquery'), null, true );
	}

	add_action( 'wp_enqueue_scripts', 'before_body_scripts' );

//get top ancestor
function get_top_ancestor_id(){
	global $post;
	if($post->post_parent){
		$ancesters=array_reverse(get_post_ancestors( $post->ID ));
		return $ancesters[0];
	}
	return $post->ID;
}