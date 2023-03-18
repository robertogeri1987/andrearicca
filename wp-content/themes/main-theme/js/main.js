/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./ts/header.ts":
/*!**********************!*\
  !*** ./ts/header.ts ***!
  \**********************/
/***/ ((__unused_webpack_module, exports) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.changeHeaderProperties = void 0;
/**
 * Aggiunge o rimuove classi css a "header" e ".top_header"
 * a seconda se addShadow è true o false
 * (di default è true)
 *
 * @param addShadow boolean
 */
function changeHeaderProperties(addShadow = true) {
    window.requestAnimationFrame((_ev) => {
        // si ricava l'elemento header
        const headerEl = document.querySelector('header');
        // si ricava l'elemento con classe top_header
        const topHeader = document.querySelector('.top_header');
        if (addShadow) {
            // si aggiungono le classi
            if (headerEl && !headerEl.className.includes('box-shadow--header')) {
                headerEl.className += ' box-shadow--header';
            }
            if (topHeader && !topHeader.className.includes('height-zero')) {
                topHeader.className += ' height-zero';
            }
        }
        else {
            // si rimuovono le classi
            if (headerEl && headerEl.className.includes('box-shadow--header')) {
                headerEl.className = headerEl.className.replace('box-shadow--header', '');
            }
            if (topHeader && topHeader.className.includes('height-zero')) {
                topHeader.className = topHeader.className.replace('height-zero', '');
            }
        }
    });
}
exports.changeHeaderProperties = changeHeaderProperties;


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
var __webpack_exports__ = {};
/*!***************************!*\
  !*** ./styles/style.scss ***!
  \***************************/
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
var exports = __webpack_exports__;
/*!********************!*\
  !*** ./ts/main.ts ***!
  \********************/

Object.defineProperty(exports, "__esModule", ({ value: true }));
const header_1 = __webpack_require__(/*! ./header */ "./ts/header.ts");
/**
 * globalVariables variabili globali utilizzate all'interno del sito
 */
let globalVariables = {
    lastKnownScrollPosition: 0,
    headerShadowTheshold: 50,
    faqDataTargetPrefix: '#collapse-',
    // TODO qui possono andarci altre proprietà utili
    // dopo averle prima definite nell'interfaccia `GlobalVariables` in models.ts
};
// al caricamento completo della pagina si chiama
// la funzione onDocumentLoaded
document.addEventListener('DOMContentLoaded', function () {
    onDocumentLoaded();
});
// $(() => {
// 	onDocumentLoaded();
// });
/**
 * chiamata quando viene finito di caricare il document
 */
function onDocumentLoaded() {
    // // si inizializzano gli slider
    // // si registra il listener per lo scroll
    // document.addEventListener('scroll', (ev: Event) => {
    // 	doOnScroll(ev);
    // });
    // enableThirdLevelMenu();
}
/**
 * Chiamato allo scroll della pagina
 *
 * @param ev {@link Event}
 */
function doOnScroll(ev) {
    const oldScrollPosition = globalVariables.lastKnownScrollPosition;
    const newScrollPosition = window.scrollY;
    // per ottimizzazione si chiama changeHeaderOnScroll solo quando
    // si oltrepassa la soglia globalVariables.headerShadowTheshold definita
    if ((oldScrollPosition > globalVariables.headerShadowTheshold && newScrollPosition < globalVariables.headerShadowTheshold)
        || (oldScrollPosition <= globalVariables.headerShadowTheshold && newScrollPosition >= globalVariables.headerShadowTheshold)) {
        (0, header_1.changeHeaderProperties)(newScrollPosition >= globalVariables.headerShadowTheshold);
    }
    // NOTA: qui di seguito possono andarci altri metodi da chiamare allo scroll
    // si aggiorna lastKnownScrollPosition
    globalVariables.lastKnownScrollPosition = newScrollPosition;
}

})();

