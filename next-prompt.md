---
page: boot-sequence
---
A boot sequence animation pattern that displays a terminal startup sequence for first-time visitors or page transitions.

**DESIGN SYSTEM (REQUIRED):**

## Visual Theme
Dark cyberpunk terminal interface with CRT monitor aesthetic.

## Color Palette
- Primary accent: #5bec13 (neon phosphor green)
- Background: #050804 (void black)
- Foreground Muted: #a8b4a8

## Component Specification

**Boot Sequence Container:**
- Full viewport overlay
- Background: #050804
- Z-index: 10000 (above all content)
- Fade out after animation completes

**Boot Text Lines:**
- Font: Monospace
- Color: Primary green with phosphor glow
- Typing animation effect
- Sequential line appearance

**Example Boot Sequence:**
```
[BIOS] Initializing system...
[OK] Memory check: 640K conventional
[OK] Loading TERMINAL_OS v2.0.26
[OK] Mounting /dev/blog
[OK] Network interface: CONNECTED
[OK] Display adapter: CRT_PHOSPHOR_GREEN

TERMINAL_BLOG ready.
Type 'help' for available commands.

> _
```

**Animation Timing:**
- Each line: 50-100ms delay
- Typing effect: 30ms per character
- Total duration: ~3 seconds
- Skip on click/keypress

**Storage:**
- Use sessionStorage to show once per session
- Option to replay via command palette
