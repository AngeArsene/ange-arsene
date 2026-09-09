# AI Design System — "Terminal Craft"

> Synthesized from TrussPHP (trussphp.com) and PestPHP (pestphp.com) visual research.
> Documentation format inspired by ShopVibe's structure only — no ShopVibe colors, type, or components were used.
> Extracted 2026-09-08. This is a set of executable generation rules for another AI, not a design audit.

---

## 1. Design Philosophy

This language is what happens when a command line grows a UI. Both source sites are developer tools that
trust their audience: dense information, monospace confidence, near-black canvases, and one disciplined
accent color doing all the pointing. Nothing is decorative for its own sake — grid lines, corner brackets,
and diagonal accents all read as *instrumentation*, not ornament.

Two personalities live inside this shared frame:
- A **structural/technical** register (Truss): calm, cyan, schema-like, precise.
- A **kinetic/editorial** register (Pest): bold, pink/rose, italic emphasis, momentum.

An AI using this system should pick ONE accent personality per project (or blend deliberately) rather than
running both accent colors at once — see §3.

## 2. Core Visual Principles

1. **Near-black or near-navy canvas, not pure black-on-white.** Both sites live in dark mode as the default
   truth of the brand (Truss: deep navy-blue; Pest: neutral near-black/zinc).
2. **One accent color carries all interactivity.** Everything else is grayscale/blue-scale. The accent never
   spreads across large surfaces — it marks CTAs, links, active states, and small emphasis words only.
3. **Monospace is a first-class display font, not just for code.** Headlines, badges, labels, and buttons
   borrow monospace or monospace-adjacent treatment even outside literal code blocks.
4. **Flat surfaces, hairline borders, no heavy shadows.** Depth comes from a lighter fill one step up from
   the background, plus a 1px border — never a drop shadow stack.
5. **Subtle background instrumentation.** Faint grids (Truss) or thin diagonal accent lines (Pest) sit behind
   hero/footer content at low opacity — always subordinate to text, never fighting readability.
6. **Real, dense content in cards.** Feature grids, roadmap columns, and testimonial walls favor information
   density over whitespace-heavy marketing bigness — this is a builder's site, not a lifestyle brand.
7. **Small badges/pills carry status.** Version tags, "NEW" flags, PASS/FAIL states, PK/FK markers — status is
   always a small rounded chip with a filled or outlined treatment, never plain inline text.
8. **Corner/edge marks as texture.** Small "+" or bracket marks at container corners (seen in Pest docs,
   Truss roadmap footer) reinforce the "blueprint/schematic" feeling.

## 3. Brand & Visual Language

### Two accent personalities (pick one, or define a third in this spirit)

**A. Structural (Truss-derived)**
- Mood: calm, precise, trustworthy, like reading a well-drawn schema.
- Primary accent: a bright cyan/sky blue against deep navy.
- Motion: minimal; connectors and reveals, not bounce.
- Typographic voice: lower-case product names, terse declarative headlines ("See your database structure, live.").

**B. Kinetic (Pest-derived)**
- Mood: confident, fast, slightly cheeky, momentum-forward.
- Primary accent: a hot pink/rose, sometimes paired with a green→cyan→pink gradient reserved for a wordmark only.
- Motion: implied by diagonal accent lines and italic emphasis words.
- Typographic voice: bold declarative claims with one italicized accent phrase per headline ("...and *AI agents*.").

Never mix both accents as co-equal primaries in one interface. If a project wants both flavors (e.g. one
product with two sub-brands), assign each its own page/section and let the accent switch at that boundary.

## 4. Color System

### Structural palette (dark navy, cyan accent)

| Token | Hex | Usage |
|---|---|---|
| `color.background.canvas` | `#0B1A2B` | Page background |
| `color.background.surface` | `#0F2338` | Cards, panels, code blocks |
| `color.background.surface-alt` | `#16324E` | Table row stripe, hovered surface |
| `color.border.default` | `#22496B` | Standard hairline borders |
| `color.border.strong` | `#4681B2` | Emphasized borders, focused inputs |
| `color.text.primary` | `#D7E7F4` | Headings, body text |
| `color.text.muted` | `#7FA2C0` | Secondary text, captions, nav links |
| `color.accent.primary` | `#5FD0E6` | Links, primary CTA fill, active states |
| `color.accent.primary-bright` | `#7FE0F2` | Emphasis words in headlines, hover accents |
| `color.on-accent` | `#0B1A2B` | Text placed on filled accent surfaces |
| `color.grid.faint` | `rgba(120,200,230,0.055)` | Background grid lines |
| `color.grid.strong` | `rgba(120,200,230,0.11)` | Background grid lines, denser zones |
| `color.status.success` | `#5FE6A8` *(inferred, same brightness family as accent)* | Pass/success badges |
| `color.status.warning` | `#C9A24A` *(observed callout gold)* | Warning callout background/border |
| `color.status.info` | `#4C6FE0` *(observed callout indigo)* | Note callout background/border |

