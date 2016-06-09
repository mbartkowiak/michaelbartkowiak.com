
<!-- begin sidebar -->
<div id="menu">

<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : ?>

</ul>

</div>

<?php return; ?>

<?php endif; ?>

	<?php wp_list_pages(); ?>
	<?php wp_list_bookmarks(); ?>
 <li id="categories"><?php _e('Categories:','classic'); ?>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>
 <li id="search">
   <label for="s"><?php _e('Search:','classic'); ?></label>
   <form id="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
	<div>
		<input type="text" name="s" id="s" size="15" /><br />
		<input type="submit" value="<?php esc_attr_e( 'Search', 'classic' ); ?>" />
	</div>
	</form>
 </li>
 <li id="archives"><?php _e('Archives:','classic'); ?>
 	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
 	</ul>
 </li>
 <li id="meta"><?php _e('Meta:','classic'); ?>
 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php esc_attr_e( 'Syndicate this site using RSS', 'classic' ); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>','classic'); ?></a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php esc_attr_e( 'The latest comments to all posts in RSS', 'classic' ); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>','classic'); ?></a></li>
		<li><?php _e('<a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a>','classic'); ?></li>
		<li><?php _e('<a href="http://wordpress.com/">WordPress.com</a>','classic'); ?></li>
		<?php wp_meta(); ?>
	</ul>
 </li>

</ul>

</div>
<!-- end sidebar -->
