<?php
	// ウィジェト
	register_sidebar();
	
	// 受信したコメント
	function mydesign($comment, $args, $depth){
		$GLOBALS['comment']=$comment; 
?>
	<li class="compost">
		<?php comment_text(); ?>
		<p class="cominfo">
			<?php comment_date(); ?>
			<?php comment_time(); ?>
			|
			<?php comment_author_link(); ?>
		</p>
	</li>
<?php
	}
	
	// カスタムメニュー
	register_nav_menus(array('navigation' => 'ナビゲーションバー'));
	
	// カスタムヘッダー
	add_custom_image_header('','admin_header_style');
	function admin_header_style(){
		/*ブラウザのWindowサイズに関係なく指定された大きさで表示する*/
		?>
		<style type="text/css">
			#headimg{ width: 760px!important }
		</style>
		<?php
	}
	
	/* 文字重なり表示をしない */
	define('NO_HEADER_TEXT', true);
	/* ヘッダー画像の指定 */
	define('HEADER_IMAGE', '%s/default_header.jpg');
	define('HEADER_IMAGE_WIDTH', 760);
	define('HEADER_IMAGE_HEIGHT', 200);
	
	// カスタム背景
	add_custom_background();
?>