### Kinetic palette (near-black, rose accent)

| Token | Hex | Usage |
|---|---|---|
| `color.background.canvas` | `#0A0A0A` *(observed near-black)* | Page background |
| `color.background.surface` | `#141414` | Cards, code panels |
| `color.background.surface-alt` | `#18181B` | Elevated card / secondary panel |
| `color.border.default` | `rgba(255,255,255,0.08)` *(inferred hairline)* | Standard borders |
| `color.text.primary` | `#E4E4E7` | Headings, body |
| `color.text.muted` | `#71717A` *(inferred zinc-500 family)* | Secondary text |
| `color.accent.primary` | `#F43F5E` | CTAs, links, active tab underline, emphasis italics |
| `color.accent.gradient.start` | `#64E6AE` | Reserved for wordmark/logomark only |
| `color.accent.gradient.mid` | `#4ED4FF` | Reserved for wordmark/logomark only |
| `color.accent.gradient.end` | `#F471B5` | Reserved for wordmark/logomark only |
| `color.status.success` | `#4ADE80` *(observed PASS badge green)* | Passing test / success badge |
| `color.status.error` | `#F87171` *(observed FAIL badge red)* | Failing test / error badge |

**DO:**
- Keep the gradient (green→cyan→pink) exclusive to a logomark/wordmark moment — never use it as a UI gradient on buttons or backgrounds.
- Use the single accent for no more than ~10% of any given viewport's surface area.

**DON'T:**
- Introduce a second saturated hue as a co-primary.
- Apply accent color to large background fills.

## 5. Typography

### Structural voice
- **Display/H1**: monospace, bold/semibold, ~50–56px, tight line-height (1.04–1.1), tight tracking (-1.2 to -1.6px). One line of the headline (usually the closing word/phrase) rendered in the bright accent color.
- **H2**: monospace, 14–20px semibold, tighter tracking.
- **Body**: humanist sans (e.g. a Segoe/Inter-family font), 15–16px regular, generous line-height (1.5–1.6).
- **Code/UI labels**: monospace, 13–14px regular, used inside buttons, badges, breadcrumb-style labels, and section eyebrows.
- **Eyebrow/label**: monospace, small caps or literal lowercase, muted color, often prefixed with a glyph (e.g. `—`).

### Kinetic voice
- **Display/H1**: bold grotesk sans, extra-bold weight, 48–64px, line-height ~1.05–1.15, minimal tracking. One phrase per headline set in *italic* and the accent color.
- **H2/Section headline**: bold sans 28–36px, one keyword bolded in accent color.
- **Body**: same grotesk sans, regular weight, 16–18px, muted gray, line-height 1.5.
- **Code**: monospace, 13–15px, syntax-highlighted (see §16 Code Blocks).
- **Eyebrow/label**: monospace, small, accent-colored, always prefixed with `//` (a literal comment-syntax marker) — this is a signature motif, reuse it deliberately.

**AI rule:** whichever voice you choose, reserve italics or the brightest accent tint for exactly one phrase
per headline. Do not italicize or accent-color more than one run of text in the same heading.

## 6. Spacing System

- **Base unit:** 4px grid (both sources use a 4/8px rhythm).
- **Scale:** `4, 8, 12, 16, 20, 24, 32, 40, 56, 80` — pick values from this scale only.
- **Component padding:** button `11px 18–28px`; card `16–24px`; input `8–12px`.
- **Section rhythm:** generous vertical breathing room between homepage sections (~80–120px desktop), tighter
  rhythm inside documentation content (~24–40px between blocks).

`spacing.xs: 4px · spacing.sm: 8px · spacing.md: 16px · spacing.lg: 24px · spacing.xl: 40px · spacing.2xl: 56px · spacing.3xl: 80px`

## 7. Sizing System

