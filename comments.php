<div id="comments">
	<?php if(have_comments()): ?>
	<h3>コメント</h3>
	<ul>
		<?php wp_list_comments('callback=mydesign'); ?>
	</ul>
	<?php endif; ?>
	<?php comment_form(); ?>
	
	<p id="comfeed">
		<?php post_comments_feed_link(); ?>
	</p>
	<!-- トラックバック部分 -->
	<?php if(pings_open()): ?>
		<p id="trurl">
			<strong>トラックバックURL:</strong>
			<?php trackback_url(); ?>
		</p>
	<?php endif; ?>
</div>

