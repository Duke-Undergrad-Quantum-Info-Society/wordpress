<?php
namespace Fansee_Themes_Demo_Data;

class Script_Handler extends Base{

	public function enqueue( $script ){

		$handler = "ftdd-{$script['handler']}";
		$file = $this->get_directory_uri( "assets/{$script['file']}" );

		if( strpos( $script['file'], '.js' ) ){
			
			$dependency = isset( $script[ 'dependency' ] ) ? $script[ 'dependency' ] : array( 'jquery' );
			wp_enqueue_script( $handler, $file, $dependency, FTTD_VERSION );

			if( isset( $script['localize'] ) ){
				wp_localize_script(
					$handler,
					$script['localize']['name'],
					$script['localize']['data']
				);
			}
		}else{

			$dependency = isset( $script[ 'dependency' ] ) ? $script[ 'dependency' ] : array();
			wp_enqueue_style( $handler, $file, $dependency, FTTD_VERSION  );
			if ( isset( $script[ 'inline' ] ) ) {
				wp_add_inline_style( $handler, wp_strip_all_tags( preg_replace( '#<style[^>]*>(.*)</style>#is', '$1', $script[ 'inline' ] ) ) );
			}
		}
	}
}