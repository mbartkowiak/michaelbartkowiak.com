<?php get_header(); ?>

	<div id="container">
		<div id="content">

			<?php while ( have_posts() ) : the_post(); ?>

			<h2 class="page-title"><a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php echo esc_attr( sprintf( __( 'Return to %s', 'notesil' ), get_the_title( $post->post_parent ) ) ); ?>" rev="attachment"><?php echo get_the_title( $post->post_parent ); ?></a></h2>

			<div id="post-<?php the_ID(); ?>" class="<?php notesil_post_class(); ?>">
				<h3 class="entry-title"><?php the_title(); ?></h3>
				<div class="entry-content">
					<div class="entry-attachment"><a href="<?php echo wp_get_attachment_url( $post->ID ); ?>" title="<?php echo esc_attr( get_the_title( $post->ID ) ); ?>" rel="attachment"><?php echo wp_get_attachment_image( $post->ID, array( 525, 525 ) ); ?></a></div>
					<div class="entry-caption"><?php if ( !empty( $post->post_excerpt ) ) the_excerpt(); ?></div>
					<div class="image-description"><?php if ( !empty( $post->post_content ) ) the_content(); ?></div>
				</div>

				<div id="nav-images" class="navigation">
					<div class="nav-previous"><?php previous_image_link(); ?></div>
					<div class="nav-next"><?php next_image_link(); ?></div>
				</div>

				<div class="entry-meta">
<?php if ( ( 'open' == $post->comment_status) && ( 'open' == $post->ping_status) ) : // Comments and trackbacks open ?>
					<?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'notesil' ), get_trackback_url() ); ?>
<?php elseif ( !( 'open' == $post->comment_status) && ( 'open' == $post->ping_status) ) : // Only trackbacks open ?>
					<?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'notesil' ), get_trackback_url() ); ?>
<?php elseif ( ( 'open' == $post->comment_status) && !( 'open' == $post->ping_status) ) : // Only comments open ?>
					<?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'notesil' ); ?>
<?php elseif ( !( 'open' == $post->comment_status) && !( 'open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
					<?php _e( 'Both comments and trackbacks are currently closed.', 'notesil' ); ?>
<?php endif; ?>
<?php edit_post_link( __( 'Edit', 'notesil' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ); ?>

				</div>
			</div><!-- .post -->

			<?php comments_template(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #container -->

<?php get_footer(); ?>