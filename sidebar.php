<div class="sidebar">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    <div class="well">
        <?php get_search_form(); ?>
        <h5>Pages</h5>
    	<?php wp_list_pages(); ?>
        <h5>Meta</h5>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
            <?php wp_meta(); ?>
        </ul>
        <h5>Categories</h5>
        <ul>
          <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        <h5>Subscribe</h5>
        <ul>
            <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
            <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
        </ul>
        <?php wp_list_bookmarks(); ?>
    	<h5>Archives</h5>
    	<ul>
            <?php wp_get_archives('type=monthly'); ?>
    	</ul>
    </div>
    <?php endif; ?>
</div>
