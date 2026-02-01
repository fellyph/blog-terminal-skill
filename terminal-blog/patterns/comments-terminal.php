<?php
/**
 * Title: Comments - Terminal Style
 * Slug: terminal-blog/comments-terminal
 * Categories: featured
 * Keywords: comments, discussion, terminal, irc
 * Description: A terminal-style comments section with IRC/chat log aesthetic.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"width":"1px","color":"var:preset|color|border","radius":"0.25rem"}},"backgroundColor":"background-alt","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group has-border-color has-background-alt-background-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace"}},"textColor":"primary","fontSize":"medium"} -->
		<p class="has-primary-color has-text-color has-medium-font-size" style="font-family:monospace">&gt; cat ./comments.log</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"foreground-muted","fontSize":"small"} -->
		<p class="has-foreground-muted-color has-text-color has-small-font-size" style="letter-spacing:0.05em;text-transform:uppercase">LOADING_ENTRIES...</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:comments {"className":"terminal-comments"} -->
	<div class="wp-block-comments terminal-comments">
		<!-- wp:comments-title {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"primary","fontSize":"large"} /-->

		<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"width":"1px","color":"var:preset|color|border","radius":"0.25rem"}},"backgroundColor":"background-alt","layout":{"type":"default"},"className":"terminal-comment"} -->
			<div class="wp-block-group terminal-comment has-border-color has-background-alt-background-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-date {"format":"[Y-m-d H:i:s]","style":{"typography":{"fontFamily":"monospace","textTransform":"uppercase"}},"textColor":"foreground-muted","fontSize":"small"} /-->

						<!-- wp:comment-author-name {"style":{"typography":{"fontFamily":"monospace","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-edit-link {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:comment-content {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.7"}},"textColor":"foreground"} /-->

				<!-- wp:comment-reply-link {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:comments-pagination-previous {"label":"[<< PREV]"} /-->
			<!-- wp:comments-pagination-numbers /-->
			<!-- wp:comments-pagination-next {"label":"[NEXT >>]"} /-->
		<!-- /wp:comments-pagination -->
	</div>
	<!-- /wp:comments -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"border"} -->
	<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"width":"1px","color":"var:preset|color|border","radius":"0.25rem"}},"backgroundColor":"background-alt","layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-background-alt-background-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace"}},"textColor":"primary","fontSize":"medium"} -->
		<p class="has-primary-color has-text-color has-medium-font-size" style="font-family:monospace">&gt; write ./comments.log --append</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-comments-form /-->

</div>
<!-- /wp:group -->
