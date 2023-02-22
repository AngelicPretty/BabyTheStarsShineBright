<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Little_Fish
 * @since Little Fish 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" class="loop-archive store_info type-store_info status-publish has-post-thumbnail hentry area-harajuku" <?php post_class();?> >
		<div class="attachment-media">
			<figure class="effect-zoom">
			<a href="<?php the_permalink($post->ID); ?>" class="link-after"></a>
			<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail('thumbnail'); ?>
			<?php } else {?>
			<img src="http://sweethoney.great-site.net/wp-content/themes/babyssb/images/post-default.png" alt="BABY高崎店8周年記念イベント第1弾『Bサンプルセール開催』のお知らせ" width="150" height="150">
 <?php } ?></figure>
		</div>
	<div class="post-content">
	
		<div class="post-content-body">
        <div class="entry-meta">
				<?php baby_entry_meta();?>
				<p class="post-time"><?php edit_post_link( __( '<font color="pink">Edit</font>', 'twentythirteen' ), '<span class="edit-link" >', '</span>' ); ?></p>
			
		</div><!-- .entry-meta -->
		<?php if ( is_single() ) : ?>
		
			<?php the_title(); ?>
			<?php else : ?>
			<!-- <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>-->
			<h2 class="entry-title">
			<?php the_title(); ?>
			<?php endif; // is_single() ?>
				<?php if ( is_search() || is_category() ) : // Only display excerpts for search. ?>
				<div class="entry-summary">
				<small class="text-muted"><?php the_excerpt(); ?></small>
				</div> <!--.entry-summary -->
				<?php else : ?>
				<div class="entry-content">
					<?php
						the_content(
							sprintf(
								/* translators: %s: Post title. */
								__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
								the_title( '<span class="screen-reader-text">', '</span>', false )
							)
						);

						wp_link_pages(
							array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								' 	'  => '</span>',
							)
						);
					?>
			</div><!-- .entry-content -->
			<?php endif; ?>
				<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<p class="readmore text-lang_en"><img src="http://sweethoney.great-site.net/wp-content/themes/babyssb/images/comment.png" alt=""><font color="pink">&nbsp' . __( 'Leave a comment', 'twentythirteen' ) . '&nbsp»</font></p>','<p class="readmore text-lang_en"><img src="http://sweethoney.great-site.net/wp-content/themes/babyssb/images/comment.png" alt=""><font color="pink">&nbsp'. __( 'One comment so far', 'twentythirteen' ) . '&nbsp»</font></p>', __( 'View all % comments', 'twentythirteen' ) ); ?>
			
					</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
		</h2>
		</div>
	 <!--.entry-header -->
	</div>
</article><!-- #post -->
