# Design System: trussphp.com

> Extracted 2026-09-08

---

## 1. Design Language Overview

**Vibe:** vibrant · modern · Dark theme

**Design rhythm:** 4px grid · very rounded · generous line-height (1.6) · flat (no shadows)

## 2. Color System

| Role     | Hex      | Usage |
|----------|----------|-------|
| Primary  | `#0E2135` | CTAs, primary actions, links |
| Accent   | `#0000EE` | Highlights, success states, decorative |
| Surface  | `#000000` | Main page background |
| Elevated | `#141414` | Cards, raised containers |
| Text     | `#D7E7F4` | Body and heading text |
| Muted    | `#7D868E` | Secondary text, captions |

### Named color tokens (from CSS custom properties)

- `--truss-bg` → `#0b1a2b`
- `--truss-grid` → `rgba(120, 200, 230, .055)`
- `--truss-grid-strong` → `rgba(120, 200, 230, .11)`
- `--truss-panel` → `#0f2338`
- `--truss-line` → `#22496b`
- `--truss-line-strong` → `#4681b2`
- `--truss-ink` → `#5fd0e6`
- `--truss-cyan` → `#7fe0f2`
- `--truss-fg` → `#d7e7f4`
- `--truss-muted` → `#7fa2c0`
- `--truss-field` → `#0e2135`
- `--truss-hair` → `#274a6b`
- `--truss-entity-even` → `#16324e`
- `--truss-entity-border` → `#3f7fa0`
- `--truss-on-ink` → `#0b1a2b`

## 3. Typography

- **H1** — IBM Plex 54px / weight 600, line-height 1.04, tracking -1.62px
- **H2** — IBM Plex 14px / weight 600, line-height 1.6, tracking -0.14px
- **Body** — Segoe UI 15px / weight 400, line-height 1.6
- **Code** — IBM Plex 13.5px / weight 400
- **Scale:** 56px / 27px / 13px

## 4. Spacing & Layout

- **Spacing scale:** 8,12,16,20,24,40,56
- **Border radius:** 8px buttons
- **Radius vocabulary:** button → 8px, chip → pill
- **Radius tokens:** `--truss-radius: 8px`

## 6. Component Specs

### Button
- #0E2135 bg
- #D7E7F4 text
- 8px radius
- 11px 18px padding
- 600 weight

### Card
- dark surface bg
- subtle border
- 12px radius
- 24px padding

### Input
- dark surface bg
- 1px subtle border
- 6px radius
- 8px 12px padding

### Link
- #7FA2C0

## 7. Implementation Rules

**DO:**
- Use `#0E2135` for all primary CTAs and interactive accents
- Reserve `#0000EE` for accent moments — don't overuse
- Stick to the spacing scale (8,12,16,20,24,40,56) — don't introduce arbitrary values
- Match the radius vocabulary: 8px buttons
- Pair IBM Plex 700 headings with Segoe UI 13px 400, 1.6 line-height
- Honour the visual hierarchy: bold colour on primary actions, muted tones on secondary

**DON'T:**
- Copy this design verbatim — use the tokens as a system to build something original
- Mix in colours outside this palette (especially competing primary colours)
- Break the radius scale by introducing one-off values
- Use the same shadow tier for everything — match elevation to importance

---

*Source: trussphp.com · 2026-09-08*
*Do not copy the design. Use these tokens to build similar UI with the same feel.*
