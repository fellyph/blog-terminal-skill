---
page: comments-section
---
A terminal-style comments section with threaded replies displayed as a chat log or IRC-style conversation.

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
- Text transform: UPPERCASE for headers and labels
- Letter spacing: 0.05em expanded tracking
- Text shadow: 0 0 5px rgba(91, 236, 19, 0.5) phosphor glow

## Components
- Sharp-edged minimal buttons with green borders
- Translucent containers with inner glow
- Command-line style bracketed actions [REPLY] [REPORT]
- Timestamps in terminal format

**Page Structure:**

1. **Comments Header**
   - "> cat ./comments.log" command prompt
   - Comment count: "FOUND: 12 ENTRIES"

2. **Comment Form** (at top)
   - "> write ./comments.log --append" command
   - Input fields styled as terminal inputs:
     - "NAME:" input
     - "EMAIL:" input (optional indicator)
     - "MESSAGE:" textarea
   - "[SUBMIT_COMMENT]" button

3. **Comments List** - IRC/chat log style:
   - Each comment as a log entry:
     - Timestamp: "[2026-02-01 14:32:00]"
     - Username in brackets: "<admin_user>"
     - Comment text
     - "[REPLY]" action link
   - Nested replies indented with "└──" prefix
   - Author comments highlighted with different border color

4. **Pagination** - If many comments:
   - "SHOWING 1-10 OF 42 ENTRIES"
   - "[LOAD_MORE]" button

5. **Empty State** - When no comments:
   - "NO_ENTRIES_FOUND"
   - "Be the first to initialize the comment log."
