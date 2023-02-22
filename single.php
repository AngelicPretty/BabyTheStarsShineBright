<?php get_header(); ?>
<div class="wrap">
	<nav aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb effect-link" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="http://sweethoney.great-site.net/"><span itemprop="name">トップページ</span></a><meta itemprop="position" content="1"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item active" aria-current="page"><a itemprop="item" href="http://sweethoney.great-site.net/category/"><span itemprop="name">Category</span></a><meta itemprop="position" content="2"></li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item">
					<?php $categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
					echo strip_tags("$categories_list","<a>");
					?>
				</li>
				<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="3"></li>
			</ol>
		</div>
	</nav>
	<header class="page__header">
		<div class="container">
<p class="text-cursive"><i class="fas fa-heart" aria-hidden="true"></i>Article</p>		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
	<article id="post-<?php the_ID(); ?>" itemscope="" itemtype="http://schema.org/Article" class="post-115823 store_info type-store_info status-publish has-post-thumbnail hentry area-sendai area-nagoya area-ikebukuro"  <?php post_class();?> >
				<header class="post__header">
						<div class="entry-meta">
							<p class="small">
							<?php content_header(); ?>
							<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link" >', '</span>' ); ?>
						</p>
					<h1 itemprop="headline" class="post__header--title"><?php the_title(); ?></h1>
						</div>
				</header>
						<section itemprop="mainEntityOfPage" class="post__content entry-content">
							
								<?php content_tex() ?>
						</section>
	</article>
	<?php get_template_part('aside'); ?>
			</div>
				<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
