# Design System: pestphp.com

> Extracted 2026-09-08

---

## 1. Design Language Overview

**Vibe:** monochrome · soft · Light theme

**Design rhythm:** 4px grid · pill buttons · very rounded · flat (no shadows)

## 2. Color System

| Role     | Hex      | Usage |
|----------|----------|-------|
| Accent   | `#000000` | Highlights, success states, decorative |
| Surface  | `#FFFFFF` | Main page background |
| Elevated | `#000011E` | Cards, raised containers |
| Text     | `#000000` | Body and heading text |
| Muted    | `#6B6B6B` | Secondary text, captions |

## 3. Typography

- **H1** — Archivo 50px / weight 800, line-height 1.05, tracking -1.25px
- **H2** — Archivo 36px / weight 800, line-height 1.11, tracking -0.9px
- **H3** — Archivo 20px / weight 700, line-height 1.4
- **Body** — Instrument Sans 16px / weight 400, line-height 1.5
- **Scale:** 50px / 16px / 12px

## 4. Spacing & Layout

- **Spacing scale:** 8,12,16,20,24,28,32,40,48
- **Border radius:** 16px cards
- **Radius vocabulary:** button → pill, card → 16px

## 6. Component Specs

### Button
- #010011E text
- 12px padding
- 400 weight

### Card
- #000011E bg
- 0.8px solid #000011E
- 16px radius

### Input
- white bg
- 1px subtle border
- 6px radius
- 8px 12px padding

### Link
- #010011E

## 7. Implementation Rules

**DO:**
- Reserve `#000000` for accent moments — don't overuse
- Stick to the spacing scale (8,12,16,20,24,28,32,40,48) — don't introduce arbitrary values
- Match the radius vocabulary: 16px cards
- Pair Archivo 700 headings with Instrument Sans 12px 400, 1.56 line-height
- Honour the visual hierarchy: bold colour on primary actions, muted tones on secondary

**DON'T:**
- Copy this design verbatim — use the tokens as a system to build something original
- Mix in colours outside this palette (especially competing primary colours)
- Break the radius scale by introducing one-off values
- Use the same shadow tier for everything — match elevation to importance

---

*Source: pestphp.com · 2026-09-08*
*Do not copy the design. Use these tokens to build similar UI with the same feel.*