- Buttons: small `34–36px` height, medium `42–44px`, large `48–52px`.
- Icon buttons / toggles (theme switch, search trigger): `36–40px` square.
- Avatar / initials circle (testimonial cards): `28–32px`.
- Max content width: docs body column ~`720–760px`; marketing hero column ~`960–1080px`; full bleed sections
  up to `1536px` container.

## 8. Layout System

### Marketing/homepage
- Sticky top header, full-bleed, hairline bottom border, background matches canvas (no separate header color).
- Hero: left-aligned, single column, generous top padding, background grid/diagonal texture behind it.
- Feature sections alternate between a bordered grid-of-cards layout (Truss) and paired code/terminal panel
  layout (Pest) — both are 2–3 column at desktop, stacking to 1 column at mobile.
- Footer: large centered wordmark/CTA moment, then a dense multi-column link directory, then a thin legal bar.
  A single oversized, low-opacity wordmark graphic may bleed off the bottom edge as a closing visual anchor.

### Documentation
- Three-column layout: **left nav** (fixed width ~260–280px, grouped with uppercase section labels), **center
  content** (max ~720px, single column), **right "on this page" rail** (fixed width ~220–260px, sticky, active
  section highlighted in accent color).
- Top bar within docs: search input (pill-shaped, `⌘K`/`Ctrl K` shortcut badge right-aligned) replacing the
  marketing nav links, plus a condensed set of top-level links and the same header chrome (logo, GitHub, theme toggle).
- Breadcrumb-style eyebrow above H1 in the kinetic voice (`// docs / installation`).

### Roadmap / kanban-style pages
- Multi-column board (3–4 columns), each column headed by a status dot (filled = shipped/done, outline = not
  yet) plus a muted subtitle describing the column's certainty level.
- Cards inside a column are simple stacked blocks: title, optional version tag, description, optional small
  pill tag ("community requested"), optional muted issue-link line.

### Social proof / testimonial pages
- Section eyebrow + large headline, then grouped subsections each with their own small header + muted
  subtext, then a 2-column card grid of quotes.
- Each quote card: quotation text, then a footer row with avatar-initial circle, name, and a right-aligned
  source link (platform name + external-link glyph) with a date beneath it.

## 9. Grid System

- 12-column responsive grid for marketing sections, collapsing feature grids from 3→2→1 columns at standard
  breakpoints.
- Documentation content grid is a fixed three-track layout (nav / content / TOC) that collapses the two side
  tracks off-canvas below tablet width.

## 10. Responsive Design

*(Observed screenshots are desktop-only; the following are reasonable, clearly-labeled abstractions.)*

- **Inferred:** collapse the docs three-column layout to a single content column with the left nav behind a
  hamburger/drawer trigger and the "on this page" rail moved above the content or dropped, below ~1024px.
- **Inferred:** feature/testimonial grids drop to 1 column below ~640px; kanban roadmap columns stack
  vertically, full-width, in original left-to-right order.
- **Inferred:** hero CTA button rows wrap to 2 per line, then 1 per line, before overflowing.
- Keep the monospace command/install snippet full-width and horizontally scrollable rather than wrapping, to
  preserve copy-paste integrity.

## 11. Borders & Radius

| Token | Value | Usage |
|---|---|---|
| `radius.sm` | 6px | Inputs |
| `radius.md` | 8px | Buttons, chips, badges |
| `radius.lg` | 12–16px | Cards, code block containers, brand-asset preview tiles |
| `radius.pill` | 9999px | Search bar, some CTA buttons (kinetic voice), status badges |
| `border.hairline` | 1px solid `color.border.default` | Default card/section divider |
| `border.emphasis` | 1–2px solid `color.accent.primary` | Active tab underline, focused input, callout left-bar |

**DO:** stay inside this radius vocabulary; pick pill *or* 8–16px per component family and stay consistent.
**DON'T:** mix a pill button next to an 4px-radius card in the same interface — pick a radius rhythm per project.

## 12. Shadows & Elevation

Both sources are **flat by design** — no drop shadows observed anywhere. Elevation is communicated only by:
1. A lighter fill (`surface` vs `canvas`).
2. A hairline border.
3. Occasionally a colored left-bar (callouts) or top accent-colored underline (active tab).

**AI rule:** never introduce `box-shadow` blur/spread in this system. If a floating element (dropdown, modal)
truly needs separation, use a 1px border plus a background one step lighter than its context — nothing else.

## 13. Backgrounds & Decorative Patterns

