# Design System: bestwpware.com

> Extracted 2026-09-21

---

## 1. Design Language Overview

**Vibe:** vibrant · rounded · Dark theme
**Built with:** Bootstrap

**Design rhythm:** 4px grid · very rounded · generous line-height (1.6) · soft elevation

## 2. Color System

| Role     | Hex      | Usage |
|----------|----------|-------|
| Primary  | `#C9A24B` | CTAs, primary actions, links |
| Accent   | `#D4B56F` | Highlights, success states, decorative |
| Surface  | `#0A0C0F` | Main page background |
| Elevated | `#1E1F22` | Cards, raised containers |
| Text     | `#ECEEF1` | Body and heading text |
| Muted    | `#9AA1AB` | Secondary text, captions |

### Named color tokens (from CSS custom properties)

- `--bg` → `#0a0c0f`
- `--bg-elev` → `#14171c`
- `--bg-elev-2` → `#1b1f25`
- `--line` → `rgba(236,237,239,.09)`
- `--line-strong` → `rgba(236,237,239,.16)`
- `--text` → `#eceef1`
- `--text-muted` → `#9aa1ab`
- `--text-faint` → `#5c6470`
- `--accent` → `#c9a24b`
- `--accent-ink` → `#0a0c0f`
- `--accent-2` → `#2f9c82`
- `--accent-2-ink` → `#eceef1`
- `--danger` → `#d1603d`

## 3. Typography

- **H1** — Fraunces 104px / weight 500, line-height 0.98, tracking -1.04px
- **Body** — Manrope 19px / weight 400, line-height 1.6
- **Scale:** 104px / 41px / 16px

## 4. Spacing & Layout

- **Spacing scale:** 8,12,16
- **Border radius:** pill buttons, 14px cards
- **Radius vocabulary:** button → 50px
- **Radius tokens:** `--radius-s: 6px`, `--radius-m: 14px`, `--radius-l: 26px`

## 5. Effects

### Shadows (low → high)
- **subtle** — `rgba(0, 0, 0, 0.45) 0px 20px 60px 0px`

## 6. Component Specs

### Button
- #C9A24B bg
- #0A0C0F text
- 100px radius
- 14px 26px padding
- 700 weight

### Card
- 0.8px solid rgba(236
- 237
- 239
- 0.09)
- 14px radius
- 16px padding

### Input
- 12px 2px padding

### Link
- #9AA1AB

## 7. Implementation Rules

**DO:**
- Use `#C9A24B` for all primary CTAs and interactive accents
- Reserve `#D4B56F` for accent moments — don't overuse
- Stick to the spacing scale (8,12,16) — don't introduce arbitrary values
- Match the radius vocabulary: pill buttons, 14px cards
- Pair Fraunces 700 headings with Manrope 16px 400, 1.6 line-height
- Honour the visual hierarchy: bold colour on primary actions, muted tones on secondary

**DON'T:**
- Copy this design verbatim — use the tokens as a system to build something original
- Mix in colours outside this palette (especially competing primary colours)
- Break the radius scale by introducing one-off values
- Use the same shadow tier for everything — match elevation to importance

---

*Source: bestwpware.com · 2026-09-21*
*Do not copy the design. Use these tokens to build similar UI with the same feel.*
