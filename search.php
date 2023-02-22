<?php get_header(); ?>

<div class="wrap">
	<nav aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb effect-link" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="http://sweethoney.great-site.net/"><span itemprop="name">Top Page</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item active" aria-current="page"><span itemprop="name">「<?php printf( __( '%s', ), get_search_query() );?>」Search Result</span><meta itemprop="position" content="2"></li>
			</ol>
		</div>
	</nav>
	<header class="page__header">
		<div class="container">
<h1 itemprop="headline" class="text-cursive"><i class="fas fa-search"></i> Search</h1>		</div>
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
