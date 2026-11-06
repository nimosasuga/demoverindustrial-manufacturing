---
name: 21st-dev-cli
description: >-
  21st.dev CLI (@21st-dev/cli) integration for discovering, inspecting, and scaffolding UI components, design tokens, and interactive patterns across all EXPROSA sectoral websites. Active across all new and existing chat sessions.
---

# 21st.dev CLI (`@21st-dev/cli`) Skill

Standard workflow for using the **21st.dev CLI** (`21st`) in all EXPROSA workspace sessions, harmonized with **Hallmark (The Floor)** and **UI/UX ProMax Motion**.

## 1. Installation & Authentication
- **Global CLI Package**: `@21st-dev/cli` (`npm i -g @21st-dev/cli`)
- **Interactive Login**:
  ```bash
  21st login
  ```
- **Headless / Script / CI Execution (Pre-configured)**:
  - The API key is stored in the user's environment variable `API_KEY_21ST` and project `.env` (`API_KEY_21ST`), as well as the local 21st CLI credentials store.
  - In non-interactive commands, scripts, or CI, always pass `--api-key $env:API_KEY_21ST` (PowerShell) or `--api-key $API_KEY_21ST` (Bash):
    ```powershell
    21st <command> --api-key $env:API_KEY_21ST
    ```

## 2. Integration Rules with EXPROSA Laravel Blade & Hallmark
1. **Adapt to Blade + Alpine.js + Tailwind CSS v4**:
   - When pulling or inspecting component patterns from 21st.dev, adapt JSX/React patterns cleanly into **Laravel Blade components (`resources/views/components/`) + Alpine.js (`x-data`) + GSAP/CSS tokens** as mandated by `PRD_MASTER_EXPROSA_LARAVEL_STARTER_v1.md` and `EXPROSA_PRD_ADDENDUM_PREMIUM_ADAPTIVE_3D_v1.1.md`.
2. **Hallmark Floor Compliance**:
   - Map all colors and fonts to `:root` CSS tokens (`--color-canvas`, `--color-surface`, `--color-ink`, `--color-accent`, `--font-display`, `--font-sans`, `--font-mono`).
   - Replace any `transition: all` with explicit compositor transitions (`transform`, `opacity`, `border-color`, `background-color`).
   - Maintain instant `:focus-visible` outlines and `@media (prefers-reduced-motion: reduce)` fallbacks.
3. **Security & Secret Hygiene**:
   - Keep `API_KEY_21ST` strictly in local `.env` (gitignored), Windows User Environment Variables, and local CLI config (`~/.21st` / AppData). Never commit raw secret keys to public Git repositories.
