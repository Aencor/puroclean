(self["webpackChunkKikemonk"] = self["webpackChunkKikemonk"] || []).push([["/main"],{

/***/ "./wp-content/themes/kikemonk/assets/js/main.js":
/*!******************************************************!*\
  !*** ./wp-content/themes/kikemonk/assets/js/main.js ***!
  \******************************************************/
/***/ (() => {

// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", function (event) {
  gsap.registerPlugin(Flip, ScrollTrigger, ScrollToPlugin, TextPlugin);
  // Footer animation
  var footerTL = gsap.timeline();
  var widgetLinks = '.widget-links li',
    footerLogo = '.footer-logo',
    socialIcons = '.social-icons a',
    footerCopyrights = '.copyrights';

  // GSAP Sets
  gsap.set(footerLogo, {
    x: -40,
    autoAlpha: 0
  });
  gsap.set(socialIcons, {
    x: 40,
    autoAlpha: 0
  });
  gsap.set(widgetLinks, {
    x: -40,
    autoAlpha: 0
  });
  gsap.set(footerCopyrights, {
    y: -40,
    autoAlpha: 0
  });
  var footerAnimation = footerTL.to(footerLogo, {
    x: 0,
    autoAlpha: 1
  }).to(socialIcons, {
    x: 0,
    autoAlpha: 1,
    stagger: 0.1
  }).to(widgetLinks, {
    x: 0,
    autoAlpha: 1,
    stagger: 0.1
  }).to(footerCopyrights, {
    y: 0,
    autoAlpha: 1
  });

  // Footer animation
  ScrollTrigger.create({
    trigger: '.global-footer',
    start: '-50px center',
    end: 'bottom',
    animation: footerAnimation
  });
});

/***/ }),

/***/ "./wp-content/themes/kikemonk/assets/scss/style.scss":
/*!***********************************************************!*\
  !*** ./wp-content/themes/kikemonk/assets/scss/style.scss ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["style"], () => (__webpack_exec__("./wp-content/themes/kikemonk/assets/js/main.js"), __webpack_exec__("./wp-content/themes/kikemonk/assets/scss/style.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=main.js.map