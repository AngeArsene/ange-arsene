# Design System: tfisak.vercel.app

> Extracted 2026-09-21

---

## 1. Design Language Overview

**Vibe:** monochrome · modern · Dark theme
**Built with:** Bootstrap

**Design rhythm:** 4px grid · very rounded · flat (no shadows)

## 2. Color System

| Role     | Hex      | Usage |
|----------|----------|-------|
| Accent   | `#FFFFFF` | Highlights, success states, decorative |
| Surface  | `#0F0F0F` | Main page background |
| Elevated | `#222222` | Cards, raised containers |
| Text     | `#FFFFFF` | Body and heading text |
| Muted    | `#949494` | Secondary text, captions |

### Named color tokens (from CSS custom properties)

- `--swiper-theme-color` → `#007aff`
- `--white` → `#fff`
- `--white-8` → `#ffffff14`
- `--white-40` → `#fff6`
- `--white-56` → `#ffffff8f`
- `--white-72` → `#ffffffb8`
- `--white-92` → `#ffffffeb`
- `--black` → `#000`
- `--black-6` → `#0000000f`
- `--black-15` → `#00000026`
- `--black-40` → `#0006`
- `--black-50` → `#00000080`
- `--black-56` → `#0000008f`
- `--black-72` → `#000000b8`
- `--primary` → `#00de51`
- `--surface` → `#f5f5f5`

## 3. Typography

- **H1** — Apfel Grotezk 60px / weight 500, line-height 1.07, tracking -1.2px
- **H4** — Apfel Grotezk 40px / weight 500, line-height 1.1, tracking -0.8px
- **Body** — Inter 16px / weight 400, line-height 1.5
- **Scale:** 60px / 40px / 16px

## 4. Spacing & Layout

- **Spacing scale:** 4,8,12,16,20,24,28,32,40,72
- **Border radius:** 8px
- **Radius vocabulary:** button → 50px, chip → pill
- **Spacing tokens:** `--swiper-navigation-size: 44px`

## 6. Component Specs

### Button
- #000000 bg
- white text
- 8px radius
- 10px 16px padding
- 600 weight

### Card
- dark surface bg
- subtle border
- 12px radius
- 24px padding

### Input
- 0px 12px 15px 0px padding

### Link
- #FFFFFF

## 7. Implementation Rules

**DO:**
- Reserve `#FFFFFF` for accent moments — don't overuse
- Stick to the spacing scale (4,8,12,16,20,24,28,32,40,72) — don't introduce arbitrary values
- Match the radius vocabulary: 8px
- Pair Apfel Grotezk 700 headings with Inter 16px 400, 1.33 line-height
- Honour the visual hierarchy: bold colour on primary actions, muted tones on secondary

**DON'T:**
- Copy this design verbatim — use the tokens as a system to build something original
- Mix in colours outside this palette (especially competing primary colours)
- Break the radius scale by introducing one-off values
- Use the same shadow tier for everything — match elevation to importance

---

*Source: tfisak.vercel.app · 2026-09-21*
*Do not copy the design. Use these tokens to build similar UI with the same feel.*
