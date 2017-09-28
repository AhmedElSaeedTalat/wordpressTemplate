<?php
/*
Plugin Name: add scoial Icons
Plugin URI: https://facebook.com
Description: this plugin is used to add social Icons to page
Version: 1
Author: ahmed
*/
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'PLUGIN_VERSION', '1.0.0' );
class social_Icons extends WP_Widget{
	public $twitter = [];
	public function __construct(){
		parent::__construct(false,$name = __("sidebar_social_Icons"));
	}
	public function form($instance){
		$face = $instance['facebook'];
		$this->twitter[] = $instance['twitter'];
		$this->twitter[] =$instance['facebook'];
		$instance['instagram'];
		$instance['linkedin'];
;?>
		<input type="text" name="<?php echo $this->get_field_name("facebook");?>" placeholder="plz add your facebook link" 
		class="inputs" value="<?php echo $instance['facebook'];?>">
		<input type="text" name="<?php echo $this->get_field_name("twitter");?>"   placeholder="plz add your twitter link"
		value="<?php echo $instance['twitter'] ;?>"
		>
	<input type="text" name="<?php echo $this->get_field_name("instagram");?>"   placeholder="plz add your instagram link"
		value="<?php echo $instance['instagram'] ;?>"
		>
	<input type="text" name="<?php echo $this->get_field_name("linkedin");?>"   placeholder="plz add your linkedin link"
		value="<?php echo $instance['linkedin'] ;?>"
		>
<?php
	
}



	
	public function widget($args,$instance){

		;?>
		<div class="socailIcon widget">
			<h2 class="stay_connected">STAY CONNECTED</h2>
			<div class="social">
				<?php if(strpos($instance['facebook'],"facebook") !== false):?>
				<a href="<?php echo "http://". $instance['facebook'];?>"><span id="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></span></a>
			<?php endif ;?>

			<?php if(strpos($instance['twitter'],"twitter") !== false ):?>
				<a href="<?php echo $instance['twitter'];?>"><span id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
			<?php endif;?>

				<?php if(strpos($instance['instagram'],"instagram") !== false ):?>
				<a href="<?php echo $instance['instagram'];?>"><span id="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
			<?php endif;?>
			<?php if(strpos($instance['linkedin'],"linkedin") !== false ):?>
				<a href="<?php echo $instance['linkedin'];?>"><span id="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
			<?php endif;?>
			</div>
			
		</div>
		
			
	
	
	<?php
}
	}
add_action('widgets_init',function(){
	register_widget('social_Icons');
})
;?>