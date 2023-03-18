// https://www.npmjs.com/package/replace-in-file

const replace = require('replace-in-file');

// si cerca l'occorrenza ".NON_EDITARE{size:0px}" e si sostituisce
// con il commento del template richiesto da wordpress
const options = {
    files: './style.css',
    from: /\.NON_EDITARE/,
    to: `
/*
Theme Name: main-theme
Theme URI: https://infloweb.it
Author: the WordPress team
Author URI: https://infloweb.it
Description: Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Version: 1
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: iw
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
.dummyClass`,
};


try {
    let res = replace.sync(options);
    console.log('=======> FINE replace.build_common.js commento tema wordpress css: ' + res);

} catch (err) {
    console.error('=======> !!! Errore in replace.build_common.js !!! <=======');
}
