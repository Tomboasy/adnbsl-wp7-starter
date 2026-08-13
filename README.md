# ADNB SL WP7 Starter

Starter de **thème WordPress 7 natif** (block theme) pour produire rapidement des sites sur mesure avec Cursor.

Ce n’est **pas** un site headless. Le frontend est rendu par WordPress : Block Theme, Gutenberg, Site Editor, `theme.json`, Core Blocks, Patterns, Query Loop, Interactivity API.

Identité visuelle volontairement **neutre**. L’architecture est fournie ; le look d’un client se construit ensuite.

Aucun Custom Post Type. Aucune taxonomie personnalisée. Aucun modèle de données métier.

---

## Objectif

Partir de cette base, fournir à Cursor :

- une URL d’inspiration ;
- un Figma ;
- des captures ;
- un concept graphique ;
- un HTML/CSS/JS ;
- ou une combinaison ;

et obtenir un **vrai thème WordPress 7**, administrable dans Gutenberg et le Site Editor.

Les règles permanentes pour les agents sont dans [`AGENTS.md`](AGENTS.md).

---

## Prérequis

Confirmés sur l’environnement de référence :

| Élément | Valeur |
|---|---|
| WordPress | 7.0.4 |
| PHP | 8.1+ (8.4 testé) |
| `theme.json` | version **3**, schéma `https://schemas.wp.org/wp/7.0/theme.json` |
| Interactivity API | disponible dans le Core |
| Block Bindings API | disponible dans le Core |
| Font Library | disponible |

Plugins **non requis**. Compatible avec WooCommerce, SEO (Yoast / Rank Math), formulaires, Complianz, cache, sécurité, ACF — s’ils sont ajoutés plus tard.

---

## Installation

1. Copier le dossier `adnbsl-wp7-starter` dans `wp-content/themes/`.
2. Apparence → Thèmes → activer **ADNB SL WP7 Starter**.
3. Apparence → Éditeur pour header, footer, templates et styles globaux.
4. Créer un menu et l’assigner au bloc Navigation du header.

Aucun plugin obligatoire. Aucun build npm n’est requis pour faire tourner le starter.

---

## Activation

Après activation :

- la page d’accueil utilise `templates/front-page.html` (hero + features + CTA) ;
- les pages utilisent `templates/page.html` ;
- le blog utilise `templates/home.html` + Query Loop ;
- les variations de style Light / Dark / High contrast sont dans `styles/`.

---

## Architecture

```
adnbsl-wp7-starter/
├── style.css                 # En-tête du thème uniquement
├── functions.php             # Charge /inc/ — ne pas en faire un monolithe
├── theme.json                # Source principale du design system
├── screenshot.png
├── README.md
├── AGENTS.md
├── templates/                # Templates FSE
├── parts/                    # Header / footer
├── patterns/                 # Compositions de Core Blocks
├── blocks/                   # Custom blocks (seulement si justifiés)
├── inc/                      # PHP modulaire
├── assets/css|js|fonts|icons|images
├── styles/                   # Variations de style
└── languages/
```

### Modules PHP (`inc/`)

| Fichier | Rôle |
|---|---|
| `setup.php` | Textdomain, supports, menus, WooCommerce optionnel |
| `enqueue.php` | CSS/JS frontend (defer) |
| `blocks.php` | Catégorie + auto-register des dossiers avec `block.json` |
| `patterns.php` | Catégories de patterns |
| `editor.php` | Styles éditeur, pas de patterns distants WordPress.org |
| `performance.php` | Réglages compatibles Core (pas de hacks anti-jQuery) |
| `security.php` | Durcissements minimaux, pas de couche parallèle au Core |
| `helpers.php` | URI / version d’assets |

### CSS

| Fichier | Responsabilité |
|---|---|
| `base.css` | Reset léger, HTML, focus |
| `utilities.css` | Utilitaires `.u-*` réellement nécessaires |
| `animations.css` | `data-animate` |
| `frontend.css` | Globaux frontend hors `theme.json` |
| `editor.css` | Canvas Gutenberg ≈ frontend |

Conventions : `.site-*`, `.c-*`, `.u-*`, `.is-*`, `.has-*`.

### Écarts documentés vs l’arborescence demandée

1. **Pas de custom block Accordion.** WordPress 7.0.4 fournit `core/accordion`. Voir `blocks/accordion/README.md` et le pattern `faq`.
2. **`assets/css/editor.css`** ajouté pour coller l’éditeur au frontend.
3. **Patterns `hidden-*`** ajoutés pour DRY des templates (query loop, meta, search, comments). `Inserter: no`.
4. **Marquee et Timeline** : structure + README, pas d’implémentation complexe. Sans `block.json` ils ne sont pas enregistrés.
5. **Aucun CPT / taxonomie.**

---

## Design system (`theme.json`)

Tokens sémantiques :

- Couleurs : `primary`, `secondary`, `accent`, `foreground`, `background`, `surface`, `muted`, `border`, `success`, `warning`, `error`
- Type : `xs`, `sm`, `base`, `md`, `lg`, `xl`, `2-xl`, `3-xl`, `display` (fluide). Les slugs `2xl`/`3xl` deviennent `2-xl`/`3-xl` : WordPress kebab-case les identifiants qui commencent par un chiffre.
- Spacing : `xs` → `section`
- Layout : `contentSize` 42rem, `wideSize` 75rem, tokens `custom.layout.reading|content|wide|full`
- Radius, shadows, transitions, container padding

Choix client **volontairement limités** : pas de palette Core, pas de tailles custom arbitraires, pas de largeurs de contenu custom.

