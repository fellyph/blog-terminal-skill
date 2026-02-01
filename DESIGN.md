# Design System: Terminal Blog Home Page
**Project ID:** 3821108124163278528

## 1. Visual Theme & Atmosphere

The design evokes a **nostalgic retro-computing aesthetic**, channeling the essence of 1980s-90s CRT monitors and command-line interfaces. The atmosphere is:

- **Cyberpunk-Industrial**: Deep, inky darkness punctuated by electric neon green creates a high-contrast, sci-fi ambiance
- **Utilitarian & Functional**: Every element serves a purpose, mimicking the efficiency of old-school terminal UIs
- **Immersive & Cinematic**: CRT scanline overlays and phosphor glow effects transport users into a vintage computing environment
- **Dense yet Organized**: Information-rich layouts reminiscent of system logs and file directories

The overall mood is **mysterious, technical, and evocative**—like accessing a forgotten mainframe from another era.

---

## 2. Color Palette & Roles

### Primary Colors

| Name | Hex Code | Role |
|------|----------|------|
| **Electric Phosphor Green** | `#5bec13` | Primary accent color. Used for interactive elements, links, cursor, borders, and text highlights. Creates the signature "terminal glow" effect. |
| **Void Black** | `#050804` / `#0a0f09` / `#0d140a` | Deep background color variants. The near-pure black creates maximum contrast with the phosphor green. |
| **Muted Parchment** | `#f6f8f6` / `#f7f7f6` | Light mode background (rarely used). Reserved for high-contrast text areas. |

### Secondary Colors

| Name | Hex Code | Role |
|------|----------|------|
| **Warm Terminal Tan** | `#D0BB95` | Secondary accent for certain page variants. Provides a softer, warmer alternative to the harsh green. |
| **Deep Forest Shadow** | `#1d1a15` | Alternative dark background with warmer undertones. |
| **Terminal Gray** | `#2e3928` | Used for scrollbar thumbs and subtle UI elements. A muted green-gray that blends with the dark theme. |

### Effect Colors (RGBA)

| Name | Value | Role |
|------|-------|------|
| **Phosphor Glow** | `rgba(91, 236, 19, 0.5)` | Text shadow effect creating the characteristic CRT phosphor bloom. |
| **Scanline Tint** | `rgba(91, 236, 19, 0.1)` | Subtle green overlay for scanline animation effects. |

---

## 3. Typography Rules

### Font Family
- **Primary Font**: `Space Grotesk` — A geometric sans-serif with a technical, futuristic character
- **Fallback**: `monospace` — Ensures terminal aesthetic is maintained across all systems

### Font Characteristics
- **Text Transform**: `uppercase` throughout for headers and navigation—emphasizes the command-line aesthetic
- **Letter Spacing**: `0.05em` — Slightly expanded tracking for improved readability on dark backgrounds
- **Font Smoothing**: Disabled (`-webkit-font-smoothing: none`) — Creates authentic pixelated rendering reminiscent of CRT displays

### Hierarchy
- **Headers**: Bold weight, uppercase, with phosphor glow text-shadow
- **Body Text**: Regular weight, maintains glow effect at reduced intensity
- **Code/Data**: Monospace styling with tighter spacing for technical content
- **Navigation**: Bracketed format `[LINK]` mimicking command-line syntax

### Special Typography Effects
- **Markdown Headers**: Decorated with ASCII-style underlines (`==========`) at reduced opacity
- **Blinking Cursor**: Underscore character (`_`) with pulse animation, representing active terminal state

---

## 4. Component Stylings

### Buttons & Interactive Elements
- **Shape**: Sharp, squared-off edges with minimal rounding (`border-radius: 0.125rem`)
- **Border**: 1px solid Electric Phosphor Green (`#5bec13`)
- **Background**: Transparent or Void Black
- **Text**: Uppercase, bracketed format (e.g., `[SEND_UPLINK]`)
- **Hover State**: Increased glow intensity, background fill with green at low opacity
- **Box Shadow**: Dual-layer glow effect—inset and outer shadow using primary color at 20-30% opacity

### Cards & Containers
- **Terminal Border Style**:
  ```css
  border: 1px solid #5bec13;
  box-shadow: inset 0 0 20px rgba(91, 236, 19, 0.1),
              0 0 20px rgba(91, 236, 19, 0.1);
  ```
