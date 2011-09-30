<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (is_search()) { ?>
       <meta name="robots" content="noindex, nofollow" />
    <?php } ?>
    <title>
       <?php
          if (function_exists('is_tag') && is_tag()) {
             single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
          elseif (is_archive()) {
             wp_title(''); echo ' Archive - '; }
          elseif (is_search()) {
             echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
          elseif (!(is_404()) && (is_single()) || (is_page())) {
             wp_title(''); echo ' - '; }
          elseif (is_404()) {
             echo 'Not Found - '; }
          if (is_home()) {
             bloginfo('name'); echo ' - '; bloginfo('description'); }
          else {
              bloginfo('name'); }
          if ($paged>1) {
             echo ' - page '. $paged; }
       ?>
    </title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="topbar" style="position:relative;margin-bottom:15px;">
      <div class="topbar-inner">
        <div class="container-fluid">
          <a class="brand" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <?php bloginfo('description'); ?>
          <p class="pull-right">Logged in as <a href="#">username</a></p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
        <?php get_sidebar(); ?>
        <div class="content">
            <div class="hero-unit">
                <div style="float:left;margin-right:35px;">
                    <img alt="" src="<?php bloginfo('template_directory') ?>/images/agostonfung.jpg"/>
                </div>
                      <h1>Hello, world!</h1>
                      <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                      <p><a class="btn primary large">Learn more &raquo;</a></p>

            </div>
