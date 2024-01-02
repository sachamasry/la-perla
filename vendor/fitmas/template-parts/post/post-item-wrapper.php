<?php
if(is_archive()){
	$post_item_layout = fitmas_option('fitmas_archive_layout', 'right-sidebar');
}else if(is_search()){
	$post_item_layout = fitmas_option('fitmas_search_layout', 'right-sidebar');
}else{
	$post_item_layout = fitmas_option('fitmas_blog_layout', 'right-sidebar');
}

if($post_item_layout == 'grid'){
	$post_column = 'grid-post-item col-lg-4 col-md-6';
}else if ($post_item_layout == 'grid-ls' || $post_item_layout == 'grid-rs'){
	$post_column = 'grid-post-item col-lg-6 col-md-6';
}else{
	$post_column = 'col-lg-12';
}
?>

<div class="<?php echo esc_attr($post_column); ?>">
	<div class="single-post-item blog-card style4">
		<?php get_template_part( 'template-parts/post/post-item');?>
	</div>
</div>