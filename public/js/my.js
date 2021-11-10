/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./resources/js/my.js ***!
  \****************************/
window.onclick = function (event) {
  var obj1 = document.getElementById('dropdown01');
  var obj2 = document.getElementById('dropdown02');

  if (event.target == obj1 || event.target == obj2) {
    obj2.classList.add('show');
  } else {
    obj2.classList.remove('show');
  }
};
/******/ })()
;