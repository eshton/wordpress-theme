<div class="well">
<ul class="nav nav-list">
    <li class="nav-header">Pages</li>
    <li><a href="/"><i class="icon-flag"></i>Front page</a></li>
    <li><a href="/about-me"><i class="icon-flag"></i>About me</a></li>
</ul>

<ul class="nav nav-list">
    <li class="nav-header">Categories</li>

    <?php foreach(get_categories('show_count=1&title_li=') as $i): ?>
      <li><a href="/category/<?php echo $i->slug ?>"><i class="icon-book"></i><?php echo $i->name ?></a></li>
    <?php endforeach; ?>
</ul>
<ul class="nav nav-list">
    <li class="nav-header">RSS</li>
    <li><a href="<?php bloginfo('rss2_url'); ?>"><i class="icon-eye-open"></i>Entries (RSS)</a></li>
</ul>
<ul class="nav nav-list">
    <li class="nav-header">Archives</li>
    <?php wp_get_archives('type=monthly'); ?>
</ul>

<ul class="nav nav-list">
    <li class="nav-header">Links</li>

    <?php foreach(get_bookmarks() as $i): ?>
      <li><a target="_blank" href="<?php echo $i->link_url ?>"><i class="icon-star-empty"></i><?php echo $i->link_name ?></a></li>
    <?php endforeach; ?>
</ul>

<br/>

        <?php get_search_form(); ?>

</div>

<div class="sidebar">
    <img src="http://projecteuler.net/profile/agoston.fung.png" title="Project Euler Profile"/>
    <br/><br/>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
        <?php /*
    	<?php wp_list_pages(); ?>
        <?php wp_loginout(); ?>
        */ ?>
    <?php endif; ?>
</div>
