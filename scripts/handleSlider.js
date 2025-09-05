const sekcja5 = document.querySelectorAll('.sekcja-slider > div');
const prev = document.querySelector('.prev')
const next = document.querySelector('.next')

let index = 0;
prev.addEventListener('click', () => {
    index--;

    if (index === -1) index = 2;

    sekcja5.forEach((div, i) => {
        if (i === index) div.classList.add('show-div');
        else div.classList.remove('show-div')
    })
})

next.addEventListener('click', () => {
    index++;
    if (index === 3) index = 0;

    sekcja5.forEach((div, i) => {
        if (i === index) div.classList.add('show-div');
        else div.classList.remove('show-div')
    })
})