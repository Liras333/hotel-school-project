// load potrzebne aby skrypt wykonał się po załadowaniu całej strony (gdyby miał zajść jakiś błąd)

window.addEventListener('load', ()=> { 
    const headerInitial = document.getElementById('header-initial');
    const headerInScroll = document.getElementById('header-in-scroll');

    // powrót na samą góre strony
    window.scrollTo(0,0)

    // sprawdzanie event listenerem eventu scroll i zmiana klas w callbacku
    document.addEventListener('scroll', () => {
        document.addEventListener('scroll', () => {
            if(window.scrollY > 0) {
                headerInitial.classList.add('hide-header');
                headerInScroll.classList.remove('hide-header');
            }
            else {
                headerInitial.classList.remove('hide-header');
                headerInScroll.classList.add('hide-header');
            }
        })
    })
})