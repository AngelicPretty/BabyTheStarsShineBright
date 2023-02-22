<?php 
			$args = array( 
			  'post_type' => 'attachment', // 属于附件类型
			  'numberposts' => -1, // 查出所有内容
			  'post_status' => null, // 发布状态
			  'post_mime_type' => 'image', // 附件类型为图片
			  'post_parent' => $post->ID // 隶属于这篇文章
			); 
			$attachments = get_posts( $args );
			$attachments_guid = array_column($attachments,'guid');
			$attachments_date = array_column($attachments,'post_date');
			$attachments_title = array_column($attachments,'post_title');
			$attachments_content = array_column($attachments,'post_content');
			$attachments_name = array_column($attachments,'post_name');
			$attachments_url = array_column($attachments,'post_excerpt');
			$attachments_id = array_column($attachments,'ID');
			// 如果存在
			if ( $attachments ) {
				// 循环输出
				
				 for($i=0;$i<sizeof($attachments);$i++) {
					
					echo '<div class="col-sm-6 col-lg-4">';
					echo '<article class="loop post-'.wpjam_get_attachment_id($attachments_guid[$i]).' seriesarchive type-seriesarchive status-publish has-post-thumbnail hentry brand-ap">'; 
					echo '<figure class="effect-zoom">';
					echo '<a href="http://sweethoney.great-site.net/galleryindex/'.$attachments_url[$i].'/'.$attachments_name[$i].'/" class="link-after">';
					echo '<img src="'.$attachments_guid[$i].'" alt="Airy tiny check" width="760" height="454"></a></figure>';
					echo '<p class="seriesarchive_meta">';
					echo '<time datetime="'.$attachments_date[$i].'">'.$attachments_date[$i].'</time> / '.$attachments_content[$i].'</p>';
					echo '<h3>'.$attachments_title[$i].'</h3>';
					echo '</article>';
					echo '</div>';
				}
}?>

