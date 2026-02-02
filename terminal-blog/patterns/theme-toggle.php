<?php
/**
 * Title: Theme Toggle
 * Slug: terminal-blog-dev/theme-toggle
 * Categories: header
 * Keywords: theme, toggle, dark, light, mode, switch
 * Description: Dark/light mode toggle button with terminal aesthetic.
 */
?>
<!-- wp:group {"className":"theme-toggle-wrapper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group theme-toggle-wrapper">
	<!-- wp:html -->
	<button
		class="theme-toggle"
		type="button"
		aria-label="Toggle color theme"
		data-theme="dark"
	>
		<span class="theme-toggle__label">[THEME:</span>
		<span class="theme-toggle__value">DARK</span>
		<span class="theme-toggle__label">]</span>
	</button>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
