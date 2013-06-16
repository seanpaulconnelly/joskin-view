joskin-view
===========

Functional wireframe with Bootstrap and compile-able SCSS/JS.  

Rigged together with a nested folder system and various index.php files to quickly demonstrate a desireable URL structure.

App is to harness live data from RSportz during the 2013 JOs of Inline Hockey, FIRS, and AAU/USARS Adult Nationals

### Demo site
Demo site can be found here: http://seanconnelly.me/rsportz/joskin

### Local Setup
1. Clone the repo
2. Change the `$siteurl` found in header.php to whatever you're using (for me it's http://localhost:8888/joskin-view)
3. Start local server, open browser, go to URL
4. Done.

### Skin Options
The wireframe has four different available 'skins' for pre-development presentation.  This feature should be removed in the finished product.

When one of the `.skin-options` is selected in the UI, the matching class is added to any element on the page that carries `.skin`.

To add a new changeable skin area, just add `.skin` to any HTML element and then add the appropriate css rules for `.skin-one`, `.skin-two`, `.skin-three`, and `.skin-four`, prefereably inside of assets/scss/components/skin-switcher.
