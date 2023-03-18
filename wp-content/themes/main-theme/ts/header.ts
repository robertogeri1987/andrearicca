
/**
 * Aggiunge o rimuove classi css a "header" e ".top_header"
 * a seconda se addShadow è true o false
 * (di default è true)
 * 
 * @param addShadow boolean
 */
export function changeHeaderProperties(addShadow: boolean = true): void {
    window.requestAnimationFrame((_ev) => {
        // si ricava l'elemento header
        const headerEl = document.querySelector('header');
        // si ricava l'elemento con classe top_header
        const topHeader = document.querySelector('.top_header');
        if (addShadow) {
            // si aggiungono le classi
            if (headerEl && !headerEl.className.includes('box-shadow--header')) {
                headerEl.className += ' box-shadow--header'
            }
            if (topHeader && !topHeader.className.includes('height-zero')) {
                topHeader.className += ' height-zero'
            }
        } else {
            // si rimuovono le classi
            if (headerEl && headerEl.className.includes('box-shadow--header')) {
                headerEl.className = headerEl.className.replace('box-shadow--header', '')
            }
            if (topHeader && topHeader.className.includes('height-zero')) {
                topHeader.className = topHeader.className.replace('height-zero', '')
            }
        }
    })
}
