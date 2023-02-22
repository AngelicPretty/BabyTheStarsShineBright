<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Little_Fish
 * @since Little Fish 1.0
 */

get_header(); ?>
<div class="wrap">
	<nav aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb effect-link" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="http://sweethoney.great-site.net/"><span itemprop="name">トップページ</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="http://sweethoney.great-site.net/category/"><span itemprop="name">Category</span></a><meta itemprop="position" content="2"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item active" aria-current="page"><span itemprop="name">					<?php
				/* translators: %s: Category title. */
				printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) );
				?></span><meta itemprop="position" content="3"></li>
			</ol>
		</div>
	</nav>
	<header class="page__header">
		<div class="container">
<p class="text-cursive"><i class="fa-duotone fa-book-open-cover"></i> Category Archives</p><p class="small">Category: <?php
				/* translators: %s: Category title. */
				printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) );
				?></p></div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
		<?php if ( have_posts() ) : ?>
			<?php
			// Start the loop.
			while ( have_posts() ) :the_post();?>
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<nav aria-label="Page navigation"><ul class="page-numbers">
						<?php babyssb_paging_nav(); ?>
					</ul>
					</nav>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
					
		</div><!-- #content -->
	</div><!-- #primary -->
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
