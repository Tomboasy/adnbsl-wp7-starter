# Accordion — ne pas dupliquer le Core

WordPress **7.0.4** fournit déjà `core/accordion` (et `core/accordion-item`,
`core/accordion-heading`, `core/accordion-panel`) avec Interactivity API,
accessibilité et overlay mobile-ready.

Ce starter **n’enregistre pas** de custom block accordion.

Utiliser :

- le bloc Accordion dans Gutenberg ;
- le pattern `adnbsl-wp7-starter/faq`.

Créer un custom accordion uniquement si un projet client a un comportement
impossible à obtenir avec le Core (ex. source de données métier spécifique).
