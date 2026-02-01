---
page: system-status-widget
---
A terminal-style system status widget/sidebar showing live-style metrics and system information, perfect for a footer or sidebar.

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
- Success: #5bec13 (green)
- Warning: #ffaa00 (amber)
- Error: #ff4444 (red)

## Typography
- Font: Space Grotesk, monospace fallback
- Text transform: UPPERCASE for all labels
- Letter spacing: 0.05em

**Widget Structure:**

1. **Header Bar**
   - "SYSTEM_STATUS" title
   - Blinking indicator dot (green = online)

2. **Connection Status**
   - "CONNECTION:" label
   - Status: "ESTABLISHED" in green
   - "SOCKET: 443/TLS"
   - "PROTOCOL: HTTPS/2"

3. **Performance Metrics**
   - "LATENCY:" with value "42ms"
   - "UPTIME:" with value "99.9%"
   - "MEMORY:" with progress bar style "████████░░ 82%"
   - "CPU_LOAD:" with value "0.42"

4. **Server Info**
   - "NODE:" with server identifier
   - "REGION:" with location code
   - "KERNEL:" with version number

5. **Recent Activity Log** (compact)
   - 3-4 lines of mini log entries
   - Format: "[HH:MM] EVENT_TYPE: message"
   - Examples: "[14:32] CACHE_HIT: /posts/", "[14:31] REQUEST: GET /api"

6. **Footer**
   - Last updated timestamp
   - "REFRESH: AUTO" indicator
