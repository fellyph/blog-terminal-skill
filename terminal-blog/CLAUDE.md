# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Terminal Blog is a WordPress block theme with a retro 1980s-90s CRT monitor and command-line interface aesthetic. It uses native WordPress Full Site Editing (FSE) with block patterns—no build tools required.

- **WordPress**: 6.4+ required, tested up to 6.7
- **PHP**: 8.0+
- **Design**: Connected to Google Stitch (project ID: 3821108124163278528)

## Development

1. Activate theme in WordPress Admin > Appearance > Themes
2. Edit templates using WordPress Site Editor (FSE)
3. Modify CSS directly in `assets/css/custom.css`
4. Edit PHP in `functions.php` or pattern files in `patterns/`

## Build Commands

```bash
npm run plugin-zip    # Create terminal-blog-dev.zip for distribution
npm run lint:css      # Lint CSS files
npm run lint:js       # Lint JavaScript files
```

## Architecture

### File Structure

```
terminal-blog-dev/
├── theme.json           # WordPress theme config (colors, typography, spacing, block styles)
├── functions.php        # Theme setup, script enqueueing, pattern registration
├── style.css            # Theme metadata header
├── package.json         # npm scripts for zip/lint (@wordpress/scripts)
├── templates/           # Block Editor page templates (HTML)
├── parts/               # Reusable template parts (header.html, footer.html)
├── patterns/            # Block patterns as PHP files
└── assets/
    ├── css/custom.css   # Terminal effects, theme toggle, animations
    └── js/theme-toggle.js  # Dark/light mode with localStorage
```

### Block Patterns

Patterns are PHP files in `patterns/` registered via `theme.json`. They use WordPress native block markup (HTML comments with JSON metadata). Key patterns:

- `terminal-hero.php` - Hero banner with CTA buttons
- `post-card.php` - Grid-ready post card with metadata
- `terminal-window.php` - Window container component
- `theme-toggle.php` - Dark/light mode switcher
- `blinking-cursor.php` - CSS cursor animation utilities
- `ascii-art-header.php` - Responsive ASCII logo variants

### Theme Configuration

All design tokens are in `theme.json`:

- **Colors**: Primary green (#5bec13), background black (#050804), 11 total palette colors
- **Typography**: Space Grotesk font, monospace fallback, uppercase headings
- **Spacing**: 8-step scale (0.25rem to 4rem)
- **Layout**: Content 800px, wide 1200px
- **Custom Variables**: `settings.custom.terminal.*` for glow effects, scanlines, cursor speed

### Dark/Light Mode

CSS custom properties in `assets/css/custom.css` swap between modes:
- `:root` = dark mode (default)
- `[data-theme="light"]` = light mode overrides
- JavaScript in `theme-toggle.js` handles persistence via localStorage

## Key Styling Patterns

- **Phosphor glow**: Multi-layer text-shadow/box-shadow for bloom effect
- **CRT scanlines**: Gradient overlays with animations
- **Terminal cursor**: CSS keyframe blink animation (1s cycle)
- **Selection**: Inverted colors (green bg, black text)

## WordPress Block Theme Conventions

- Templates use `<!-- wp:block-name {"attributes"} -->` comment syntax
- Template parts are referenced with `<!-- wp:template-part {"slug":"header","area":"header"} /-->`
- Patterns use PHP headers for registration metadata and return block markup
- Block styles defined in `theme.json` under `styles.blocks.*`
