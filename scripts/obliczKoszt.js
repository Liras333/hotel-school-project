const kosztP = document.getElementById("koszt");

//obiekt pokoi
const pokojeArr = [
    { id: 1, nazwa: "Pokój 1 osobowy Riva Hiot",miejsca:1, cena: 179 },
    { id: 2, nazwa: "Pokój 1 osobowy Maria Rot", miejsca:1, cena: 242 },
    { id: 3, nazwa: "Pokój 2 osobowy Stardust", miejsca:2, cena: 541 },
    { id: 4, nazwa: "Pokój 2 osobowy Vesta Liva", miejsca:2, cena: 345 },
    { id: 5, nazwa: "Pokój 2 osobowy Granda Hal", miejsca:2, cena: 299 },
    { id: 6, nazwa: "Pokój 2 osobowy Frista Vel", miejsca:2, cena: 378 },
    { id: 7, nazwa: "Pokój 4 osobowy Prente Lar", miejsca:4,  cena: 811 },
    { id: 8, nazwa: "Pokój 4 osobowy Deste Wur", miejsca:4, cena: 762 },
    { id: 9, nazwa: "Pokój 6 osobowy Jil Fin", miejsca:6, cena: 1024 }
]

//obliczanie kosztu
function obliczKoszt() {

    //pobieranie wartości z formularza
    const od_kiedy = document.getElementById("od_kiedy");
    const do_kiedy = document.getElementById("do_kiedy");
    const pokoj = document.getElementById("pokoj");
    const dorosli = document.getElementById("dorosli");
    const dzieci = document.getElementById("dzieci");
    const czy_sniadanie = document.getElementById("czy_sniadanie");
    const wybranyPokoj = pokojeArr.find(pokojObj=> pokojObj.id === parseInt(pokoj.value));


    //sprawdzanie czy pola są puste
    if (!od_kiedy.value || !do_kiedy.value || !pokoj.value || !dorosli.value || !dzieci.value) {
        kosztP.innerHTML = "<b>Cena ostateczna: </b>0 zł";
    }

    // sprawdzanie czy data nie jest mniejsza niż  początkowa
    const data1 = new Date(od_kiedy.value);
    const data2 = new Date(do_kiedy.value);

    if(data1 >= data2 || data1 == "Invalid Date" || data2 == "Invalid Date"){ 
        kosztP.innerHTML = "<b>Cena ostateczna: </b>0 zł";
        return;
    }

    //obliczanie kosztu
    const cenaPokoju = wybranyPokoj.cena;
    const iloscDni = (Math.abs((data2 - data1)) / (1000 * 60 * 60 * 24))
    const kosztSniadania = czy_sniadanie.checked ? (dorosli.value * 50) + (dzieci.value * 25) : 0;

    const koszt = cenaPokoju * iloscDni + kosztSniadania;

    kosztP.innerHTML = `<b>Cena ostateczna: </b>${koszt} zł`;
}


// OSOBNE SPRAWDZANIE ILOSCI DOROSLYCH I DZIECI
const dorosli = document.getElementById("dorosli");
const dzieci = document.getElementById("dzieci");

dorosli.addEventListener("input", function(){
    const pokoj = document.getElementById("pokoj");
    const wybranyPokoj = pokojeArr.find(pokojObj=> pokojObj.id === parseInt(pokoj.value));

    if( dorosli.value < 1 ) dorosli.value = "1";
    if( dorosli.value > wybranyPokoj.miejsca - dzieci.value) dorosli.value = wybranyPokoj.miejsca - dzieci.value;
});

dzieci.addEventListener("input", function(){
    const pokoj = document.getElementById("pokoj");
    const wybranyPokoj = pokojeArr.find(pokojObj=> pokojObj.id === parseInt(pokoj.value));

    if( dzieci.value < 0 ) dzieci.value = "0";
    if( dzieci.value > wybranyPokoj.miejsca - dorosli.value - 1 ) dzieci.value = wybranyPokoj.miejsca - dorosli.value ;
});