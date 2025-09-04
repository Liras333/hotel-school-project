// DOMContentLoaded potrzebne do początkowego ustawienia headera

document.addEventListener('DOMContentLoaded', ()=> { 
            const headerInitial = document.getElementById('header-initial');
            const headerInScroll = document.getElementById('header-in-scroll');

            // początkowe sprawdzenie położenia użytkownika na stronie

            if(window.scrollY > 0) {
                    headerInitial.classList.add('hide-header');
                    headerInScroll.classList.remove('hide-header');
            }
            else if(window.scrollY === 0){
                    headerInitial.classList.remove('hide-header');
                    headerInScroll.classList.add('hide-header');
            }

            // sprawdzanie event listenerem eventu scroll

            document.addEventListener('scroll', () => {
                document.addEventListener('scroll', () => {
                if(window.scrollY > 0) {
                    headerInitial.classList.add('hide-header');
                    headerInScroll.classList.remove('hide-header');
                }
                else if(window.scrollY === 0){
                    headerInitial.classList.remove('hide-header');
                    headerInScroll.classList.add('hide-header');
                }
            })
            })
        })