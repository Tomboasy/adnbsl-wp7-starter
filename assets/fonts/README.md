# Fonts locales

Aucune Google Font distante n’est chargée par défaut.

Le starter utilise les stacks système définies dans `theme.json` :

- `system-sans`
- `system-serif`
- `system-mono`

Pour ajouter une police locale (WordPress Font Library / `fontFace`) :

1. Déposer les fichiers `.woff2` ici (variable de préférence).
2. Déclarer la famille dans `theme.json` → `settings.typography.fontFamilies`
   avec `"src": ["file:./assets/fonts/Nom/fichier.woff2"]`.
3. Appliquer la famille dans `styles.typography.fontFamily`.

Ne jamais pointer vers `fonts.googleapis.com` dans le starter générique.
