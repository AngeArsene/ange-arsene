# AI Design System v2 — "Fixed Rail Portfolio"

> Synthesized from full-page research on two personal-portfolio references:
> **Isak** (tfisak.vercel.app/bg-video-v2#home) and **Alaia Ashby** (bestwpware.com/html/tf/alaia-demo,
> Envato template). Existing extraction files `tfisak.md` and `bestwpware.md` were used as a starting
> token set and corrected/expanded against the actual screenshots below, since a token file is not
> authoritative over what a screenshot shows.
> Extracted 2026-09-21. This supersedes `ai-design-system.md` (the TrussPHP/PestPHP system) for this
> project — that earlier system produced a result that read as generic/AI-templated; this one is built
> specifically to avoid that.

---

## 0. Screenshot coverage audit

**Isak — 9 screenshots, full single-page coverage:** Home/hero, About, Experience (timeline), Work
Highlights, Services (accordion), Tech Stack, Testimonials, Contact, Footer. This is a complete page.

**Alaia — 4 screenshots (browser-chrome visible, ignored as noise):** Home/hero, About, Selected Work
(portfolio grid with filters), Journal (blog listing). The left rail shows icons for a video/reel section
and a mail/contact section that were **not captured** — those two sections are marked `(inferred)` below,
built by extrapolating Alaia's serif/gold/bordered-card visual language plus Isak's equivalent sections
(which were captured) as the closest available real reference. Flagging this rather than silently
inventing them as if observed.

---

## 1. Design Philosophy

Both references reject the "top navbar + full-width hero + 3-column icon cards" template that reads as
generic AI output. In its place they share one deliberate structural move: **the primary navigation is a
slim, icon-only rail that stays fixed while a single content pane scrolls through named sections** — there
is no traditional horizontal nav bar anywhere on either site. That single decision is most of what makes
these feel hand-built rather than templated, and it is the core structural signature this system exists to
preserve.

From there the two sites diverge into distinct editorial personalities — one kinetic and technical
(Isak), one calm and literary (Alaia) — but both commit to: a real photographic portrait (never a generic
avatar), a numbered/labeled system for organizing content (timeline dates, "No. 01" case numbers, dated
journal entries), and short pill-shaped "eyebrow" labels with an icon prefix instead of plain uppercase
section headers.

## 2. Core Visual Principles

1. **No horizontal navbar, ever.** Navigation lives in a fixed vertical icon rail (left or right edge),
   4–8 icons, each mapped to a section or page. This is the single most important rule in this system.
2. **One real portrait, prominently placed**, not stock photography scattered through the page — usually
   duotone/monochrome or cool-toned, treated as a design element (grain, color cast) rather than a plain
   headshot.
3. **Eyebrow = icon + short label inside a pill/chip**, placed above every major section headline
   (`ABOUT`, `— SELECTED WORK`, `TECH STACK`). Never a bare uppercase word with no container.
4. **Numbering and dating as a structural device**: case-study cards get "No. 01/02/03…", timelines get
   year ranges, journal entries get a category + date line. This replaces decorative iconography with real
   information as the visual anchor.
5. **Filter/tab pills for content collections** (`All / Design / Development / Branding`) instead of a
   plain grid with no way to narrow it.
6. **Generous negative space + one huge display headline per section**, set in a distinctive display face
   (grotesque sans or high-contrast serif) — never a generic system-font headline.
7. **A closing "signature" moment in the footer**: an oversized, outlined/ghost version of the
   name/wordmark, paired with a short quotation — a deliberate, non-generic sign-off rather than a plain
   link list.
8. **Flat, hairline-bordered cards**, occasional soft large-blur shadow for lift (Alaia only) — never a
   heavy drop-shadow stack.
9. **Underline-only form inputs** in the contact section (no boxed input fields) — this alone reads as much
   less template-generated than the boxed-input pattern most AI-built forms default to.

## 3. Brand & Visual Language — two voices

### A. Monochrome Studio (Isak-derived)

- Mood: energetic, technical, "available for work" confidence, slightly playful (typing-cursor effect,
  circular award-seal badge, animated smoke/fog background video).
