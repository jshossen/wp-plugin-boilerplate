<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://app.com
 * @since      1.0.0
 *
 * @package    App
 * @subpackage App/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    App
 * @subpackage App/admin
 * @author     Your Name <email@app.com>
 */
class App_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $app    The ID of this plugin.
	 */
	private $app;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $app       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $app, $version ) {

		$this->app = $app;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in App_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The App_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->app, plugin_dir_url( __FILE__ ) . 'css/app-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in App_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The App_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->app, plugin_dir_url( __FILE__ ) . 'js/app-admin.js', array( 'jquery' ), $this->version, false );

	}

}
