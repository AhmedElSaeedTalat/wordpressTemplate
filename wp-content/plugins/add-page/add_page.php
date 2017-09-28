<?php
/*
Plugin Name: add_page
Plugin URI: https://facebook.com
Description: this plugin is used to add the first page
Version: 1
Author: ahmed
*/
class add_page extends WP_Widget{
	public function __construct(){
		parent::__construct(false,$name = __("add pages"));
	}
	public function widget($args,$instance){
		$arguments = [
			'number' => 1 ,
		];
		$pages = get_pages($arguments);
		$title="";
		foreach ($pages as $key => $page) {
			$title =  $page->post_title;
			$image= get_attached_media( 'image',$page->ID  ) ;
			$src = "";
			foreach ($image as $key => $get_src) {
				$src= $get_src->ID;

			}
			


		}
		
	?>
	<section class="widget">
		<p class="styletext"><?php echo $title ;?></p>
	<div class="wrapperImageSideBar">
			<?php echo wp_get_attachment_image($src,$size='page') ;?>
	</div>
	<div class="text_page">
		<?php
		$x = $page->post_content;
				$y = preg_replace("/<img[^>]+\>/i"," ",$x);
				$string_Page= substr($y,0,120);
				?>
				<p><?php echo $string_Page."..."; ?></p>
				
	</div>
	</section>
	
	<?php
	}
}
add_action('widgets_init',function(){
	register_widget('add_page');
})
;?>