Fonts par défaut : stacks **système**. Aucune Google Font. Voir `assets/fonts/README.md`.

---

## Hiérarchie de construction d’un composant

1. Core Block
2. Pattern (composition de Core Blocks)
3. Core Blocks + Block Bindings si une source native le justifie
4. Custom Block

Ne jamais créer un custom block si un assemblage propre de Core Blocks suffit.

---

## Custom blocks fournis

| Bloc | Statut |
|---|---|
| `adnbsl/modal` | Complet — `<dialog>` + Interactivity API |
| `adnbsl/slider` | Complet — scroll-snap léger |
| `adnbsl/stats` | Complet — compteur optionnel |
| Accordion | **Core** `core/accordion` |
| Marquee / Timeline | Structure uniquement |

Éditeur : JS Gutenberg classique (`wp.blocks`), **sans npm**. Frontend : Script Modules + `@wordpress/interactivity`. React n’est pas utilisé sur le frontend.

---

## Animations

```html
<div data-animate="fade-up" data-delay="150" data-duration="400">…</div>
<div data-animate="fade-in"></div>
<div data-animate="scale"></div>
<div data-animate="parallax" data-speed="0.15"></div>
```

CSS + IntersectionObserver. `prefers-reduced-motion` respecté. **GSAP n’est pas une dépendance.**

### Ajouter GSAP (projet client uniquement)

Dans `inc/enqueue.php` du projet, charger localement ou via npm **uniquement** si une animation complexe le justifie, et seulement sur les templates concernés :

```php
if ( is_front_page() ) {
    wp_enqueue_script(
        'gsap',
        get_template_directory_uri() . '/assets/js/vendor/gsap.min.js',
        array(),
        '3.12.5',
        array( 'in_footer' => true, 'strategy' => 'defer' )
    );
}
```

Ne pas ajouter GSAP au starter générique.

---

## Créer un nouveau site à partir du starter

1. Copier `adnbsl-wp7-starter` dans le thème du nouveau projet (renommer le dossier si besoin).
2. Mettre à jour `style.css` (Theme Name, Text Domain) et le textdomain PHP si le slug change.
3. Activer le thème.
4. Fournir à Cursor les sources (URL, Figma, screenshots, contenu, assets **autorisés**).
5. L’agent **doit** suivre `AGENTS.md` : Audit → Design system → Mapping WP → Contenu → Construction → Responsive → QA → Cleanup.
6. Extraire la palette / type / spacing **dans `theme.json` avant** de coder les pages.
7. Reproduire la direction artistique avec des blocs natifs. Ne pas coller un gros HTML.
8. Ne pas copier logos, textes, photos ou code propriétaires d’un site tiers.
9. Ne créer un CPT que sur **décision explicite** propre au projet client.
10. Comparer référence vs local (navigateur) avant de déclarer une page terminée.

---

## Modifier le design system

1. Éditer `theme.json` (source de vérité).
2. Ajuster une variation dans `styles/*.json` si le changement est thématique.
3. N’ajouter du CSS que si `theme.json` ne peut pas l’exprimer.
4. Vérifier Gutenberg **et** le frontend.

---

## Créer un Pattern

Fichier `patterns/nom.php` :

```php
<?php
/**
 * Title: Nom
 * Slug: adnbsl-wp7-starter/nom
 * Categories: adnbsl-content
 */
defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"></div>
<!-- /wp:group -->
```

WordPress auto-découvre `/patterns`. Catégories dans `inc/patterns.php`.

---

## Créer un Custom Block

1. Confirmer qu’un Core Block / Pattern ne suffit pas.
2. Créer `blocks/mon-bloc/block.json` (`apiVersion`: 3).
3. Rendu PHP (`render.php`) si dynamique.
4. Frontend : `viewScriptModule` + Interactivity API si interaction.
5. Éditeur : `index.js` + `index.asset.php` (dépendances `wp-blocks`, etc.).
6. `inc/blocks.php` enregistre tout dossier contenant `block.json`.
7. JS chargé uniquement lorsque le bloc est présent (métadonnées du bloc).

---

## Ajouter une interaction

- Simple (toggle, modal, accordion) → Interactivity API.
- Navigation overlay → déjà `core/navigation`.
- Apparition au scroll → `data-animate`.
- Complexe (timeline scrub, morph) → GSAP, projet client, enqueue conditionnel.

---

## Bonnes pratiques

- WordPress Core d’abord.
- Mobile-first, `clamp()`, peu de breakpoints.
- Accessibilité : sémantique, focus visible, pas d’ARIA cosmétique.
- SEO : HTML propre, pas de meta hardcodées (Yoast / Rank Math).
- Performance : pas de librairie globale inutile, pas de FontAwesome, pas de jQuery pour du JS moderne.
- Sécurité : escape à la sortie, sanitize à l’entrée, `defined( 'ABSPATH' ) || exit`.
- Pas de Next.js, Astro, React SPA, Elementor, Divi, Bootstrap, Tailwind global.

---

## Mise à jour du starter

1. Travailler dans un clone, pas sur un thème client déjà customisé.
2. Ne pas merger aveuglément `theme.json` d’un client vers le starter.
3. Remonter vers le starter uniquement les améliorations **génériques**.
4. Conserver l’interdiction CPT / taxonomies.
5. Vérifier la version WordPress cible (`Requires at least` dans `style.css`).
6. Relire `AGENTS.md` après toute évolution du workflow.

---

## Git

`.gitignore` du thème ignore secrets, caches, logs, `node_modules`, dumps SQL.

Ne jamais committer `wp-config.php`, uploads clients, clés API.

---

## Licence

GPL-2.0-or-later, comme WordPress.
