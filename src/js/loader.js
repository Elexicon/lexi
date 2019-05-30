// Everything that gets packaged in Webpack comes in through a *single* .js file. This file!
// Because of that, we need to introduce our core .scss file here as well.
import "../scss/loader.scss";

// Import Underscores JS
require('./navigation.js')
require('./skip-link-focus-fix.js')
