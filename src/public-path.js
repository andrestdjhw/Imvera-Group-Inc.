// Webpack 5's "auto" publicPath detects the chunk-loading base URL from the
// currently executing <script>'s own src. LiteSpeed Cache's JS optimizer
// (combine/defer/delay) rewrites and re-serves that script from its own
// cache path (/wp-content/litespeed/js/...), which breaks that detection
// and causes dynamic import() chunks (e.g. the EmailJS lazy-load in
// ContactForm.js) to 404 as "Loading chunk ... failed".
// Setting it explicitly from the real theme build URL (localized from PHP)
// makes chunk loading immune to however the main bundle itself got served.
if (typeof window !== "undefined" && window.imveraBuildPath) {
  // eslint-disable-next-line no-undef
  __webpack_public_path__ = window.imveraBuildPath
}
