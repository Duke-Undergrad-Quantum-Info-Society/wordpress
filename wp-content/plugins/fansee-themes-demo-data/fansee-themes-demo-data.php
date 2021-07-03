<?php
/*
Plugin Name: Fansee Themes Demo Data
Plugin URI: https://wordpress.org/plugins/fansee-themes-demo-data/
Description: Get demo data to import your content, widgets and theme settings with one click.
Version: 1.3
Author: fanseethemes
Author URI: http://www.fanseethemes.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl.html
Text Domain: fansee-themes-demo-data
*/
namespace Fansee_Themes_Demo_Data;

// Block direct access to the main plugin file.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class Base{

	public $modules = array();
	public static $module_instances = array();
	public static $instance = null;

	public function init( $modules ){
		/**
		 * Display admin error message if PHP version is older than 5.3.2
		 * Otherwise execute the main plugin class.
		 */
		if ( version_compare( phpversion(), '5.3.2', '<' ) ) {
			add_action( 'admin_notices', array( $this, 'old_php_admin_error_notice' ) );
		}else{

			add_action( 'admin_notices', array( $this, 'notice' ) );
			// Set plugin constants.
			$this->set_plugin_constants();
			$this->modules = $modules;
			add_action( 'plugins_loaded', array( $this, 'require_modules' ) );
		}
	}

	public function notice(){
		if( 1 != ini_get('allow_url_fopen') ){
			$class = 'notice notice-warning';
			$message = __( 'The value for allow_url_fopen is false, please speak to your web host to make it enabled. Note: Fansee Themes Demo Data will not get files now.', 'fansee-themes-demo-data' );
			
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
		}
	}

	/**
	 * Returns the *Singleton* instance of this class.
	 *
	 * @return Builder the *Singleton* instance.
	 */
	public static function get_instance() {

		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Returns instance of module
	 *
	 * @return object
	 */
	public function get_module( $module = false ){
        if( $module ){
            return self::$module_instances[ $module ];
        }
    }

	/**
	 * Set plugin constants.
	 *
	 * Path/URL to root of this plugin, with trailing slash and plugin version.
	 */
	public function set_plugin_constants(){

		if( !defined( 'FTDD_PATH' ) ){
			define( 'FTDD_PATH', plugin_dir_path( __FILE__ ) );
		}

		if( !defined( 'FTDD_URL' ) ){
			define( 'FTDD_URL', plugin_dir_url( __FILE__ ) );
		}

		if( !defined( 'FTTD_VERSION' ) ){
			define( 'FTTD_VERSION', 1.3 );
		}		
	}

	/**
	 * Returns url appended with file name and path
	 *
	 * @return string
	 */
	public function get_directory_uri( $file = '' ){
	    return esc_url( FTDD_URL.  $file ); 
	}  

	/**
	 * inludes file once
	 *
	 * @return boolean
	 */
	public function require( $file, $query_args = false ){
		
		$file = FTDD_PATH . $file;

		if( $query_args ){
			foreach( $query_args as $var => $args ){
				$$var = $args;
			}
		}

		if( file_exists( $file ) ){
			require_once $file;
			return true;
		}

		return false;
	}

	/**
	 * Returns namespace
	 *
	 * @return string
	 */
	public function get_namespace(){
		return 'Fansee_Themes_Demo_Data\\';
	}

	/**
	 * loads modules
	 *
	 * @return void
	 */
	public function require_modules(){

		$this->modules = apply_filters( 'ftdd_modules', $this->modules );
		foreach( $this->modules as $module ){
			if( !class_exists( $this->get_class_name( $module ) ) ){

				//check if file exists in main directory
				$required = $this->require( 'modules/class-' . $module . '.php' );
				if( !$required ){
					$this->require( 'modules/' . $module .  '/class-' . $module . '.php' );
				}
			}

			$this->init_module( $module );
		}
	}

	public function get_class_name( $module ){
		
		$class = $this->get_namespace();
		$ar = explode( '-', $module );

		foreach( $ar as $a ){
		    $class .= ucfirst( $a) . '_';
		}

		return rtrim( $class, '_' );
	}

	public function init_module( $module ){

		$class = $this->get_class_name( $module );

		self::$module_instances[ $module ] = new $class();
	}

	/**
	 * Display an admin error notice when PHP is older the version 5.3.2.
	 * Hook it to the 'admin_notices' action.
	 */
	public function old_php_admin_error_notice() {
		$message = sprintf( esc_html__( 'The %2$sFansee Themes Demo Datar%3$s plugin requires %2$sPHP 5.3.2+%3$s to run properly. Please contact your hosting company and ask them to update the PHP version of your site to at least PHP 5.3.2.%4$s Your current version of PHP: %2$s%1$s%3$s', 'fansee-themes-demo-data' ), phpversion(), '<strong>', '</strong>', '<br>' );

		printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post( $message ) );
	}
}


Base::get_instance()->init(array( 'script-handler', 'plugin-installer', 'importer' ));