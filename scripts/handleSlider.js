const sekcja5 = document.querySelectorAll('.sekcja-slider > div');
const prev = document.querySelector('.prev')
const next = document.querySelector('.next')

// index obrazka
let index = 0;

// zmiana obrazka do 12 sekund do przodu
const interval = setInterval(()=>{
    index ++
    if(index === 3) index = 0;
    
    sekcja5.forEach((div, i) => {
        if (i === index) div.classList.add('show-div');
        else div.classList.remove('show-div')
    })
}, 12_000)


// eventy przycisków slidera
prev.addEventListener('click', () => {
    window.clearInterval(interval)
    index--;

    if (index === -1) index = 2;

    sekcja5.forEach((div, i) => {
        if (i === index) div.classList.add('show-div');
        else div.classList.remove('show-div')
    })
})

next.addEventListener('click', () => {
    window.clearInterval(interval)

    index++;
    if (index === 3) index = 0;

    sekcja5.forEach((div, i) => {
        if (i === index) div.classList.add('show-div');
        else div.classList.remove('show-div')
    })
})

