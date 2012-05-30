<?php get_header(); ?>	
	<!-- コンテナー -->
	<div id="main_container">	
		<!-- 上下２段組下段 -->
		<div id="main">
			<!-- コンテンツ -->
			<div id="content">
				<?php the_post(); ?>
                <div class="postbox">
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
                 <p class="pagelink">
                 	<span class="oldpage">
					<?php previous_post_link(); ?>
                    </span>
                    <span class="newpage">
                    <?php next_post_link(); ?>
                    </span>
                 </p>
                <!-- コメント部分  -->
                <?php comments_template(); ?>
			<!-- end_content -->
			</div>
            <!-- サイドバー -->
			<?php get_sidebar(); ?>
		<!--end_main -->
		</div>
<!-- フッター -->
<?php get_footer(); ?>
		