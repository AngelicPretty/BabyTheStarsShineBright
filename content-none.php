<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<header class="page-header">
	<style type="text/css">
			.searchgroup {
 margin: auto;
 display: flex;
 line-height: 28px;
 align-items: center;
 position: relative;
 max-width: 190px;
}

 .searchgroup .input {
 width: 100%;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 padding-left: 2.5rem;
 border: 2px solid transparent;
 border-radius: 8px;
 outline: none;
 background-color: #f3f3f4;
 color: #0d0c22;
 transition: .3s ease;
}

.searchgroup .input::placeholder {
 color: #9e9ea7;
}

.searchgroup .input:focus, .searchgroup input:hover {
 outline: none;
 border-color: rgba(234,76,137,0.4);
 background-color: #fff;
 box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
}

.searchgroup .icon {
 position: absolute;
 left: 1rem;
 fill: #9e9ea7;
 width: 1rem;
 height: 1rem;
}
	</style>
	<div class="container">
		<div class="text-center entry-content">
			<h2 class="title-heart title-heartbreak">Nothing Found.<br>ご指定のページが見つかりませんでした。</h2>
			<p>このページのURL：<span class="has-crimson-color">http://sweethoney.great-site.net/</span></p>
			
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p>
		<?php
		/* translators: %s: Post editor URL. */
		printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentythirteen' ), admin_url( 'post-new.php' ) );
		?>
	</p>

	<?php elseif ( is_search() ) : ?>

			<p><?php _e( '申し訳ありませんが、何もあなたの検索用語に一致した。別のキーワードをもう一度試してください', 'twentythirteen' ); ?><br>
			<?php _e( '別のキーワードをもう一度試してください', 'twentythirteen' ); ?></p>
			<p><div class="searchgroup">
  <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
			<form role="search" method="get" class="form-search" action="http://sweethoney.great-site.net/">
  			<input type="text" placeholder="Search" value="" name="s" class="input">
			</form>
		</div></p>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'twentythirteen' ); ?><br>
			<?php _e( 'Please try again with different keywords.', 'twentythirteen' ); ?></p>
		

	<?php else : ?>
<p><div class="searchgroup">
	  <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
				<form role="search" method="get" class="form-search" action="http://sweethoney.great-site.net/">
				<input type="text" placeholder="Search" value="" name="s" class="input">
				</form>
				</div>
			</p>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentythirteen' ); ?></p>
			

	<?php endif; ?>
		</div>
	</div>
</header>

