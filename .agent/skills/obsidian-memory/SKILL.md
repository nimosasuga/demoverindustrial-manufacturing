---
name: obsidian-memory
description: >-
  Maintains and updates project memory in Obsidian markdown vault format.
  Use whenever a project decision is finalized, architecture changes, progress is made, or memory logging is requested.
---

# Obsidian Memory Skill

Standard protocol for recording, tracking, and synchronizing project decisions, architectural rules, and session logs in Obsidian Markdown vault format.

## Obsidian Markdown Standard

1. **Frontmatter Headers**:
   ```yaml
   ---
   aliases:
     - Project Alias
   status: active
   tags:
     - project/tag
     - architecture
     - decisions
   title: Project Memory Title
   updated: YYYY-MM-DD
   ---
   ```

2. **WikiLinks & Cross-References**:
   - Use `[[Note Name]]` or standard markdown file links for referencing other notes.
   - Maintain clear headings (`#`, `##`, `###`).

3. **Decision Log Format**:
   ```markdown
   ## YYYY-MM-DD — Decision Title
   - Status: final | provisional | open
   - Area: product | backend | database | security | deployment | UI | sector
   - Keputusan: [Isi keputusan]
   - Alasan: [Alasan teknis/bisnis]
   - Dampak: [Dampak terhadap file/arsitektur]
   - File/dokumen yang diperbarui: [Path file]
   - Langkah berikutnya: [Action items]
   ```

4. **Rule of Verification**:
   - NEVER claim notes are saved before actually writing them to disk.
   - Keep log entries timestamped, factual, and strictly aligned with PRD specifications.