- **Corner Roundness**: Minimal (`0.125rem` to `0.25rem`) — maintains the sharp, technical aesthetic
- **Background**: Void Black with subtle inner glow
- **Content Layout**: Grid-based, mimicking file listings and system directories

### Forms & Inputs
- **Input Fields**: Prefixed with arrow indicator (`>` or `→`)
- **Labels**: System-style naming (e.g., `NAME:`, `EMAIL_ADDR:`, `MESSAGE_BODY:`)
- **Border**: 1px solid with primary color, transparent background
- **Focus State**: Enhanced glow effect, cursor blink animation
- **Placeholder Text**: Dimmed green or gray-green

### Navigation
- **Style**: Horizontal bracketed links `[HOME] [ARCHIVE] [ABOUT] [RSS]`
- **Active State**: Filled background or increased glow
- **Separator**: Implicit spacing, no visible dividers

### Status Badges & Indicators
- **Format**: System-style labels (e.g., `OPERATIONAL`, `CONNECTION: ACTIVE`)
- **Colors**: Primary green for positive states, muted tones for neutral
- **Border**: Thin solid outline with minimal rounding

### Scrollbar
- **Width**: 4-8px (narrow, unobtrusive)
- **Track Color**: `#0d140a` (near-black)
- **Thumb Color**: `#5bec13` (primary green) or `#2e3928` with green border
- **Style**: Matches the terminal aesthetic, no rounded corners

---

## 5. Layout Principles

### Grid System
- **Container Width**: 1280px maximum for desktop
- **Padding**: Generous horizontal padding (6-8rem) creating focused content area
- **Vertical Rhythm**: Consistent spacing using multiples of 4px base unit

### Whitespace Strategy
- **Philosophy**: "Dense but Breathable" — Information-rich layouts with sufficient margins between sections
- **Section Gaps**: Large vertical spacing between major content blocks
- **Line Height**: 1.5-1.7 for body text, ensuring readability despite monospace styling

### Visual Layers
- **Background Layer**: Void Black base
- **Scanline Layer**: CRT overlay effect with horizontal/vertical gradient patterns
- **Content Layer**: Primary text and UI elements
- **Glow Layer**: Text shadows and box shadows creating depth

---

## 6. Animation & Effects

### CRT Scanline Effect
```css
background:
  linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.1) 50%),
  linear-gradient(to right, rgba(91, 236, 19, 0.03), rgba(91, 236, 19, 0.03));
background-size: 100% 4px, 3px 100%;
```
- Creates authentic horizontal scanline interference
- Subtle vertical RGB aberration effect

### Blinking Cursor
```css
@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}
animation: blink 1s step-end infinite;
```
- **Element**: Underscore (`_`) or block cursor
- **Size**: 8-10px width, line-height height
- **Color**: Electric Phosphor Green (`#5bec13`)

### Scrolling Scanline
- Vertical gradient animation moving from top to bottom
- Height: 100px
- Opacity: 0.1
- Creates subtle "refresh" effect reminiscent of CRT monitors

### Text Selection
```css
::selection {
  background: #5bec13;
  color: #0d140a;
}
```
- Inverted colors on selection for high visibility

---

## 7. Prompting Guidelines for Stitch

When generating new screens for this project, use these descriptive phrases:

### Atmosphere
> "Dark cyberpunk terminal interface with CRT monitor aesthetic, electric green accents on deep black background"

### Color References
> "Neon phosphor green (#5bec13) as primary accent against void black (#050804) background with subtle green glow effects"

### Typography
> "Space Grotesk font, uppercase text styling, terminal-style bracketed navigation, ASCII-inspired decorative elements"

### Components
> "Sharp-edged minimal buttons with green borders, translucent containers with inner glow, command-line style form inputs"

### Effects
> "CRT scanline overlay, phosphor text glow, blinking cursor animation, retro computing visual effects"

---

## 8. Screen Reference Index

| Screen | Purpose | Key Elements |
|--------|---------|--------------|
| Terminal Blog Home Page | Main landing | File listing grid, system metrics, navigation |
| Single Post Content View | Article display | Markdown rendering, metadata headers, reading progress |
| Category Terminal View | Archive/category | Filtered file listings, category tags |
| About System Page | About section | System specifications, ASCII art, bio content |
| Contact Terminal Interface | Contact form | Terminal-style form inputs, status indicators |
| Class/Lesson Terminal View | Educational content | Structured learning interface, progress tracking |

---

*Design System generated from Stitch Project Analysis*
*Project: Terminal Blog Home Page (ID: 3821108124163278528)*
