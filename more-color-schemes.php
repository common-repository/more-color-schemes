<?php
/**
* Plugin Name: More Color Schemes
* Plugin URI: https://wordpress.org/plugins/more-color-schemes
* Description: A color schemes plugin made by Kreatix.
* Version: 1.0
* Author: Kreatix
* Author URI: http://kreatix.be/en
* Text Domain: more-color-schemes
* Domain Path: /languages
*/
/* License: More Color Schemes is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
more color schemes is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with More Color Schemes. If not, see http://www.gnu.org/licenses/.
*/

$path = dirname (plugin_basename(__FILE__) ) . '/languages';
load_plugin_textdomain( 'more-color-schemes', false, $path);

class ACS_Color_Schemes {
    
    /**
	 * List of colors registered in this plugin.
	 *
	 * @since 1.0
	 * @access private
	 * @var array $colors List of colors registered in this plugin.
	 *                    Needed for registering colors-fresh dependency.
	 */

	/*colors available in more color schemes plugin*/
	private $colors = array(
		'sea', 'police', 'kreatix', 'nerf', 'uber dark night', 'summer', 'eggplant', 'lemon', 'lemon', 'default alternative', 'vampire', 'pastel', 'cotton candy'  
	);

	function __construct() {
		add_action( 'admin_init' , array( $this, 'add_colors' ) );
	}

	/**
	 * Register color schemes.
	 */
	function add_colors() {
		$suffix = is_rtl() ? '-rtl' : '';

		wp_admin_css_color(
			'sea', __( 'Sea', 'more-color-schemes' ),
			plugins_url( "sea/colors$suffix.css", __FILE__ ),
			array( '#0D83DD', '#0D83DD', '#648C0F', '#86C620' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'police', __( 'Police', 'more-color-schemes' ),
			plugins_url( "police/colors$suffix.css", __FILE__ ),
			array( '#F4F6F9', '#D8EDFF', '#D8EDFF', '#0070D2' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'kreatix', __( 'Kreatix', 'more-color-schemes' ),
			plugins_url( "kreatix/colors$suffix.css", __FILE__ ),
			array( '#34495E', '#1ABC9C', '#1C8D7D', '#1C8D7D' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'nerf', __( 'Nerf', 'more-color-schemes' ),
			plugins_url( "nerf/colors$suffix.css", __FILE__ ),
			array( '#284589', '#3464D4', '#38517A', '#DA5E0B' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'uber-dark-night', __( 'Uber Dark Night', 'more-color-schemes' ),
			plugins_url( "uberdarknight/colors$suffix.css", __FILE__ ),
			array( '#151525', '#151525', '#323240', '#1EACC7' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'summer', __( 'Summer', 'more-color-schemes' ),
			plugins_url( "summer/colors$suffix.css", __FILE__ ),
			array( '#0C84A9','#1294BB', '#F67F01', '#94C53C' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'eggplant', __( 'Eggplant', 'more-color-schemes' ),
			plugins_url( "eggplant/colors$suffix.css", __FILE__ ),
			array( '#40415A','#40415A', '#4C4C66', '#F99A66' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
		wp_admin_css_color(
			'lemon', __( 'Lemon', 'more-color-schemes' ),
			plugins_url( "lemon/colors$suffix.css", __FILE__ ),
			array( '#F4F5F0','#F4F5F0', '#EFD213', '#EFD213' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
        
        wp_admin_css_color(
			'default-alternative', __( 'Default Alternative', 'more-color-schemes' ),
			plugins_url( "defaultalternatief/colors$suffix.css", __FILE__ ),
			array( '#5294E2','#5294E2', '#373D48', '#FFFFFF' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
        
        wp_admin_css_color(
			'vampire', __( 'Vampire', 'more-color-schemes' ),
			plugins_url( "vampire/colors$suffix.css", __FILE__ ),
			array( '#2D303D','#4E5164', '#4E5164', '#FC6163' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
        
        wp_admin_css_color(
			'pastel', __( 'Pastel', 'more-color-schemes' ),
			plugins_url( "pastel/colors$suffix.css", __FILE__ ),
			array( '#2D3E57','#2D3E57', '#F46962', '#F46962' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
		
        wp_admin_css_color(
			'cotton-candy', __( 'Cotton Candy', 'more-color-schemes' ),
			plugins_url( "cottoncandy/colors$suffix.css", __FILE__ ),
			array( '#82BCD7','#82BCD7', '#FBD0D5', '#FBD0D5' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);
	}

}
global $acs_colors;
$acs_colors = new ACS_Color_Schemes;