/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibWFpbi5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQWE7QUFDYiw4Q0FBNkMsRUFBRSxhQUFhLEVBQUM7QUFDN0QsOEJBQThCO0FBQzlCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSztBQUNMO0FBQ0EsOEJBQThCOzs7Ozs7O1VDcEM5QjtVQUNBOztVQUVBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBOztVQUVBO1VBQ0E7O1VBRUE7VUFDQTtVQUNBOzs7OztXQ3RCQTtXQUNBO1dBQ0E7V0FDQSx1REFBdUQsaUJBQWlCO1dBQ3hFO1dBQ0EsZ0RBQWdELGFBQWE7V0FDN0Q7Ozs7Ozs7Ozs7OztBQ05BOzs7Ozs7Ozs7O0FDQWE7QUFDYiw4Q0FBNkMsRUFBRSxhQUFhLEVBQUM7QUFDN0QsaUJBQWlCLG1CQUFPLENBQUMsZ0NBQVU7QUFDbkM7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLENBQUM7QUFDRDtBQUNBO0FBQ0EsSUFBSTtBQUNKO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGNBQWM7QUFDZDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vdHMvaGVhZGVyLnRzIiwid2VicGFjazovLy93ZWJwYWNrL2Jvb3RzdHJhcCIsIndlYnBhY2s6Ly8vd2VicGFjay9ydW50aW1lL21ha2UgbmFtZXNwYWNlIG9iamVjdCIsIndlYnBhY2s6Ly8vLi9zdHlsZXMvc3R5bGUuc2Nzcz85ODNlIiwid2VicGFjazovLy8uL3RzL21haW4udHMiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XG5PYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgXCJfX2VzTW9kdWxlXCIsIHsgdmFsdWU6IHRydWUgfSk7XG5leHBvcnRzLmNoYW5nZUhlYWRlclByb3BlcnRpZXMgPSB2b2lkIDA7XG4vKipcbiAqIEFnZ2l1bmdlIG8gcmltdW92ZSBjbGFzc2kgY3NzIGEgXCJoZWFkZXJcIiBlIFwiLnRvcF9oZWFkZXJcIlxuICogYSBzZWNvbmRhIHNlIGFkZFNoYWRvdyDDqCB0cnVlIG8gZmFsc2VcbiAqIChkaSBkZWZhdWx0IMOoIHRydWUpXG4gKlxuICogQHBhcmFtIGFkZFNoYWRvdyBib29sZWFuXG4gKi9cbmZ1bmN0aW9uIGNoYW5nZUhlYWRlclByb3BlcnRpZXMoYWRkU2hhZG93ID0gdHJ1ZSkge1xuICAgIHdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWUoKF9ldikgPT4ge1xuICAgICAgICAvLyBzaSByaWNhdmEgbCdlbGVtZW50byBoZWFkZXJcbiAgICAgICAgY29uc3QgaGVhZGVyRWwgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdoZWFkZXInKTtcbiAgICAgICAgLy8gc2kgcmljYXZhIGwnZWxlbWVudG8gY29uIGNsYXNzZSB0b3BfaGVhZGVyXG4gICAgICAgIGNvbnN0IHRvcEhlYWRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy50b3BfaGVhZGVyJyk7XG4gICAgICAgIGlmIChhZGRTaGFkb3cpIHtcbiAgICAgICAgICAgIC8vIHNpIGFnZ2l1bmdvbm8gbGUgY2xhc3NpXG4gICAgICAgICAgICBpZiAoaGVhZGVyRWwgJiYgIWhlYWRlckVsLmNsYXNzTmFtZS5pbmNsdWRlcygnYm94LXNoYWRvdy0taGVhZGVyJykpIHtcbiAgICAgICAgICAgICAgICBoZWFkZXJFbC5jbGFzc05hbWUgKz0gJyBib3gtc2hhZG93LS1oZWFkZXInO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYgKHRvcEhlYWRlciAmJiAhdG9wSGVhZGVyLmNsYXNzTmFtZS5pbmNsdWRlcygnaGVpZ2h0LXplcm8nKSkge1xuICAgICAgICAgICAgICAgIHRvcEhlYWRlci5jbGFzc05hbWUgKz0gJyBoZWlnaHQtemVybyc7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICAgICAgZWxzZSB7XG4gICAgICAgICAgICAvLyBzaSByaW11b3Zvbm8gbGUgY2xhc3NpXG4gICAgICAgICAgICBpZiAoaGVhZGVyRWwgJiYgaGVhZGVyRWwuY2xhc3NOYW1lLmluY2x1ZGVzKCdib3gtc2hhZG93LS1oZWFkZXInKSkge1xuICAgICAgICAgICAgICAgIGhlYWRlckVsLmNsYXNzTmFtZSA9IGhlYWRlckVsLmNsYXNzTmFtZS5yZXBsYWNlKCdib3gtc2hhZG93LS1oZWFkZXInLCAnJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBpZiAodG9wSGVhZGVyICYmIHRvcEhlYWRlci5jbGFzc05hbWUuaW5jbHVkZXMoJ2hlaWdodC16ZXJvJykpIHtcbiAgICAgICAgICAgICAgICB0b3BIZWFkZXIuY2xhc3NOYW1lID0gdG9wSGVhZGVyLmNsYXNzTmFtZS5yZXBsYWNlKCdoZWlnaHQtemVybycsICcnKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0pO1xufVxuZXhwb3J0cy5jaGFuZ2VIZWFkZXJQcm9wZXJ0aWVzID0gY2hhbmdlSGVhZGVyUHJvcGVydGllcztcbiIsIi8vIFRoZSBtb2R1bGUgY2FjaGVcbnZhciBfX3dlYnBhY2tfbW9kdWxlX2NhY2hlX18gPSB7fTtcblxuLy8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbmZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG5cdHZhciBjYWNoZWRNb2R1bGUgPSBfX3dlYnBhY2tfbW9kdWxlX2NhY2hlX19bbW9kdWxlSWRdO1xuXHRpZiAoY2FjaGVkTW9kdWxlICE9PSB1bmRlZmluZWQpIHtcblx0XHRyZXR1cm4gY2FjaGVkTW9kdWxlLmV4cG9ydHM7XG5cdH1cblx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcblx0dmFyIG1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF0gPSB7XG5cdFx0Ly8gbm8gbW9kdWxlLmlkIG5lZWRlZFxuXHRcdC8vIG5vIG1vZHVsZS5sb2FkZWQgbmVlZGVkXG5cdFx0ZXhwb3J0czoge31cblx0fTtcblxuXHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cblx0X193ZWJwYWNrX21vZHVsZXNfX1ttb2R1bGVJZF0obW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cblx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcblx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xufVxuXG4iLCIvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG5fX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSAoZXhwb3J0cykgPT4ge1xuXHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcblx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcblx0fVxuXHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xufTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCJcInVzZSBzdHJpY3RcIjtcbk9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBcIl9fZXNNb2R1bGVcIiwgeyB2YWx1ZTogdHJ1ZSB9KTtcbmNvbnN0IGhlYWRlcl8xID0gcmVxdWlyZShcIi4vaGVhZGVyXCIpO1xuLyoqXG4gKiBnbG9iYWxWYXJpYWJsZXMgdmFyaWFiaWxpIGdsb2JhbGkgdXRpbGl6emF0ZSBhbGwnaW50ZXJubyBkZWwgc2l0b1xuICovXG5sZXQgZ2xvYmFsVmFyaWFibGVzID0ge1xuICAgIGxhc3RLbm93blNjcm9sbFBvc2l0aW9uOiAwLFxuICAgIGhlYWRlclNoYWRvd1RoZXNob2xkOiA1MCxcbiAgICBmYXFEYXRhVGFyZ2V0UHJlZml4OiAnI2NvbGxhcHNlLScsXG4gICAgLy8gVE9ETyBxdWkgcG9zc29ubyBhbmRhcmNpIGFsdHJlIHByb3ByaWV0w6AgdXRpbGlcbiAgICAvLyBkb3BvIGF2ZXJsZSBwcmltYSBkZWZpbml0ZSBuZWxsJ2ludGVyZmFjY2lhIGBHbG9iYWxWYXJpYWJsZXNgIGluIG1vZGVscy50c1xufTtcbi8vIGFsIGNhcmljYW1lbnRvIGNvbXBsZXRvIGRlbGxhIHBhZ2luYSBzaSBjaGlhbWFcbi8vIGxhIGZ1bnppb25lIG9uRG9jdW1lbnRMb2FkZWRcbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgb25Eb2N1bWVudExvYWRlZCgpO1xufSk7XG4vLyAkKCgpID0+IHtcbi8vIFx0b25Eb2N1bWVudExvYWRlZCgpO1xuLy8gfSk7XG4vKipcbiAqIGNoaWFtYXRhIHF1YW5kbyB2aWVuZSBmaW5pdG8gZGkgY2FyaWNhcmUgaWwgZG9jdW1lbnRcbiAqL1xuZnVuY3Rpb24gb25Eb2N1bWVudExvYWRlZCgpIHtcbiAgICAvLyAvLyBzaSBpbml6aWFsaXp6YW5vIGdsaSBzbGlkZXJcbiAgICAvLyAvLyBzaSByZWdpc3RyYSBpbCBsaXN0ZW5lciBwZXIgbG8gc2Nyb2xsXG4gICAgLy8gZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgKGV2OiBFdmVudCkgPT4ge1xuICAgIC8vIFx0ZG9PblNjcm9sbChldik7XG4gICAgLy8gfSk7XG4gICAgLy8gZW5hYmxlVGhpcmRMZXZlbE1lbnUoKTtcbn1cbi8qKlxuICogQ2hpYW1hdG8gYWxsbyBzY3JvbGwgZGVsbGEgcGFnaW5hXG4gKlxuICogQHBhcmFtIGV2IHtAbGluayBFdmVudH1cbiAqL1xuZnVuY3Rpb24gZG9PblNjcm9sbChldikge1xuICAgIGNvbnN0IG9sZFNjcm9sbFBvc2l0aW9uID0gZ2xvYmFsVmFyaWFibGVzLmxhc3RLbm93blNjcm9sbFBvc2l0aW9uO1xuICAgIGNvbnN0IG5ld1Njcm9sbFBvc2l0aW9uID0gd2luZG93LnNjcm9sbFk7XG4gICAgLy8gcGVyIG90dGltaXp6YXppb25lIHNpIGNoaWFtYSBjaGFuZ2VIZWFkZXJPblNjcm9sbCBzb2xvIHF1YW5kb1xuICAgIC8vIHNpIG9sdHJlcGFzc2EgbGEgc29nbGlhIGdsb2JhbFZhcmlhYmxlcy5oZWFkZXJTaGFkb3dUaGVzaG9sZCBkZWZpbml0YVxuICAgIGlmICgob2xkU2Nyb2xsUG9zaXRpb24gPiBnbG9iYWxWYXJpYWJsZXMuaGVhZGVyU2hhZG93VGhlc2hvbGQgJiYgbmV3U2Nyb2xsUG9zaXRpb24gPCBnbG9iYWxWYXJpYWJsZXMuaGVhZGVyU2hhZG93VGhlc2hvbGQpXG4gICAgICAgIHx8IChvbGRTY3JvbGxQb3NpdGlvbiA8PSBnbG9iYWxWYXJpYWJsZXMuaGVhZGVyU2hhZG93VGhlc2hvbGQgJiYgbmV3U2Nyb2xsUG9zaXRpb24gPj0gZ2xvYmFsVmFyaWFibGVzLmhlYWRlclNoYWRvd1RoZXNob2xkKSkge1xuICAgICAgICAoMCwgaGVhZGVyXzEuY2hhbmdlSGVhZGVyUHJvcGVydGllcykobmV3U2Nyb2xsUG9zaXRpb24gPj0gZ2xvYmFsVmFyaWFibGVzLmhlYWRlclNoYWRvd1RoZXNob2xkKTtcbiAgICB9XG4gICAgLy8gTk9UQTogcXVpIGRpIHNlZ3VpdG8gcG9zc29ubyBhbmRhcmNpIGFsdHJpIG1ldG9kaSBkYSBjaGlhbWFyZSBhbGxvIHNjcm9sbFxuICAgIC8vIHNpIGFnZ2lvcm5hIGxhc3RLbm93blNjcm9sbFBvc2l0aW9uXG4gICAgZ2xvYmFsVmFyaWFibGVzLmxhc3RLbm93blNjcm9sbFBvc2l0aW9uID0gbmV3U2Nyb2xsUG9zaXRpb247XG59XG4iXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=