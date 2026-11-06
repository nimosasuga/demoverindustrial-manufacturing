---
name: ui-ux-promax-motion
description: >-
  Comprehensive UI/UX ProMax, Framer-grade motion physics, GSAP + ScrollTrigger + Lenis scroll choreography, adaptive canvas particle systems, image & section reveals, and relevant optical backdrop/depth blur. Harmonized with Hallmark The Floor (16 anti-AI-slop rules) and EXPROSA Premium Adaptive 3D v1.1.
---

# UI/UX ProMax, Framer Motion Physics, Scroll Choreography, Particles & Optical Blur Skill

Architectural standard for crafting tactile, kinetic, high-precision user interfaces across EXPROSA sectoral websites while maintaining 100% compliance with **Hallmark (The Floor)** and **PRD Addendum Premium Adaptive 3D v1.1**.

## 1. Core Harmony with Hallmark (The Floor)
- **Token-Only Styling**: All colors, surfaces, blur levels, and fonts must be declared as CSS custom properties in `:root` (`tokens.css`). Never use raw hex or font-family literals outside `:root`.
- **Specific Property Transitions**: Never use `transition: all` or animate layout properties (`width`, `height`, `top`, `left`, `margin`, `padding`). Animate only compositor properties: `transform`, `opacity`, `filter`, and `clip-path`.
- **Fail-Safe Content Visibility (Gate 62)**: Never ship elements hidden with static `opacity: 0` that stay blank if JS fails. Scope initial hidden states strictly under `html.js` or animate from visible using `@starting-style` / GSAP fail-safe `fromTo` with `clearProps`.
- **Instant Focus & Reduced Motion**: `:focus-visible` appears in `0ms` with >= 3:1 contrast. All motion loops, smooth scrolling, and particles automatically pause or disable when `prefers-reduced-motion: reduce` is active.

## 2. Framer-Grade Motion Physics & Micro-Interactions
- **Spring & Expo Easing Tokens**:
  - `--ease-framer-out: cubic-bezier(0.16, 1, 0.3, 1)` (primary structural & card transitions)
  - `--ease-framer-spring: cubic-bezier(0.22, 1, 0.36, 1)` (tactile magnetic controls & drawer panels)
  - `--ease-out-quart: cubic-bezier(0.25, 1, 0.5, 1)` (hover states & hairlines)
- **Interactive 3D Stage & Card Tilt (`data-tilt-3d`)**:
  - Smooth `requestAnimationFrame` Lerp interpolation (`lerpFactor = 0.085`) tracking pointer X/Y coordinates.
  - Multi-plane Z-depth layering (`transform-style: preserve-3d`, `translateZ(20px..85px)`) with dynamic specular spotlight glare (`.tilt-glare`).
  - Touch-device adaptation: gentle ambient 3D oscillation + tactile press feedback (`scale(0.985)`) without hover dependency.
- **Magnetic Action Controls (`data-magnetic`)**:
  - Subtle cursor attraction (`±6px` X/Y displacement) with elastic return on `mouseleave`.

## 3. Scroll Animation & Section Choreography (GSAP + ScrollTrigger + Lenis)
- **Adaptive Lenis Smooth Scroll**:
  - Desktop & Mobile momentum scrolling synced with `gsap.ticker` and `ScrollTrigger.update`.
  - Respects native anchor links, modal scroll locks, and `prefers-reduced-motion`.
- **Section & Image Reveals (`data-reveal`)**:
  - **Staggered Grid Reveal (`data-reveal="stagger"`)**: Cards, spec rows, and capability matrices enter sequentially (`stagger: 0.07s`, `y: 24 -> 0`).
  - **Editorial Image Frame Reveal (`data-reveal="image"`)**: Industrial/product imagery reveals with subtle scale settle (`scale: 1.05 -> 1.0`) and sharp technical framing.
  - **Parallax Depth Layers (`data-parallax`)**: Controlled vertical counter-translation (`yPercent`) on background architectural blueprints, technical telemetry, and photography.
  - **Live Telemetry Counters (`data-counter`)**: Tabular-numeral (`font-variant-numeric: tabular-nums`) precision counters triggered once on viewport entry.

## 4. Adaptive Particle Systems (`#hero-particle-canvas`)
- **Sector-Contextual Particles**:
  - *Sector 05 (Industrial & Manufacturing)*: Micro-machining metallic sparks, anodized dust motes, and precision laser-grid nodes floating across the 3D CAD/CNC stage.
  - *Sector 01 / 04*: Warm spice embers / roasted coffee aroma vapor.
- **Lifecycle & Battery Protection**:
  - Tiered density: Desktop (32–40 particles), Tablet (14 particles), Mobile (8 lightweight particles).
  - Mandatory `IntersectionObserver` and `document.visibilitychange` listeners to pause `requestAnimationFrame` immediately when off-screen or tab is backgrounded.

## 5. Relevant Optical & Depth Blur (Contextual Glass & Depth-of-Field)
- **Banned Slop**: Never place decorative neon/purple/orange radial glow blobs behind text or cards (Hallmark Gate 29).
- **Relevant Functional Blur**:
  - **Sticky Technical Header / HUD Bar**: `backdrop-filter: blur(14px) saturate(140%)` over semi-translucent dark anodized surface (`color-mix(in oklch, var(--color-canvas) 86%, transparent)`) so scrolling blueprint grids soften cleanly beneath navigation.
  - **Interactive Spec Drawer & Lightbox Modal**: Optical depth-of-field backdrop (`backdrop-filter: blur(10px)`) isolating active engineering drawings, CAD views, or RFQ drawers.
  - **Motion-In-View De-blur (`data-reveal="focus"`)**: Subtle optical rack-focus transition (`filter: blur(4px)` to `blur(0px)` over `450ms` only under `html.js`) simulating camera lens focusing on precision-machined components.
