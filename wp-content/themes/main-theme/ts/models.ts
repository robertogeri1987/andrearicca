/**
 * GlobalVariables interfaccia delle
 * variabili contenenti informazioni utili all'interno del sito
 */
export interface GlobalVariables {
    /**
     * {@link lastKnownScrollPosition} variabile di appoggio
     * che conserva la posizione dell'ultimo scroll
     */
    lastKnownScrollPosition: number;
    /**
     * {@link headerShadowTheshold} numero oltre il quale si
     * applica la transizione dell'header
     */
    headerShadowTheshold: number;
    /**
     * prefisso del data-taget dell'accordion delle faq
     */
    faqDataTargetPrefix: string;

}