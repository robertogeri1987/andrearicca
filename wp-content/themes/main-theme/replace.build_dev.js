// https://www.npmjs.com/package/replace-in-file

const replace = require('replace-in-file');

const options = {
    files: '../../../wp-config.php',
    from: `define('WP_CACHE', true);`,
    to: `define('WP_CACHE', false);`
}


try {
    let res = replace.sync(options);
    console.log('=======> FINE replace.build_prod.js modifica WP_CACHE: ' + res);

} catch (err) {
    console.error('=======> !!! Errore in replace.build_prod.js !!! <=======');
}