- **Structural grid texture:** an extremely faint blue-tinted grid (`color.grid.faint` / `color.grid.strong`
  on hover zones) behind hero and footer sections. Never allowed to reduce text contrast — always sits behind
  a solid or near-solid content panel.
- **Kinetic diagonal accent lines:** thin, sparse diagonal accent-colored lines crossing the hero/footer at a
  shallow angle, plus tiny "+" corner marks at select container edges (seen bottom-left/right of docs pages
  and footer). Both motifs are decorative punctuation, used at low density — 2–4 lines per section, not a
  repeating pattern.
- **Oversized wordmark ghost:** an extremely large, low-opacity version of the product wordmark bleeding off
  the bottom of the footer, used once per site as a closing visual signature.

## 14. Icons

- Inline icons are simple, single-weight line icons (search glyph, external-link arrow, GitHub mark, sun/moon
  theme toggle, checkmark/x for do-don't lists, small directional arrows in buttons).
- Icons inherit `color.text.muted` by default and switch to `color.accent.primary` on hover/active or when
  paired with a status (success/error).
- Status icons (PASS/FAIL, do/don't) sit inside a small filled pill of their status color with contrasting text.

## 15. Imagery & Illustration

Neither source relies on photography or illustration. Visual interest comes entirely from typography, code,
data (schema diagrams, test output), and geometric accents. **AI rule:** default to no photography; if imagery
is required, prefer abstract technical renders (schema diagrams, terminal captures, generated charts) over
lifestyle photography, to preserve the developer-tool register.

## 16. Components

### Buttons
- **Primary (filled):** accent-colored background, `color.on-accent` text, bold/semibold weight, `radius.md`
  (structural) or `radius.pill` (kinetic), `11px 18–28px` padding.
- **Secondary (outline):** transparent background, 1px border in `color.border.default` or `color.text.primary`,
  same radius/padding as primary, text in `color.text.primary`.
- **Ghost:** transparent, muted text, no border, background tint on hover only.
- Button rows commonly mix one filled primary with several outline siblings in a single horizontal group
  (Truss hero pattern) — this is a valid, encouraged composition.

### Links
- Underlined or color-only depending on context; inline body links use `color.accent.primary` with an
  underline; nav links use muted color with accent-color hover, no underline.

### Cards
- Flat surface fill, `radius.lg`, hairline border, `16–24px` padding. Optional colored header bar (see Table/
  Entity Card below) or a top accent-colored strip for emphasis cards.

### Entity / Schema Card (distinctive structural component)
- A card representing a data table: header bar filled solid in the accent color with dark text (table name),
  body rows in monospace listing `type` (muted) + `column name` (primary text) + optional trailing badge
  (`PK`/`FK`) styled as a small bold accent-colored pill on the right edge. Rows separated by hairline dividers.
- Cards connect to each other via thin curved accent-colored connector lines — use sparingly, only to show a
  real relationship, never as pure decoration.

### Terminal / Code Block
- Dark elevated surface, `radius.md–lg`, optional macOS-style three-dot header bar (structural voice) or a
  simple tab bar with an accent-colored active-tab underline (kinetic voice).
- Syntax highlighting: keywords/functions in accent or cyan, strings in a warm yellow/orange, arrows/operators
  in accent pink or muted, comments in muted gray.
- A `copy` affordance (icon or text button) sits top-right or as a distinct right-hand cell.
- Terminal output panels beneath a code block show a `PASS`/`FAIL` pill badge, a checkmark/cross line item, and
  a one-line test summary in muted monospace.

### Inline Code Chip
- Small monospace text on a slightly lighter background, `4–6px` radius, `2–4px` horizontal padding — used
  for filenames, flags, and short code references inside prose.

### Inputs
- Dark surface fill, 1px border (brightens on focus to `color.border.strong` or accent), `radius.sm–md`,
  `8–12px` padding, placeholder in muted text.
- Search input specifically: pill or rounded-rect, left search icon, right-aligned keyboard-shortcut badge
  (`⌘K`), full width in docs top bar.

### Badges / Pills
- **Version/meta badge:** outlined pill, monospace text, muted border, used in hero (e.g. `v1.11.1 · MIT ·
  Laravel 12+`).
- **Status badge (NEW, LIVE):** small filled pill, bold, accent or status color, used adjacent to nav items
  or feature labels.
- **PASS/FAIL badge:** small filled rectangle/pill, green or red, bold uppercase monospace text.

### Callouts / Admonitions
- Left border bar (2–4px) in a status color, tinted background matching that status at low opacity, small
  leading icon, bold label word ("Note", "Running on staging or production"), body text below.
- Status colors: warning = gold/amber, info/note = indigo/blue. *(Success/error callouts are an inferred
  extension using the existing success/error tokens.)*

### Navigation (sidebar, docs)
- Grouped sections with uppercase, small, letter-spaced, muted group labels.
- Nav items: plain text default, accent-tinted background + bold text for the active item (structural voice)
  or bold + underline for the active item (kinetic voice). Optional trailing small "New"/"Live" pill badge.

### Breadcrumbs
- Kinetic voice: monospace, muted, slash-separated, prefixed with `//` (e.g. `// docs / installation`).
- Structural voice: rendered instead as the "On this page" right-rail rather than a top breadcrumb — treat
  breadcrumb and TOC as alternate solutions to the same wayfinding need; use one or the other, not both.

### Tabs
- Underline-style tabs (seen in the kinetic code panel): flat row of labels, active tab gets a colored
  underline bar and brighter text; inactive tabs are muted with no border.

### Kanban / Roadmap Board
- Column header: status dot (filled/outline) + column title + muted one-line subtitle describing certainty.
- Column body: vertically stacked cards (see Cards), consistent card anatomy: title → optional version tag →
  description → optional tag pill → optional muted "Issue #" link line.

### Testimonial / Quote Card
- Quotation text at top (no quotation marks needed if visually distinct), footer row: initials-avatar circle
  (accent-colored ring or fill), name, right-aligned source-platform link + date stacked or inline.

### Statistics Band
- Row of 3–5 stat blocks, each: bold large number + muted label beneath, optional small icon, no borders
  between blocks — separated by whitespace only.

### Brand Asset Preview Tile
- Paired light/dark preview swatches side-by-side inside one bordered card, generous internal padding, action
  row along the bottom (`copy svg`, `download`) as small ghost/outline buttons, label text bottom-left.

### Do / Don't List
- Two-column layout, each column headed by a small filled pill (`DO` green, `DON'T` red), list items prefixed
  with a colored check or × glyph.

### Color Palette Swatch
- Rounded-rect color block with the hex code and a short usage label stacked beneath it, arranged in a grid.

### Corner Bracket / Plus Marks
- Small decorative `+` or right-angle bracket glyphs, accent-colored, placed at select container corners
  (footer edges, docs page edges) as a schematic/blueprint signature — use at most 2–4 per page, never as a
  repeating border pattern.

## 17. Interaction States

| State | Treatment |
|---|---|
| Default | Base surface/border/text tokens as documented per component. |
| Hover | Border brightens to `border.strong`/accent; ghost/ outline buttons gain a subtle background tint; links shift to accent color. |
| Focus | 1–2px accent-colored ring or border brightening; never remove focus indication. |
| Active/Pressed | Slight darken of the filled surface; underline tabs get their accent bar. |
| Selected | Nav item / tab gets bold text + accent underline or tinted background. |
| Disabled | ~40% opacity, no hover response, default cursor. *(Inferred — not observed in source screenshots.)* |
| Loading | *(Inferred)* — favor a simple animated monospace ellipsis or a thin accent-colored progress bar over spinners, to stay consistent with the flat/technical register. |
| Success | Green fill/text on `PASS` badges and success callouts. |
| Warning | Gold/amber left-bar callout. |
| Error | Red fill/text on `FAIL` badges and error callouts. |

## 18. Developer Documentation Patterns

- Every code sample is runnable-looking: real command syntax, a `$` or `→` prompt glyph, and often a paired
  output block showing the actual result (pass/fail, table output).
- "Last updated" date and an "Edit page" link sit at the bottom of docs content — signal that the docs are
  living, versioned artifacts.
- Prev/Next pagination cards close every docs page: bordered rectangles with a directional arrow, small
  "Previous"/"Next" label, and the destination page title in bold.
- Callouts are used to flag environment-specific gotchas (e.g. "Running on staging or production") rather
  than generic tips — keep callout copy specific and actionable.
- A dedicated "brand assets" or "in the wild" page is a legitimate top-level nav item for a well-loved dev
  tool — treat social proof and brand kit as first-class documentation, not just marketing.

## 19. Accessibility

*(Inferred from general best practice; not directly measurable from screenshots.)*
- Maintain WCAG AA contrast between `text.primary`/`text.muted` and their background surfaces — the muted
  blue-gray tones in both palettes should be checked against the near-black/navy canvas at final implementation.
- Never rely on color alone for PASS/FAIL or DO/DON'T distinctions — both sources already pair color with an
  icon and/or text label; preserve that pairing.
- Keep focus rings visible (accent-colored) on every interactive element, including inside dark code panels.
- Respect the grid/diagonal background textures' low opacity — do not increase their contrast in a way that
  competes with foreground text.

## 20. AI Layout Generation Rules

1. Start every page with the same header chrome (logo/wordmark, primary nav, one filled CTA, GitHub-style
   external link, theme toggle) regardless of page type.
2. Marketing pages: hero → 1–2 dense feature sections → social proof (logos/testimonials/stats) → closing CTA
   band → deep footer directory. Do not skip the closing CTA band even on short pages.
3. Documentation pages: always three-track (nav / content / TOC) at desktop; always end with Prev/Next
   pagination and an "Edit page" + "Last updated" line.
4. Never place two large accent-filled elements adjacent to each other — separate filled CTAs with at least
   one outline/ghost element or whitespace.
5. Reuse the eyebrow-label + headline pattern (`// label` or `— LABEL`) at the top of every major section to
   keep the technical-document rhythm consistent site-wide.

## 21. AI Component Generation Rules

1. Default every button, card, and input to the flat/hairline-border treatment in §11–12 — never generate a
   drop shadow unless explicitly asked to break from this system.
2. When generating a data/table-like component, prefer the Entity/Schema Card pattern (§16) over a generic
   HTML table whenever the content is genuinely relational.
3. When generating status indicators, always produce a small pill/badge component — never bare colored text.
4. When generating code or terminal UI, always include a realistic result/output line beneath the code, styled
   per the Terminal / Code Block spec.
5. Limit italic/emphasis-color treatment to exactly one phrase per headline (§5).

## 22. AI Responsive Design Rules

1. Collapse three-column docs layouts to single-column with a drawer nav below ~1024px (inferred).
2. Drop feature/testimonial grids to 1 column below ~640px; kanban boards stack full-width vertically
   (inferred).
3. Keep command-line snippets horizontally scrollable, never wrapped, at all breakpoints.
4. Preserve the header's CTA + GitHub + theme-toggle cluster at all sizes; nav links may collapse into a
   menu first.

## 23. Do / Don't

**DO:**
- Use the flat, hairline-bordered, near-black/navy canvas as the non-negotiable base.
- Let monospace typography carry technical credibility in headlines, labels, and badges.
- Keep exactly one accent hue per project and use it sparingly.
- Pair every status color with an icon or text label, never color alone.
- Treat grid textures and diagonal accent lines as low-opacity background texture only.
- Give documentation pages a real three-column IA with nav, content, and an on-page TOC.

**DON'T:**
- Recreate the TrussPHP or PestPHP homepage layout, section order, or exact copy.
- Reuse either site's logo, wordmark, or illustration assets.
- Introduce drop shadows, gradients-as-backgrounds, or a second saturated accent hue.
- Let the background grid/diagonal texture reduce foreground text contrast.
- Stack a pill-radius button next to a sharp-radius card in the same interface.
- Mix the structural (cyan) and kinetic (rose) accent systems as co-equal primaries.

## 24. Design Tokens

```
color.background.canvas          #0B1A2B   (structural)  |  #0A0A0A   (kinetic)
color.background.surface         #0F2338   (structural)  |  #141414   (kinetic)
color.background.surface-alt     #16324E   (structural)  |  #18181B   (kinetic)
color.border.default             #22496B   (structural)  |  rgba(255,255,255,.08) (kinetic, inferred)
color.border.strong              #4681B2   (structural)  |  color.accent.primary (kinetic, inferred)
color.text.primary               #D7E7F4   (structural)  |  #E4E4E7   (kinetic)
color.text.muted                 #7FA2C0   (structural)  |  #71717A   (kinetic, inferred)
color.accent.primary             #5FD0E6   (structural)  |  #F43F5E   (kinetic)
color.accent.primary-bright      #7FE0F2   (structural)
color.on-accent                  #0B1A2B   (structural)  |  #FFFFFF   (kinetic, inferred)
color.status.success             #5FE6A8   (structural, inferred) | #4ADE80 (kinetic, observed)
color.status.error               n/a (structural, inferred needed)  | #F87171 (kinetic, observed)
color.status.warning             #C9A24A   (structural, observed callout)
color.status.info                #4C6FE0   (structural, observed callout)
color.grid.faint                 rgba(120,200,230,.055)
color.grid.strong                rgba(120,200,230,.11)
color.accent.gradient.start/mid/end   #64E6AE / #4ED4FF / #F471B5   (kinetic wordmark only)

typography.font.display          monospace (structural) | grotesk sans, extra-bold (kinetic)
typography.font.body             humanist sans, 400      | grotesk sans, 400
typography.font.code             monospace, 400
typography.size.display          50–56px
typography.size.h2               20–36px
typography.size.body             15–18px
typography.size.code             13–15px
typography.lineHeight.display     1.04–1.15
typography.lineHeight.body        1.5–1.6
typography.letterSpacing.display  -0.9px to -1.6px

spacing.xs / sm / md / lg / xl / 2xl / 3xl    4 / 8 / 16 / 24 / 40 / 56 / 80  (px)

radius.sm / md / lg / pill        6 / 8 / 12–16 / 9999   (px)
border.hairline                   1px solid color.border.default
border.emphasis                   1–2px solid color.accent.primary

layout.container.docs             ~720–760px
layout.container.hero             ~960–1080px
layout.container.full              up to 1536px
layout.sidebar.nav                 260–280px
layout.sidebar.toc                 220–260px

breakpoint.sm   640px   (inferred)
breakpoint.md   1024px  (inferred)
breakpoint.lg   1280px  (inferred)

component.button.height.sm/md/lg   34–36 / 42–44 / 48–52  (px)
component.button.padding           11px 18–28px
component.card.padding             16–24px
component.card.radius              12–16px
component.input.height             40–44px
component.input.padding            8px 12px
component.code.radius              8–16px
```

## 25. CSS Variable Reference

```css
/* Structural voice */
:root[data-voice="structural"] {
  --canvas: #0B1A2B;
  --surface: #0F2338;
  --surface-alt: #16324E;
  --border: #22496B;
  --border-strong: #4681B2;
  --text: #D7E7F4;
  --text-muted: #7FA2C0;
  --accent: #5FD0E6;
  --accent-bright: #7FE0F2;
  --on-accent: #0B1A2B;
  --status-success: #5FE6A8;
  --status-warning: #C9A24A;
  --status-info: #4C6FE0;
  --grid-faint: rgba(120,200,230,.055);
  --grid-strong: rgba(120,200,230,.11);
  --radius-sm: 6px;
  --radius-md: 8px;
  --radius-lg: 16px;
  --radius-pill: 9999px;
}

/* Kinetic voice */
:root[data-voice="kinetic"] {
  --canvas: #0A0A0A;
  --surface: #141414;
  --surface-alt: #18181B;
  --border: rgba(255,255,255,.08);
  --text: #E4E4E7;
  --text-muted: #71717A;
  --accent: #F43F5E;
  --on-accent: #FFFFFF;
  --status-success: #4ADE80;
  --status-error: #F87171;
  --gradient-start: #64E6AE;
  --gradient-mid: #4ED4FF;
  --gradient-end: #F471B5;
  --radius-sm: 6px;
  --radius-md: 8px;
  --radius-lg: 16px;
  --radius-pill: 9999px;
}
```

## 26. Final AI Generation Checklist

- [ ] Canvas is near-black or near-navy, never pure white/light as the default.
- [ ] Exactly one accent hue is doing all interactive/emphasis work.
- [ ] Monospace appears somewhere beyond code blocks (labels, badges, or headline).
- [ ] No drop shadows anywhere; elevation reads via surface-tone + hairline border only.
- [ ] Every status (pass/fail, do/don't, new/live) renders as a small badge/pill, never bare text.
- [ ] Background grid or diagonal-line texture is present but clearly subordinate to foreground content.
- [ ] Buttons follow the filled-primary + outline-secondary(+ghost) pattern, never two filled primaries side by side.
- [ ] Docs-style pages use the three-track nav/content/TOC layout and end with Prev/Next pagination.
- [ ] Radius vocabulary is consistent (pill-family OR 8–16px-family, not both) within one interface.
- [ ] No TrussPHP or PestPHP logo, wordmark, exact copy, or section-for-section layout has been reproduced.

---

*This document is a reusable generation system, not a record of either source site. Build original
compositions from these tokens and rules.*
