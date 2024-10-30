<?php
/**
*Plugin Name:MSIT Social Media Widget 
*Plugin URI:http://my-softit.com/wpplugin
*Description:This MSIT Social Media Widget is basically works to social media link depth. After install this plugin you will get a new "MSIT Social Media Widget" widgets on your wordpress admin panel under appearance menu. Then just use it and enjoy with your social media link in your wordpress blog. You can add this widget on your wordpress sidebar or any widget area 
*Author:Md.Omar Faruqe
*Author URI:http://my-softit.com
*Version:2.1.0
*License:GPlv2 or later
*License URI:http://www.gnu.org/licenses/gpl-2.0.html
*
*Copyright (C) 2013 Md.Omar Faruqe (mysoftit13@gmail.com)
*
*
*This program is free software; you can redistribute it and/or
*modify it under the terms of the GNU General Public License
*as published by the Free Software Foundation;
*
*This program is distributed in the hope that it will be useful,
*but WITHOUT ANY WARRANTY; without even the implied warranty of
*MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License
*along with this program; if not, write to the Free Software
*Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/

class Msit_Social_media extends WP_Widget {

	public function __construct() {
		// widget actual processes
		$param=array(
			'description'=>'This Simple Social Media link icon',
			'name'=>'MSIT Social Media ',
			'classname'=>'msit-social-media'
		);
		parent::__construct('Msit_Social_media','',$param);
		add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ) );
	}

	public function widget( $args, $instance ) {
		// outputs the content of the widget
		extract($args,EXTR_SKIP);
		echo $before_widget;
		include(plugin_dir_path( __FILE__ ).'/views/msit-widget.php');
		echo $after_widget;
	}

 	public function form( $instance ) {
		// outputs the options form on admin
		    /* Set up some default widget settings. */ 
    	$instance=wp_parse_args(
			(array)$instance,
			array(
				'name'=>'',
				'facebook'=>'',
				'twitter'=>'',
				'google'=>'',
				'linkedin'=>'',
				'youtube'=>'',
				'vimeo'=>'',
				'homepage-only'=>''
			)
		);
		
		include(plugin_dir_path( __FILE__ ).'/views/msit-admin.php');

	}

	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$old_instance['title']=strip_tags(stripslashes($new_instance['title']));
		$old_instance['facebook']=strip_tags(stripslashes($new_instance['facebook']));
		$old_instance['twitter']=strip_tags(stripslashes($new_instance['twitter']));
		$old_instance['google']=strip_tags(stripslashes($new_instance['google']));
		$old_instance['linkedin']=strip_tags(stripslashes($new_instance['linkedin']));
		$old_instance['youtube']=strip_tags(stripslashes($new_instance['youtube']));
		$old_instance['vimeo']=strip_tags(stripslashes($new_instance['vimeo']));
		$old_instance['homepage-only']=strip_tags(stripslashes($new_instance['homepage-only']));
		return $old_instance;

	}
	
	function register_admin_styles(){
		//add admin style sheet 
		// Register the script like this for a plugin: 
		 //wp_enqueue_style( 'style-name', get_stylesheet_uri() ); 
   		 wp_enqueue_style( 'front-to-back-admin', plugins_url( '/css/msit-admin.css', __FILE__ ) );  
	}
	
	function register_widget_styles(){
		//add widget style sheet 
		wp_enqueue_style( 'front-to-back-widget', plugins_url( '/css/msit-widget.css', __FILE__ ) ); 
	}
	
}

add_action( 'widgets_init','social_media' );
function social_media(){
     register_widget( 'Msit_Social_media' );
}
?>