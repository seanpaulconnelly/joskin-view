joskin-view
===========

Functional wireframe with Bootstrap and compile-able SCSS/JS.  

Rigged together with a nested folder system and various index.php files to quickly demonstrate a desireable URL structure.

App is to harness live data from RSportz during the 2013 JOs of Inline Hockey, FIRS, and AAU/USARS Adult Nationals

### Skin Options
The wireframe has four different available 'skins' for pre-development presentation.  This feature should be removed in the finished product.

When one of the `.skin-options` is selected in the UI, the matching class is added to any element on the page that carries `.skin`.

To add a new changeable skin area, just add `.skin` to any HTML element and then add the appropriate css rules for `.skin-one`, `.skin-two`, `.skin-three`, and `.skin-four`, prefereable inside of assets/scss/components/skin-switcher.
