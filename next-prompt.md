---
page: author-profile
---
A terminal-style author/user profile page displaying the author as a "system user" with their biography, stats, and recent posts in a terminal output format.

**DESIGN SYSTEM (REQUIRED):**

## Visual Theme
Dark cyberpunk terminal interface with CRT monitor aesthetic, electric green accents on deep black background.

## Color Palette
- Primary accent: #5bec13 (neon phosphor green)
- Background: #050804 (void black)
- Background alt: #0a0f09 (deep forest)
- Foreground: #f6f8f6 (muted parchment)
- Foreground muted: #a8b4a8 (terminal gray)
- Border: #2e3928 (dark green-gray)

## Typography
- Font: Space Grotesk, monospace fallback
- Text transform: UPPERCASE for headers and navigation
- Letter spacing: 0.05em expanded tracking
- Text shadow: 0 0 5px rgba(91, 236, 19, 0.5) phosphor glow

## Components
- Sharp-edged minimal buttons with green borders
- Translucent containers with inner glow
- Command-line style bracketed navigation [LINK]
- File listings with metadata (date, type, size)
- Avatar displayed as ASCII art or within a terminal frame

## Effects
- CRT scanline overlay
- Phosphor text glow

**Page Structure:**

1. **Header** - Standard terminal navigation bar
2. **User Info Section** - Display as "whoami" command output:
   - "> whoami" command
   - Username/display name
   - Avatar in a terminal-styled frame
   - Role/permissions (e.g., "ADMIN | AUTHOR | EDITOR")
3. **Biography Section** - Display as "cat ~/.profile" output:
   - Bio text formatted as a config file
   - Website, social links as environment variables
4. **Statistics Panel** - System-style metrics:
   - Total posts count
   - Total comments
   - Member since date
   - Last active timestamp
5. **Recent Posts** - "ls -la ~/posts" style listing:
   - File listing table format
   - Permissions, date, title, category
   - Links to each post
6. **Footer** - Standard footer with status indicators
