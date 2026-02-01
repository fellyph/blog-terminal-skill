---
page: dark-light-toggle
---
A dark/light mode toggle pattern that allows users to switch between the default dark terminal theme and a "legacy" green-on-black or light mode variant.

**DESIGN SYSTEM (REQUIRED):**

## Visual Theme
Dark cyberpunk terminal interface with CRT monitor aesthetic.

## Color Palette
- Primary accent: #5bec13 (neon phosphor green)
- Background: #050804 (void black)
- Background Alt: #0a0f09
- Foreground: #f6f8f6
- Foreground Muted: #a8b4a8

## Component Specification

**Toggle Button:**
- Style: Terminal command button `[THEME: DARK]` / `[THEME: LIGHT]`
- Position: Header area or floating corner
- Border: 1px solid #5bec13
- Animation: Subtle glow pulse on toggle

**Light Mode Colors (for reference):**
- Background: #f6f8f6 (Muted Parchment)
- Foreground: #050804 (Void Black)
- Primary: #2e7d10 (Darker green for contrast)
- Border: #a8b4a8

**Functionality:**
- Uses CSS custom properties for theming
- Saves preference to localStorage
- Respects prefers-color-scheme media query
- Toggle animation with smooth transition

**Usage:**
- Can be added to header template part
- Works with system-status widget
- Integrates with existing CRT effects