- Canvas: near-black, single accent = a saturated signal green.
- Layout signature: a **persistent fixed profile card** on the left (photo + name + bio + CTAs + socials)
  that never scrolls, paired with a scrolling content pane and a slim icon rail fixed to the far right edge.
- Typographic voice: grotesque sans display type, punchy short headlines with 1–2 words pill-highlighted in
  the accent color directly inside the sentence (`I'm building`**websites**`& `**brands**` that people
  remember`).

### B. Editorial Gold (Alaia-derived)

- Mood: calm, literary, ten-years-of-craft confidence, understated luxury.
- Canvas: near-black, single accent = warm gold, with a secondary muted teal-green used only for small
  category labels inside the work grid.
- Layout signature: a **slim icon rail fixed to the left edge** (no profile card — just a small circular
  avatar/initial at the top of the rail), full-bleed content area with generous left padding.
- Typographic voice: high-contrast serif display type set very large, with one phrase per headline in
  *italic* and the accent color; longer, more reflective body copy than Isak's.

**AI rule:** pick ONE voice per project (see §20 for the recommendation for this specific portfolio). Do
not merge the fixed-profile-card pattern with the serif-italic headline pattern in the same build — each
voice's layout signature and typographic voice are a matched pair.

## 4. Color System

### Monochrome Studio (Isak)

| Token | Hex / value | Usage |
|---|---|---|
| `color.background.canvas` | `#0F0F0F` | Page background |
| `color.background.surface` | `#222222` | Cards, the fixed profile card, accordion panels |
| `color.text.primary` | `#FFFFFF` | Headings, body text |
| `color.text.muted` | `#949494` | Secondary text, captions, bio copy |
| `color.accent.primary` | `#00DE51` | Pill-highlighted words, active nav icon, quote marks, progress-bar fill, timeline dots, "Available for Work" indicator dot |
| `color.overlay.white-8/40/56/72/92` | `#ffffff14 / #fff6 / #ffffff8f / #ffffffb8 / #ffffffeb` | Glass/scrim overlays on the smoke-video background, hover states |
| `color.overlay.black-6/15/40/50/56/72` | `#0000000f / #00000026 / #0006 / #00000080 / #0000008f / #000000b8` | Scrims over background media, pressed states |
| `color.light-mode.surface` *(inferred from theme-toggle presence)* | `#F5F5F5` | Alternate light-theme background, since a sun/moon toggle exists but light mode wasn't captured |

### Editorial Gold (Alaia)

| Token | Hex / value | Usage |
|---|---|---|
| `color.background.canvas` | `#0A0C0F` | Page background |
| `color.background.surface` | `#14171C` | Cards, feature-icon tiles, journal cards |
| `color.background.surface-alt` | `#1B1F25` | Secondary elevated surface (nested cards, hover) |
| `color.border.hairline` | `rgba(236,237,239,.09)` | Default card border |
| `color.border.strong` | `rgba(236,237,239,.16)` | Emphasized border, focused state |
| `color.text.primary` | `#ECEEF1` | Headings, body |
| `color.text.muted` | `#9AA1AB` | Secondary text |
| `color.text.faint` | `#5C6470` | Tertiary text, ticker marquee items |
| `color.accent.primary` | `#C9A24B` | CTA fills, italic headline phrase, active filter pill, numbered badges |
| `color.accent.primary-light` | `#D4B56F` | Hover/lighter accent moments |
| `color.accent.secondary` | `#2F9C82` | Small category labels in the work grid ("DEVELOPMENT", "BRANDING") |
| `color.accent.on-primary` | `#0A0C0F` | Text on filled-gold buttons/badges |
| `color.status.danger` | `#D1603D` | Error/destructive states (inferred usage, token observed) |

## 5. Typography

### Monochrome Studio
- **Display/H1**: Apfel Grotesk (or a close grotesque-sans alternative), weight 500, 56–60px, line-height
  1.04–1.1, tracking −1.2px. One or two words per headline get wrapped in a pill-shaped accent-colored
  highlight rather than a plain color change.
- **H2/section headline**: same family, 36–40px, weight 500, tracking −0.8px.
- **Body**: Inter, 16px regular, line-height 1.5.
- **Eyebrow label**: Inter or the display face at small size, uppercase, inside a pill chip with a small
  leading icon.
- **Micro-copy (bio, captions)**: Inter 14–15px, muted color.

