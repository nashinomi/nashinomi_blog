<?php get_header(); ?>	
	<!-- コンテナー -->
	<div id="main_container">	
		<!-- 上下２段組下段 -->
		<div id="main">
			<!-- コンテンツ -->
			<div id="content">
				<?php if(is_category()): ?>
					<p id="pagetitle">
						<?php single_cat_title(); ?>
					</p>
				<?php endif; ?>			
				<?php if(is_month()): ?>
					<p id="pagetitle">
						<?php single_month_title(); ?>
					</p>
				<?php endif; ?>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="postbox">
                <?php
				/*
					// 板カテゴリー表示は検討中
                    <span class="plateFont">
                        <?php 
							$cat_now=get_the_category();
							$cat_name= $cat_now[0];
							//print_r($cat_now);
							echo $cat_name->cat_name;
						?>
                    </span>
					*/
                 ?>
					<h2 class="date-header">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
 
					<div class="post">
						<?php the_content(); ?>
					</div>
                    <div class="content_bottom">
                        <p class="postinfo">
                            <?php echo get_the_date('Y年Fd日 l'); the_time(); ?>
                            |
                            <a href="<?php comments_link(); ?>">コメント
                            <?php comments_number(' (0) ',' (1) ',' (%) '); ?></a>
                        </p> 
                    </div>
             	 </div>
				<?php endwhile; endif; ?>
				<?php if(is_archive()): ?>
                
					<p class="pagelink">
						<span class="oldpage">
							<?php next_posts_link('&laquo; 古い記事'); ?>
						</span>
						<span class="newpage">
							<?php previous_posts_link('新しい記事 &raquo;'); ?>
						</span>
					</p>
                
				<?php endif; ?>
			<!-- end_content -->
			</div>
            
			<?php get_sidebar(); ?>
		<!--end_main -->
		</div>
<!-- フッター -->
<?php get_footer(); ?>
		