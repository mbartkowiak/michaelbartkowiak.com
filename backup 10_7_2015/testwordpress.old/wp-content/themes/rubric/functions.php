<?php
/**
 * @package WordPress
 * @subpackage Rubric
 */

$themecolors = array(
	'bg' => 'ffffff',
	'text' => '000000',
	'link' => 'b54141',
	'border' => 'eeeeee',
	'url' => 'b54141',
);

add_filter( 'body_class', '__return_empty_array', 1 );

define('HEADER_TEXTCOLOR', 'B54141');
define('HEADER_IMAGE', '%s/images/rubric/pen-sm.jpg'); // %s is theme dir uri
define('HEADER_IMAGE_WIDTH', 215);
define('HEADER_IMAGE_HEIGHT', 150);

function header_style() {
?>
<style type="text/css">
#header{
	background: url(<?php header_image() ?>) no-repeat top right;
}
<?php if ( 'blank' == get_header_textcolor() ) { ?>
#header a {
	display: none;
}
<?php } else { ?>
#header a {
	color:#<?php header_textcolor() ?>;
}
<?php } ?>
</style>
<?php
}

function rubric_admin_header_style() {
?>
<style type="text/css">
#header{
	background: url(<?php header_image() ?>) no-repeat top right;
	width: 550px;
	height: 160px;
	font-family: Georgia;
	font-weight: normal;
}
#header h1{
font-size: 32px;
font-weight: normal;
padding-top: 20px;
text-align: left;
}
#header h1 a{
	color:#<?php header_textcolor() ?>;
	text-decoration: none;
	border-bottom: none;
}

<?php if ( 'blank' == get_header_textcolor() ) : ?>
#headimg h1 {
	display: none;
}
<?php endif; ?>

</style>
<?php
}

add_custom_image_header('header_style', 'rubric_admin_header_style');

if ( function_exists('register_sidebars') )
	register_sidebars(1);

add_theme_support( 'automatic-feed-links' );

// Custom background
add_custom_background();

function rubric_custom_background() {
	if ( '' != get_background_image() || '' != get_background_color() ) : ?>
	<style type="text/css">
	<?php
		// If the user uploads a background color but not a background image hide the theme default background image.
		if ( '' != get_background_color() && '' == get_background_image() ) : ?>
		body {
			background-image: none;
		}
	<?php endif; ?>
		#header {
			background-image: none;
		}
		a:link,
		a:visited {
			border: 0;
		}
		#content,
		.sticky {
			background-color: transparent;
			border: 0;
		}
	</style>
	<?php endif;
}
add_action( 'wp_head', 'rubric_custom_background' );

function rubric_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
?>
<li <?php comment_class( empty ( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<div id="div-comment-<?php comment_ID() ?>">
		<div class="comment-author vcard">
			<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php comment_text() ?>
			<p><cite><?php comment_type( __( 'Comment','classic' ), __( 'Trackback','classic' ), __( 'Pingback','classic' ) ); ?> <?php _e( 'by','classic' ); ?> <span class="fn"><?php comment_author_link() ?></span> &#8212; <?php comment_date() ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></cite> <?php edit_comment_link( __( 'Edit This','classic' ), ' | ' ); ?>
				<span class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'before' => ' | ', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</span>
			</p>
		</div>
	</div>
<?php }