### Editorial Gold
- **Display/H1**: Fraunces (high-contrast serif), weight 500, up to 104px on a true hero, line-height 0.98,
  tracking −1.04px. One phrase per headline set in *italic* and the accent gold.
- **H2/section headline**: Fraunces, 40–48px, same italic-accent-phrase convention (e.g. "Ten years *of
  turning* rough ideas...").
- **Body**: Manrope, 16–19px regular, line-height 1.6 — noticeably more generous/readable than Isak's body
  copy, matching the more literary tone.
- **Eyebrow label**: small caps, letter-spaced, prefixed with an em-dash (`— ABOUT`) rather than an icon
  chip on some sections, though the portfolio-grid section instead uses the icon-chip style — both are
  valid within this voice; pick one and use it consistently across all sections of a single build.
- **Category/meta labels** (work-grid category, journal date+category): small caps, letter-spaced, muted or
  accent-secondary colored.

**AI rule (both voices):** never fall back to a generic system sans (Inter/Arial/Helvetica-only) for
display headlines — the distinctive display face is doing a large share of the "not generic" work here.

## 6. Spacing System

- **Base unit:** 4px grid (both sources).
- **Scale:** `4, 8, 12, 16, 20, 24, 28, 32, 40, 72` (Monochrome Studio) / `8, 12, 16` core with larger
  section gaps observed up to ~96–120px (Editorial Gold — its scale is sparser/more generous; treat 8/12/16
  as the component-level increments and extrapolate larger multiples of 8 for section rhythm).
- **Fixed rail width:** 90–100px (Editorial Gold, icon-only) or 320–380px (Monochrome Studio, full profile
  card).
- **Content pane left offset:** equal to whichever rail width is in use, plus one spacing unit of gutter.

## 7. Sizing System

- Rail icon buttons: 40–48px square touch target, icon itself ~20–24px.
- Primary/secondary CTA buttons: 44–52px height.
- Numbered badge (portfolio grid): small pill, ~28–32px height, positioned as a corner overlay on the card
  image (top-left), not inline with text.
- Avatar circle (rail top, Editorial Gold): 40–48px.
- Portrait image (profile card, Monochrome Studio): fills the card width, roughly 4:5 to 3:4 aspect ratio.
- Testimonial portrait (Monochrome Studio): ~280–320px square-ish, generous rounded corners.

## 8. Layout System

### Global shell (both voices)
- **Fixed vertical icon rail** (left, Editorial Gold; right, Monochrome Studio) spanning the full viewport
  height, containing: a home/logo mark, 4–7 section icons, and a theme-toggle control, generally with the
  active section's icon highlighted in the accent color.
- **Single scrolling content pane** occupying the remaining width, sections separated by generous vertical
  spacing, each introduced by an eyebrow chip + display headline.
- No sticky top bar with a logo-left/links-right pattern — that convention is deliberately absent from this
  system.

### Monochrome Studio specific
- **Fixed profile card**, ~340–380px wide, pinned to the left edge and NOT part of the scrolling content:
  portrait photo top, social icons top-right of the card, a vertical rotated "Available for Work" status
  tab on the card's left edge with a live status dot, greeting headline with a blinking-cursor effect,
  short bio paragraph, a divider, then a CTA row (arrow-only icon button, filled pill primary button "Let's
  talk", and a plain-text+icon secondary "Download CV" link).
- A small floating **live date/time readout** in the top-right corner of the viewport (decorative,
  real-time).
- **Timeline component** for Experience: a vertical line with filled dots, year-range in a left column,
  role/company/description in a right column, most-recent entry at top.
- **Accordion component** for Services: one section expanded at a time (showing overlapping device/image
  mockups + tag pills + description), collapsed siblings show only a title + a plus icon.
- **Horizontal skill/tool rows** for Tech Stack: icon + name + one-line description on the left, a
  track-and-fill progress bar with a percentage label on the right.

### Editorial Gold specific
- **Two-column About layout**: large duotone portrait image on the left (roughly 40% width), headline +
  body + a 2×2 grid of small bordered feature-icon cards on the right, closed out by a horizontal
  **marquee/ticker row** of tool names separated by bullet dots, scrolling or static.
- **Filterable numbered portfolio grid** for Selected Work: filter pills top-right (`All` active by
  default), 3-column card grid below, each card full-bleed image with a small "No. 0X" badge overlaid at
  the top-left corner and a category label + bold title beneath the image.
- **Journal/blog grid**: 2-column card layout, each card a thumbnail image + small caps "CATEGORY · DATE"
  meta line + bold title + one-line muted excerpt.
- **(inferred) Contact section**: follows the same eyebrow + serif headline pattern as the rest of the
  voice; reasonable to build as a large headline + underline-style form (matching Isak's contact form
  convention, since no boxed-input pattern was ever observed in either source) + an email address displayed
  as plain text alongside the submit button.
- **(inferred) Video/reel section**: the rail includes an icon for it but content wasn't captured; if this
  portfolio has no video content, it is safe to omit this rail icon entirely rather than build a section
  with nothing real to show — do not invent placeholder video content.

## 9. Grid System

- Portfolio/work grid: 3 columns desktop, 2 tablet, 1 mobile.
- Journal grid: 2 columns desktop, 1 mobile.
- About feature-card grid (Editorial Gold): 2×2 desktop, collapsing to 1 column mobile.
- Tech-stack rows / timeline entries: always single-column, full content-pane width.

## 10. Responsive Design

*(Both sources are desktop screenshots; the following extends the observed desktop patterns using the same
reasoning documented in the previous design system — clearly labeled as inferred.)*

- **Inferred:** below ~1024px, collapse the fixed profile card (Monochrome Studio) into a normal
  in-flow block at the top of the content, and collapse the icon rail into either a bottom tab bar or a
  hamburger-triggered drawer — the "no horizontal navbar" principle can flex to a bottom rail on mobile
  without breaking the spirit of the rule.
- **Inferred:** the Editorial Gold left icon rail becomes a top-left hamburger or a bottom rail below
  ~768px; the About two-column layout stacks the portrait above the text.
- Numbered work-grid cards and journal cards both drop to 1 column below ~640px.
- Keep the ticker/marquee row's items in a single non-wrapping horizontally-scrollable line at every
  breakpoint.

## 11. Borders & Radius

| Token | Value | Usage |
|---|---|---|
| `radius.sm` | 6–8px | Small chips, tags |
| `radius.md` | 12–14px | Cards, feature tiles, journal cards |
| `radius.lg` | 20–24px | Larger media cards, profile card container |
| `radius.pill` | 9999px | All primary/secondary buttons, eyebrow chips, filter tabs, tag pills, the "Available for Work" status tab |
| `border.hairline` | 1px solid `color.border.hairline`/`rgba(255,255,255,.08)` (inferred equivalent for Monochrome Studio) | Card borders |

**Correction note:** the source token file for Isak listed a conflicting `8px` button radius alongside a
`50px`/pill radius vocabulary entry — the screenshots clearly show fully pill-shaped buttons throughout, so
this system treats **pill as authoritative** for all Isak-derived buttons and chips.

## 12. Shadows & Elevation

- **Monochrome Studio:** flat, no shadows — elevation comes from the `surface` fill vs. `canvas`, plus
  hairline borders, matching the flat convention from the first design system.
- **Editorial Gold:** mostly flat, but uses one large soft shadow tier for lift on selected elements:
  `rgba(0,0,0,0.45) 0px 20px 60px 0px`. Use sparingly — on the profile-card equivalent or a single hero
  visual, never on every card in a grid.

## 13. Backgrounds & Decorative Patterns

- **Smoke/fog video background** (Monochrome Studio): a slow-moving, grayscale, abstract smoke/marble
  texture plays behind the fixed profile card and scrolling content at low contrast — always subordinate to
  foreground text, never a bright or high-motion distraction. This is a strong, distinctive signature of
  this voice; implement as a muted looping background video or an equivalent animated/static grayscale
  fluid-texture image if video isn't feasible.
  - **AI rule (image-generation safety):** any generated background art for this motif must stay abstract —
    smoke, fluid, marble, or grain textures only. Do not generate photorealistic human likenesses, text, or
    recognizable logos into this background layer.
- **Oversized outlined "ghost" wordmark in the footer** (both voices): a large, outline-only (stroke, no
  fill) rendering of the name/wordmark, often partially mirrored/flipped, sits behind the final footer
  content as a quiet signature — reuse this pattern; it reads as intentional and custom rather than
  templated.
- **Circular award/credential seal** (Monochrome Studio hero): a small rotated circular badge with
  curved text around its edge ("AWARD WINNING AGENCY — SINCE 2022") intertwined with a decorative ribbon
  shape — use only when there's a real credential/award to display; don't fabricate one.
- **Numbered corner badges** (Editorial Gold work grid): small pill badges reading "No. 01", "No. 02"...
  overlaid on the top-left corner of each project image — purely a structural/wayfinding device, not
  decorative filler.

## 14. Icons

- Rail navigation icons: simple single-weight line icons (house, person, briefcase/grid, sparkle, layers,
  hexagon cluster, list, paper-plane, video camera, mail) — consistent stroke weight across the whole set.
- Section eyebrow icons: small, matched thematically to the section (briefcase for experience, sparkle for
  highlights, paper-plane for contact).
- Social icons: simple circular buttons containing platform glyphs (X, LinkedIn, a portfolio/Behance-style
  mark, GitHub) — always grouped together near the portrait, never scattered.

## 15. Imagery & Illustration

- **Real portrait photography is mandatory** in this system — both references anchor their entire identity
  on one strong photographic portrait (duotone/monochrome for Isak, cool-toned color grade for Alaia).
  Never substitute an illustrated avatar or generic stock headshot if a real photo is available.
- Project/case-study imagery should be real product shots, UI screenshots, or styled mockups (phone-in-hand,
  laptop-on-desk) — not abstract gradients standing in for missing content.
- Where a genuine project screenshot doesn't exist, follow the missing-asset rule from the prior design
  system: source a real, freely-licensed image that visually matches the project's actual domain, and note
  its source/license for later replacement — never a gray placeholder box.

## 16. Components

### Fixed Profile Card (Monochrome Studio — signature component)
Portrait photo fills the card top; social icon row top-right; rotated "Available for Work" status tab with
live indicator dot on the card's outer edge; greeting headline with a blinking text-cursor effect; short bio
paragraph; hairline divider; CTA row (icon-only arrow button + filled pill primary button + text+icon
secondary link). This entire card is position-fixed and does not scroll with the page.

### Icon Rail Nav (both voices — signature component)
Vertical, fixed full-height, 4–8 icon buttons each linking to a section/route, active item highlighted in
the accent color (fill or icon-color change), a settings/theme-toggle control grouped separately from the
section icons, optional scroll-to-top arrow at the bottom (Monochrome Studio).

### Eyebrow Chip
Small pill, icon + short label, sits directly above every section's display headline. (Editorial Gold may
alternate this with a plain em-dash-prefixed label on some sections — pick one convention and hold it
constant across a single build.)

### Timeline Entry (Experience)
Left column: year range. Center: connecting vertical line with a filled dot marker per entry. Right column:
small logo/mark, bold role title, one-paragraph description. Entries ordered most-recent-first.

### Accordion List (Services)
Expanded item shows overlapping image/mockup pair, a row of tag pills, and a description paragraph below a
hairline divider. Collapsed siblings show only a bold title and a plus icon, single line, hairline divider
between each.

### Skill/Tool Progress Row (Tech Stack)
Icon (brand mark or simple glyph) + name + one-line description on the left; a horizontal track-and-fill bar
with a percentage label on the right. Stack rows with hairline dividers between them.

### Testimonial Block
Large decorative accent-colored quotation mark, quote text at a large readable size, attribution (name +
role/company) below, a small stat pair (e.g. "26+ Finalized projects / 98% Client satisfaction") to the
left of the quote, a portrait image to the right, and a pagination control (counter like "1/3" + prev/next
arrow buttons) beneath.
**AI rule:** only build this component with real testimonials. If no genuine client testimonials exist yet,
omit this section entirely rather than fabricating quotes — fabricated testimonials directly undermine the
"not AI-generated / authentic" goal this whole system exists to serve.

### Numbered Portfolio Card (Selected Work)
Full-bleed project image; small pill badge "No. 0X" overlaid top-left on the image; beneath the image, a
small-caps category label (colored by category, e.g. accent-secondary green for one category) followed by a
bold project title. Grid is preceded by filter pills (`All` + one pill per category), with the active pill
filled and inactive pills outlined.

### Journal / Blog Card
Thumbnail image, small-caps "CATEGORY · DATE" meta line, bold title, one-line muted excerpt. Grid of these,
2 columns desktop.

### Feature Icon Tile (About)
Small bordered card: icon top, bold short title, one/two-line muted description. Arranged in a 2×2 grid
next to the About section's portrait+headline.

### Tool Marquee / Ticker
A single horizontal row of tool/skill names separated by bullet dots, either static or auto-scrolling,
muted/faint text color, placed beneath the About section's feature-tile grid.

### Contact Form (underline style)
No boxed input fields — each field is a label + a single bottom hairline border that brightens on focus.
Fields observed: Name*, Email*, Project Description (optional, longer field). Filled pill submit button
plus the raw email address displayed as plain clickable text nearby, giving a fallback contact method
alongside the form.

### Footer Signature Block
A short, real quotation (attributed) above a hairline divider, then an oversized outlined "ghost" wordmark
of the name, small circular logo mark, and a plain copyright line — no link directory required, unlike the
denser footer convention in the previous design system; this voice favors a quiet, confident close instead.

### Circular Credential Seal *(optional, use only with a real credential)*
Rotating circular badge with curved edge text and a decorative ribbon/loop shape, used once near the hero
when there's a genuine award, certification, or "since [year]" credential to state.

## 17. Interaction States

| State | Treatment |
|---|---|
| Default | Base tokens per component, as documented in §16. |
| Hover | Rail icons and buttons brighten to the accent color or gain a subtle background tint; underline-style form fields brighten their bottom border. |
| Focus | Accent-colored border/ring on form fields and buttons; rail's active-section icon uses a persistent accent fill, distinct from hover. |
| Active/Pressed | Filled pill buttons darken slightly; filter pills toggle between filled (active) and outlined (inactive). |
| Selected | Active rail icon and active filter pill both use the solid accent fill — keep this treatment consistent between the two so "currently selected" always reads the same way site-wide. |
| Disabled | *(Inferred)* ~40% opacity, no hover response. |
| Loading | *(Inferred)* — favor a simple accent-colored progress-bar or pulsing dot (consistent with the tech-stack progress bars already in this system) over a generic spinner. |
| Success/Error (contact form) | *(Inferred)* — a short inline message beneath the form using `color.accent.primary` for success and `color.status.danger` (Editorial Gold) / a clearly-legible red (Monochrome Studio, add as an extension token) for error; never only a color change with no message. |

## 18. Case-Study / Journal Patterns

- Every portfolio entry is numbered and categorized — never presented as an undifferentiated grid.
- Filtering is always available once there are more than ~4–6 items in a collection (`All` plus one pill
  per real category present in the content — never invent a category with zero items in it).
- Journal/blog entries always carry a real date and category, ordered most-recent-first, exactly like the
  Experience timeline — this system consistently uses chronology as a structural device across multiple
  sections, not just one.

## 19. Accessibility

*(Inferred from general best practice — desktop screenshots don't show accessibility states directly.)*
- The icon-only rail nav needs accessible labels (`aria-label` per icon) since there's no visible text —
  this is more important here than in a text-labeled navbar.
- Maintain WCAG AA contrast for `text.muted`/`text.faint` against their dark canvases at final
  implementation — check especially Editorial Gold's `text.faint` (`#5C6470`) on `#0A0C0F`.
- The blinking-cursor greeting effect and any marquee/ticker animation must respect
  `prefers-reduced-motion` and pause/simplify accordingly.
- Background smoke-video must not auto-play with sound and should also respect `prefers-reduced-motion` by
  falling back to a static frame.
- Underline-only form fields still need a visible, non-color-only focus indicator (e.g., border thickness
  change plus color) to remain accessible.

## 20. AI Layout Generation Rules

1. Never generate a horizontal top navbar for this project — the fixed icon rail (§8) is the nav, full
   stop.
2. Every page/section opens with an eyebrow chip, then a large display headline in the chosen voice's
   display face, exactly as documented in §5 — no bare `<h1>` with no eyebrow.
3. **For this specific portfolio, adapting a real full-stack + WordPress developer's content, recommend
   Editorial Gold as the default voice**: the serif/numbered-case-study/ticker treatment reads as more
   premium and less "developer-template" than a neon-green monochrome aesthetic, and its two-column
   About + feature-tile pattern maps cleanly onto a skills/entity-driven content model. Monochrome Studio
   remains a valid alternative if a more kinetic, technical tone is preferred — state which was chosen and
   why before building.
4. Since this portfolio must be **multi-page** (per the project's separate content/SEO requirements) rather
   than a single anchor-scrolling page like both references: map each rail icon to a **route**, not an
   anchor. The rail's visual design (fixed, icon-only, active-item highlighted) stays identical; only its
   link targets change from `#section` to `/page`.
5. Never build the Testimonial component (§16) or the optional Credential Seal (§16) unless real content
   exists for them — omit rather than fabricate, per §16's explicit rule.

## 21. AI Component Generation Rules

1. Default every button and chip to the pill radius (§11) in whichever voice is chosen — never generate a
   sharp-cornered button in this system.
2. Numbered badges on portfolio cards must reflect the item's real position/count in its category, not a
   decorative arbitrary number.
3. Contact forms always use the underline style (§16) — never generate boxed input fields for this system.
4. Progress bars (tech stack) must reflect a genuine, defensible proficiency level per skill — avoid
   generating a suspiciously uniform set of percentages (e.g. everything at exactly 80%).
5. The footer's oversized ghost wordmark and short quotation are a signature closing moment — always
   include some version of this rather than defaulting to a dense multi-column link directory footer.

## 22. AI Responsive Design Rules

1. Below ~1024px (Monochrome Studio) or ~768px (Editorial Gold), collapse the fixed rail/profile-card into
   a bottom tab bar or drawer per §10 — the "no horizontal navbar" principle should bend toward a bottom
   rail before it bends toward a conventional top navbar.
2. Portfolio and journal grids drop to 1 column below ~640px; the About two-column layout stacks vertically
   below ~768px.
3. Keep the tool ticker/marquee horizontally scrollable, never wrapped, at every breakpoint.
4. Preserve the floating date/time readout (Monochrome Studio) and rail-based nav access at every
   breakpoint; only their exact position may change.

## 23. Do / Don't

**DO:**
- Use a fixed, icon-only vertical rail as the entire primary navigation.
- Anchor identity in one strong, real portrait photograph.
- Give every content collection (projects, journal entries, timeline) a real numbering/dating system.
- Use pill-shaped eyebrow chips above every section headline.
- Use underline-only contact form fields.
- Close the site with a quiet footer signature (quote + oversized ghost wordmark), not a dense link grid.

**DON'T:**
- Add a horizontal top navbar "just in case" — it breaks this system's core signature.
- Fabricate testimonials, credentials/awards, or video content that doesn't genuinely exist.
- Reuse Isak's or Alaia's exact copy, project names, client names, or specific imagery.
- Mix the fixed-profile-card layout with the serif-italic headline voice in the same build.
- Default to boxed input fields for the contact form.
- Generate uniform, suspiciously round skill-proficiency percentages.

## 24. Design Tokens

```
color.background.canvas         #0F0F0F   (Monochrome Studio) | #0A0C0F   (Editorial Gold)
color.background.surface        #222222   (Monochrome Studio) | #14171C   (Editorial Gold)
color.background.surface-alt                                   | #1B1F25   (Editorial Gold)
color.border.hairline           rgba(255,255,255,.08) (inferred) | rgba(236,237,239,.09) (Editorial Gold)
color.border.strong                                             | rgba(236,237,239,.16) (Editorial Gold)
color.text.primary              #FFFFFF   (Monochrome Studio) | #ECEEF1   (Editorial Gold)
color.text.muted                #949494   (Monochrome Studio) | #9AA1AB   (Editorial Gold)
color.text.faint                                                | #5C6470   (Editorial Gold)
color.accent.primary            #00DE51   (Monochrome Studio) | #C9A24B   (Editorial Gold)
color.accent.primary-light                                      | #D4B56F   (Editorial Gold)
color.accent.secondary                                          | #2F9C82   (Editorial Gold)
color.accent.on-primary                                         | #0A0C0F   (Editorial Gold)
color.status.danger                                             | #D1603D   (Editorial Gold)
color.overlay.white-*           #ffffff14 / #fff6 / #ffffff8f / #ffffffb8 / #ffffffeb  (Monochrome Studio)
color.overlay.black-*           #0000000f / #00000026 / #0006 / #00000080 / #0000008f / #000000b8  (Monochrome Studio)

typography.font.display         Apfel Grotesk, 500  (Monochrome Studio) | Fraunces, 500  (Editorial Gold)
typography.font.body            Inter, 400           (Monochrome Studio) | Manrope, 400   (Editorial Gold)
typography.size.display         56–60px               (Monochrome Studio) | up to 104px    (Editorial Gold)
typography.size.body            16px                  (Monochrome Studio) | 16–19px        (Editorial Gold)
typography.lineHeight.display   1.04–1.1                                 | 0.98
typography.letterSpacing.display -1.2px                                  | -1.04px

spacing scale                   4, 8, 12, 16, 20, 24, 28, 32, 40, 72  (px)
layout.rail.width                90–100px (icon-only) | 320–380px (profile-card)

radius.sm / md / lg / pill      6–8 / 12–14 / 20–24 / 9999   (px)
border.hairline                 1px solid color.border.hairline

shadow.lift (Editorial Gold only)   rgba(0,0,0,.45) 0px 20px 60px 0px

component.button.height          44–52px
component.rail.icon.size         40–48px
component.badge.number.height    28–32px
component.avatar.rail            40–48px
```

## 25. CSS Variable Reference

```css
/* Monochrome Studio */
:root[data-voice="monochrome-studio"] {
  --canvas: #0F0F0F;
  --surface: #222222;
  --text: #FFFFFF;
  --text-muted: #949494;
  --accent: #00DE51;
  --white-8: #ffffff14;
  --white-40: #fff6;
  --white-56: #ffffff8f;
  --white-72: #ffffffb8;
  --white-92: #ffffffeb;
  --black-6: #0000000f;
  --black-15: #00000026;
  --black-40: #0006;
  --black-50: #00000080;
  --black-56: #0000008f;
  --black-72: #000000b8;
  --radius-sm: 8px;
  --radius-md: 14px;
  --radius-lg: 24px;
  --radius-pill: 9999px;
  --rail-width: 96px;
  --profile-card-width: 360px;
}

/* Editorial Gold */
:root[data-voice="editorial-gold"] {
  --canvas: #0A0C0F;
  --surface: #14171C;
  --surface-alt: #1B1F25;
  --border: rgba(236,237,239,.09);
  --border-strong: rgba(236,237,239,.16);
  --text: #ECEEF1;
  --text-muted: #9AA1AB;
  --text-faint: #5C6470;
  --accent: #C9A24B;
  --accent-light: #D4B56F;
  --accent-secondary: #2F9C82;
  --accent-on: #0A0C0F;
  --danger: #D1603D;
  --shadow-lift: rgba(0,0,0,.45) 0px 20px 60px 0px;
  --radius-sm: 8px;
  --radius-md: 14px;
  --radius-lg: 24px;
  --radius-pill: 9999px;
  --rail-width: 96px;
}
```

## 26. Final AI Generation Checklist

- [ ] No horizontal top navbar exists anywhere in the build; navigation is entirely the fixed icon rail.
- [ ] One real portrait photograph anchors the hero/about area — no illustrated avatar.
- [ ] Every project/timeline/journal collection carries a real number, date, or category — never a bare
      undated grid.
- [ ] Every section headline is preceded by a pill-shaped eyebrow chip.
- [ ] Contact form uses underline-only fields, not boxed inputs.
- [ ] No fabricated testimonials, awards, or video content are present.
- [ ] Footer closes with a quote + oversized outlined wordmark, not a dense link directory.
- [ ] Rail icons map to real routes (multi-page) rather than same-page anchors, per §20 rule 4.
- [ ] Chosen voice (Monochrome Studio or Editorial Gold) is applied consistently — no mixing of the two
      layout signatures.
- [ ] No copy, client names, project names, or specific imagery has been copied from Isak or Alaia.

---

*This document is a reusable generation system inspired by two references, not a record of either site.
Build an original composition from these tokens and rules.*
