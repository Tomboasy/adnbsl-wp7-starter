# AGENTS.md — instructions permanentes

Tu travailles sur un **thème WordPress 7 natif** (block theme).  
Ce projet n’est **pas** headless.

Lis ce fichier **avant** toute modification d’un projet dérivé de `adnbsl-wp7-starter`.

---

## Interdictions

- Next.js, Astro, Nuxt, Vue, SPA, frontend React séparé
- API REST utilisée pour rendre les pages
- Elementor, Divi, WPBakery, Beaver Builder
- Bootstrap, Tailwind comme dépendance frontend globale
- jQuery pour ce que le JS moderne ou l’Interactivity API couvre
- Custom Post Types et taxonomies personnalisées **dans le starter**
- Inventer un modèle de données métier « par défaut »
- Copier logos, textes, photos ou code source propriétaires d’un site tiers
- Transformer une page de référence en un énorme bloc HTML
- GSAP (ou toute lib lourde) comme dépendance du starter
- FontAwesome global
- Supposer qu’une API WordPress 7 existe : **vérifier** version installée, Core, documentation

Le frontend est rendu par WordPress : Core, Block Theme, Gutenberg, Site Editor, `theme.json`, Core Blocks, Patterns, Query Loop, Block Bindings, Interactivity API, PHP, CSS moderne, JS vanilla.

---

## Procédure obligatoire pour chaque nouveau projet

Ne commence **jamais** par coder toute la page.

```
REFERENCE → AUDIT → DESIGN SYSTEM → WORDPRESS MAPPING
→ CONTENT STRATEGY → IMPLEMENTATION → VISUAL COMPARISON → CORRECTIONS
```

### Phase 1 — Audit

Analyser toutes les sources : URL, Figma, screenshots, HTML, CSS, JS, contenu, assets.

Identifier : pages, navigation, sections, composants, couleurs, typographies, spacing, grilles, animations, interactions, responsive, contenu dynamique éventuel.

Livrable : liste structurée. Pas de code de production à ce stade.

### Phase 2 — Design system

**Avant** de coder les pages, extraire et poser dans `theme.json` :

- palette sémantique (`primary`, `secondary`, `accent`, `foreground`, `background`, `surface`, `muted`, `border`, `success`, `warning`, `error`)
- typography scale (`xs` → `display`)
- spacing scale (`xs` → `section`)
- widths (content, wide, full, reading)
- radius, shadows, animation principles

Limiter les choix dangereux (couleurs custom infinies, tailles arbitraires).

Dans `theme.json`, éviter les slugs qui commencent par un chiffre (`2xl`). WordPress les convertit en kebab-case (`2-xl`) et `var:preset|font-size|2xl` ne résout plus. Utiliser `2-xl` / `3-xl`.

Fonts : locales ou système. Pas de Google Font distante par défaut.

### Phase 3 — Mapping WordPress

Pour chaque élément du concept, décider :

| Cible | Quand |
|---|---|
| Core Block | Composant déjà fourni par WP |
| Pattern | Section réutilisable = composition de Core Blocks |
| Template Part | Header, footer, zones globales |
| Template | Type de page / article / archive |
| Query Loop | Listes d’articles / pages natives |
| Block Binding | Donnée native ou source enregistrée |
| Custom Block | Uniquement si vraie valeur (interaction, a11y, structure impossible autrement) |
| CSS | Style que `theme.json` ne peut pas exprimer |
| JS / Interactivity API | Toggle, modal, filtres simples, navigation |

Documenter les décisions non évidentes (dans le chat ou un court commentaire de mapping).

WordPress 7.0.4 fournit déjà `core/accordion`. Ne pas recréer un accordion custom.

### Phase 4 — Content strategy

Utiliser en priorité : Pages, Articles, catégories, étiquettes, Navigation, Médias, Patterns, Query Loop, templates, template parts.

**Ne jamais créer de CPT automatiquement.**

Si un projet client a vraiment besoin d’une structure métier (Services, Projets, Équipe…), cela doit être une **décision séparée, explicite, propre à ce projet** — pas une habitude du starter.

Les patterns nommés services / projects / testimonials sont des **compositions visuelles génériques**. Ils ne dépendent d’aucun CPT.

### Phase 5 — Construction

Ordre :

1. Design system (`theme.json`)
2. Global styles / CSS minimal
3. Header / footer (template parts)
4. Templates
5. Patterns
6. Contenu
7. Custom blocks **nécessaires**
8. Interactions (Interactivity API en priorité)
9. Animations (`data-animate`, puis GSAP seulement si justifié)

### Phase 6 — Responsive

Mobile-first. Capacités natives WP 7 (typographie fluide, layout constrained, hide/show de blocs) avant classes `.hide-mobile`.

Comparer aux références : petit mobile, grand mobile, tablette, laptop, desktop, grand écran.

Corriger : proportions, spacing, type, wrapping, images, navigation, interactions.

### Phase 7 — QA

Vérifier :

- frontend
- Gutenberg (EDITOR ≈ FRONTEND)
- responsive
- accessibilité (sémantique, focus, clavier, contrastes, reduced motion)
- performance
- console JS
- erreurs PHP
- liens
- formulaires
- absence de contenu hardcodé problématique
- aucun CPT / taxonomie ajouté par inadvertance
- fonctionnement **sans** plugin tiers obligatoire

### Phase 8 — Cleanup

Supprimer : code mort, CSS/JS inutilisés, `console.log`, composants temporaires, commentaires inutiles, assets non utilisés, lorem de démo trop verbeux.

---

## Reproduction de concepts

Reproduire : direction artistique, composition, rythme, interactions, expérience, proportions.

Reconstruire avec les **contenus autorisés** du projet. Les références servent d’analyse, pas de copie.

---

## Comparaison visuelle

Dès qu’un navigateur est disponible, boucler :

```
REFERENCE vs LOCAL WORDPRESS
```

Comparer : dimensions, alignements, spacing, typography, line-height, couleurs, radius, images, proportions, animations, responsive.

Une page n’est terminée **qu’après** cette comparaison et les corrections.

---

## Code

- `functions.php` reste un chargeur de `/inc/`.
- WordPress Coding Standards lorsque pertinent.
- Modularité sans abstraction prématurée.
- Pas de framework CSS maison, pas de moteur de templates parallèle, pas de couche au-dessus de Gutenberg sans nécessité.
- Custom blocks : `block.json`, rendu PHP, Interactivity API, progressive enhancement, JS conditionnel.
- React : uniquement là où Gutenberg l’exige **côté éditeur**.

---

## Données et plugins

Le starter fonctionne sans WooCommerce, SEO, formulaires, Complianz, cache, sécurité, ACF.

S’ils sont présents : ne pas casser leurs hooks, ne pas dupliquer leurs meta SEO, ne pas dequeue jQuery « pour la perf ».

---

## Fichiers à ne pas toucher

- WordPress Core
- Plugins tiers (sauf demande explicite)
- Contenu utilisateur existant (sauf demande)

Tu peux créer, modifier, déplacer ou supprimer des fichiers **dans le thème du projet**.
