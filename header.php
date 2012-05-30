<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- ヘッダー -->
<head>
    <title>
        <?php wp_title(); ?>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
    <?php /* 要必要？ */
		wp_head();
	?>
	
</head>
<body>
    <div id="head-continer">
        <!-- ヘッダー -->
        <div id="header">
            <h1><a href="<?php echo home_url(); ?>">
                <?php echo bloginfo('name'); ?></a></h1>
        </div>
        <!-- 背景表示 -->
        <div id="header_images"></div>
        
    </div>