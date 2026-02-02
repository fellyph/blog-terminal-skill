<?php
/**
 * Title: Post Card
 * Slug: terminal-blog-dev/post-card
 * Categories: posts
 * Keywords: post, card, blog
 * Description: A terminal-style post card with metadata.
 * Block Types: core/query
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"width":"1px","color":"var:preset|color|border","radius":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:0.25rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"foreground-muted","fontSize":"small"} -->
			<p class="has-foreground-muted-color has-text-color has-small-font-size" style="text-transform:uppercase">ID: 0x2A7F</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"foreground-muted","fontSize":"small"} -->
			<p class="has-foreground-muted-color has-text-color has-small-font-size" style="text-transform:uppercase">|</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"foreground-muted","fontSize":"small"} -->
			<p class="has-foreground-muted-color has-text-color has-small-font-size" style="text-transform:uppercase">DATE: 2026-01-15</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase">CATEGORY</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
	<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20)">Post-Title-Here.txt</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"foreground-muted","fontSize":"small"} -->
	<p class="has-foreground-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)">A brief excerpt of the post content goes here, providing a preview of what readers can expect...</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"primary","fontSize":"small"} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.05em;text-transform:uppercase">[OPEN_FILE]</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"foreground-muted","fontSize":"small"} -->
		<p class="has-foreground-muted-color has-text-color has-small-font-size" style="text-transform:uppercase">~5 MIN READ</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
