import { GlobalVariables } from "./models";
import { changeHeaderProperties } from "./header";


/**
 * globalVariables variabili globali utilizzate all'interno del sito
 */
let globalVariables: GlobalVariables = {
	lastKnownScrollPosition: 0,
	headerShadowTheshold: 50,
	faqDataTargetPrefix: '#collapse-',
	// TODO qui possono andarci altre proprietà utili
	// dopo averle prima definite nell'interfaccia `GlobalVariables` in models.ts

}

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
function onDocumentLoaded(): void {
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
function doOnScroll(ev: Event): void {
	const oldScrollPosition = globalVariables.lastKnownScrollPosition;
	const newScrollPosition = window.scrollY;
	// per ottimizzazione si chiama changeHeaderOnScroll solo quando
	// si oltrepassa la soglia globalVariables.headerShadowTheshold definita
	if ((oldScrollPosition > globalVariables.headerShadowTheshold && newScrollPosition < globalVariables.headerShadowTheshold)
		|| (oldScrollPosition <= globalVariables.headerShadowTheshold && newScrollPosition >= globalVariables.headerShadowTheshold)
	) {
		changeHeaderProperties(newScrollPosition >= globalVariables.headerShadowTheshold);
	}
	// NOTA: qui di seguito possono andarci altri metodi da chiamare allo scroll

	// si aggiorna lastKnownScrollPosition
	globalVariables.lastKnownScrollPosition = newScrollPosition;
}
