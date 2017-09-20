<?php
/*
Plugin Name: add scoial Icons
Plugin URI: https://facebook.com
Description: this plugin is used to add social Icons to page
Version: 1
Author: ahmed
*/
class social_Icons extends WP_Widget{
	public $facebook;
	public function __construct(){
		parent::__construct(false,$name = __("social_Icons"));
	}
	public function form($instance){
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];

	;?>
		<input type="text" name="<?php echo $this->get_field_name("facebook");?>" value="plz add your facebook link">
		<input type="text" name="<?php echo $this->get_field_name("twitter");?>"   value="plz add your twitter link">
	<!-- <form action="post">
		<input type="text" name="twitter">
		<button>Twitter</button>
	</form>
	<form action="post">
		<input type="text" name="vk">
		<button>VK</button>
	</form> -->
	
<?php

}
	
	public function widget($args,$instance){

		;?>
		<div class="socailIcon">
			<h2 class="stay_connected">STAY CONNECTED</h2>
			<?php if(strpos($instance['facebook'],"facebook") !== false):?>
			<span> <?php echo humescores_get_svg(['icon'=>'facebook']);?></span>
			<?php endif ;?>

		<?php if(strpos($instance['twitter'],"twitter") !== false):?>
			<span><?php echo humescores_get_svg(['icon'=>'twitter']);?></span>
		<?php endif;?>
		</div>
		
			
	
	
	<?php
}
	}
add_action('widgets_init',function(){
	register_widget('social_Icons');
})
;?>