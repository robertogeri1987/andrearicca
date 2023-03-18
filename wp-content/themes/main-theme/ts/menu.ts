/**
 * abilita il menù di terzo livello
 * aggiungendo o togliendo la classe show agli ul nascosti di terzo livello
 */
export function enableThirdLevelMenu() {
    const items = document.querySelectorAll('ul.dropdown-menu .dropdown-toggle');
    // per ogni ul.dropdown-menu .dropdown-toggle
    // si aggiunge un event listener per il click
    items.forEach((item) => {
        item.addEventListener('click', (event) => {
            // al click si disabilita il comportamento di defualt
            event.preventDefault();
            event.stopPropagation();
            closePreviousNestedMenu();
            // si aggiunge la classe show all'ul subito accanto
            const nextUl = (event.currentTarget as HTMLElement).nextSibling as HTMLElement
            nextUl.className += ' show'
        })
    });

    const mainButtons = document.querySelectorAll('.nav-link.dropdown-toggle');
    mainButtons.forEach((item) => {
        item.addEventListener('click', (event) => {
            closePreviousNestedMenu();
        });
    })
}

/**
 * chiude gli item di terzo livello
 */
function closePreviousNestedMenu(): void {
    // si cercano dropdown-menu.lev-3
    const s = [...document.querySelectorAll('.dropdown-menu.lev-3')]
    const oldShows = s.filter(el => el.classList.contains('show'))
    // se prima avevano la classe show, si rimuove
    oldShows?.forEach(el => {
        el.className = el.className.replace('show', '');
    });
}