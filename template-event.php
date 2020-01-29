<?php
/**
* Template Name: event
*
*/
acf_form_head();

get_header();

?>
<div id="content">
	
	<?php
	
	acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=> true,
		'post_content'	=> true,
		'new_post'		=> array(
			'post_type'		=> 'post',
			'post_status'	=> 'publish'
		)
	));
	
	?>
	
</div>

<?php get_footer(); ?>