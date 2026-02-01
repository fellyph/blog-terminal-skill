# SITE.md - Terminal Blog

## 1. Site Vision

A retro terminal-inspired WordPress blog that evokes the aesthetic of 1980s-90s CRT monitors and command-line interfaces. The site combines nostalgia for vintage computing with modern web technologies, creating an immersive experience for developers, tech enthusiasts, and digital creatives.

**Target Audience:** Developers, tech enthusiasts, retro computing fans, digital creatives

**Core Values:**
- Authenticity in the retro-computing aesthetic
- Clean, readable content despite the stylized presentation
- Performance-first approach
- Accessibility considerations for all users

---

## 2. Stitch Project

**Project ID:** `3821108124163278528`
**Project Title:** Terminal Blog Home Page
**Device Type:** Desktop (1280px)
**Color Mode:** Dark

### Design Theme Configuration
- **Primary Color:** `#5bec13` (Electric Phosphor Green)
- **Font:** Space Grotesk
- **Roundness:** ROUND_FOUR (minimal rounding)
- **Saturation:** 2

---

## 3. WordPress Theme

**Theme Name:** Terminal Blog
**Theme Directory:** `terminal-blog/`
**WordPress Version:** 6.4+
**PHP Version:** 8.0+

### Theme Structure
```
terminal-blog/
├── style.css
├── theme.json
├── functions.php
├── templates/
│   ├── index.html
│   ├── home.html
│   ├── single.html
│   ├── page.html
│   ├── archive.html
│   ├── 404.html
│   ├── search.html
│   ├── page-about.html
│   └── page-contact.html
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/
│   ├── terminal-hero.php
│   ├── post-card.php
│   └── terminal-window.php
└── assets/
    └── css/
        ├── custom.css
        └── editor-style.css
```

---

## 4. Sitemap (Existing Pages)

### Stitch Screens
- [x] Terminal Blog Home Page (main)
- [x] Single Post Content View
- [x] Category Terminal View
- [x] About System Page
- [x] Contact Terminal Interface
- [x] Class/Lesson Terminal View
- [x] TERMINAL_OS_v6.0_PROTOTYPE
- [x] TERMINAL_OS // MOBILE_BLOG

### WordPress Templates
- [x] index.html - Fallback template
- [x] home.html - Blog home page
- [x] single.html - Single post view
- [x] page.html - Default page template
- [x] archive.html - Archive/category view
- [x] 404.html - Not found page
- [x] search.html - Search results
- [x] page-about.html - About page
- [x] page-contact.html - Contact page
- [x] author.html - Author archive page

### WordPress Patterns
- [x] terminal-hero.php - Hero section
- [x] post-card.php - Post card layout
- [x] terminal-window.php - Terminal window container
- [x] error-404.php - 404 error page with terminal aesthetic
- [x] search-results.php - Grep-style search results
- [x] author-profile.php - Whoami-style author profile
- [x] comments-terminal.php - IRC-style comments section
- [x] system-status.php - System metrics widget
- [x] blinking-cursor.php - Animated cursor elements + CSS utilities
- [x] category-archive.php - Terminal directory listing for archives
- [x] theme-toggle.php - Dark/light mode toggle with localStorage

---

## 5. Roadmap (Pending Work)

### High Priority
- [x] **Enhanced CRT Overlay** - Add full-page scanline effect as a block pattern (Added to custom.css)
- [x] **Blinking Cursor Pattern** - Create a pattern with animated terminal cursor (Created blinking-cursor.php + CSS utilities)
- [x] **System Status Widget** - Dynamic footer with "system metrics" (uptime, memory, etc.) (Created system-status.php pattern)
- [x] **Category Archive Improvements** - File listing grid with terminal-style metadata (Created category-archive.php pattern)

### Medium Priority
- [x] **404 Page Enhancement** - "FILE_NOT_FOUND" terminal error screen (Created error-404.php pattern)
- [x] **Search Results Page** - "grep" style search results display (Created search-results.php pattern)
- [x] **Author Page Template** - User profile as "system user" output (Created author-profile.php pattern)
- [x] **Comments Section** - Terminal-style threaded comments (Created comments-terminal.php pattern)

### Low Priority
- [x] **Dark/Light Mode Toggle** - Switch between dark terminal and light mode (Created theme-toggle.php pattern + JS)
- [ ] **ASCII Art Header** - Optional ASCII logo pattern
- [ ] **Boot Sequence Animation** - Intro animation for first-time visitors
- [ ] **Command Palette** - Keyboard shortcut navigation (/)

---

## 6. Creative Freedom (Ideas)

When the roadmap is empty, consider these ideas:

1. **RSS Feed Page** - Styled as "data stream output"
2. **Changelog/Version History** - Site updates in terminal commit log format
3. **Easter Eggs** - Hidden commands or Konami code responses
4. **Terminal Games** - Simple text-based games (snake, typing test)
5. **Matrix Rain Effect** - Optional background animation
6. **Typewriter Effect** - Animated text reveal on page load
7. **System Log Pattern** - Decorative log entries as design elements
8. **File Browser Pattern** - Directory tree navigation component

---

## 7. Design Sync Guidelines

### From Stitch to WordPress

When integrating a new Stitch screen:

1. **Download HTML** from `htmlCode.downloadUrl`
2. **Extract patterns** - Identify reusable components
3. **Map to blocks** - Convert HTML to WordPress block markup
4. **Update theme.json** - Add any new colors, spacing, or typography
5. **Test in Site Editor** - Verify visual consistency

### From WordPress to Stitch

When generating new screens for existing WordPress pages:

1. **Reference DESIGN.md** - Always include design system in prompts
2. **Match existing patterns** - Use same component styles
3. **Specify dimensions** - Desktop: 1280px width
4. **Include navigation** - Maintain consistent header/footer

### Color Mapping

| Stitch | WordPress CSS Variable |
|--------|----------------------|
| `#5bec13` | `var(--wp--preset--color--primary)` |
| `#050804` | `var(--wp--preset--color--background)` |
| `#0a0f09` | `var(--wp--preset--color--background-alt)` |
| `#f6f8f6` | `var(--wp--preset--color--foreground)` |
| `#a8b4a8` | `var(--wp--preset--color--foreground-muted)` |
| `#2e3928` | `var(--wp--preset--color--border)` |

---

## 8. Quality Checklist

Before marking a page as complete:

- [ ] Visual fidelity matches Stitch design
- [ ] All links are functional (no `href="#"`)
- [ ] Responsive behavior tested (mobile/tablet/desktop)
- [ ] Accessibility: proper heading hierarchy, focus states, color contrast
- [ ] Performance: no render-blocking resources
- [ ] Cross-browser: tested in Chrome, Firefox, Safari
- [ ] Print styles: readable when printed
- [ ] SEO: proper meta tags and semantic HTML
