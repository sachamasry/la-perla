<div class="row post-pagination">
	<div class="col-lg-12">
		<?php
		the_posts_pagination(array(
			'next_text' => '<i class="fas fa-angle-double-right"></i>',
			'prev_text' => '<i class="fas fa-angle-double-left"></i>',
			'screen_reader_text' => ' ',
			'type'                => 'list'
		));
		?>
	</div>
</div>