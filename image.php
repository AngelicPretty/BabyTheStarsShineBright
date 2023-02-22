<?php
/**
 * The template for displaying image attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="wrap">
	<nav aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb effect-link" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="http://sweethoney.great-site.net/"><span itemprop="name">Top Page</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="http://sweethoney.great-site.net/gallery/"><span itemprop="name">Styling Gallery</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item active" aria-current="page"><span itemprop="name">「<?php the_title(); ?>」Image</span><meta itemprop="position" content="2"></li>
			</ol>
		</div>
	</nav>
	<header class="page__header">
		<div class="container">
		<h1 itemprop="headline" class="text-cursive"><i class="fa-duotone fa-aperture"></i>Media</h1>		</div>
	</header>
			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>

			<article id="post-<?php the_ID(); ?>" class="seriesarchive type-seriesarchive status-publish has-post-thumbnail hentry brand-baby" <?php post_class( 'image-attachment' ); ?>>
			<header class="entry-header">
				<div class="container">
					<div class="entry-details-meta">
						<?php
					/* translators: 1: Date, 2: Date, 3, Parent permalink, 4, Post title, 5: Post title. */
					$published_text = __( '<span class="badge badge-pink">%5$s</span>&nbsp;Published on <time datetime="%1$s">%2$s</time><a href="%3$s" title="Go to %4$s" rel="gallery"></a>', 'twentythirteen' );
					$published_text = '<div class="entry-meta-time">' . $published_text . '</div>';
					$post_title     = get_the_title( $post->post_parent );
					if ( empty( $post_title ) || 0 == $post->post_parent ) {
						$published_text = '<div class="entry-meta-time"><time datetime="%1$s">%2$s</time></div>';
					}

					printf(
						$published_text,
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date() ),
						esc_url( get_permalink( $post->post_parent ) ),
						esc_attr( strip_tags( $post_title ) ),
						$post_title
					);

					$metadata = wp_get_attachment_metadata();
					printf(
						'<a href="%1$s" title="%2$s">%3$s (%4$s &times; %5$s)</a>&nbsp;',
						esc_url( wp_get_attachment_url() ),
						esc_attr__( 'Link to full-size image', 'twentythirteen' ),
						__( '<a class="link-after">Full resolution', 'twentythirteen' ),
						$metadata['width'],
						$metadata['height'],
						'</a>'
					);

					echo '<a class="link-after" href="'.wp_get_attachment_url().'"><font color="black">View</font></a>';
					?>
					</div>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					
				</div>
			</header><!-- .entry-header -->

				<div class="entry-meta">
					<figure class="entry-thumbnail">
						<?php twentythirteen_the_attached_image(); ?>
					</figure>
				</div><!-- .entry-meta -->
				


			</article><!-- #post -->

		<?php endwhile; // End of the loop. ?>
		</div><!-- #content -->
<?php get_footer(); ?>
