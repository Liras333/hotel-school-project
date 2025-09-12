<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_double_arrow_down" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type="description" content="Popularny hotel o różnorodnych pokojach dla każdego" />
        <link rel="stylesheet" href="../styles/globalStyles.css">
        <link rel="stylesheet" href="../styles/rezerwacja.css">
        <link rel="icon" href="../source/logo.png" />
        <title>Hotel Floria</title>
    </head>
    <body>
            <div id="header-container" >
                 <nav class="mobile-navigation">
                    <ul>
                        <li><img src="../source/logo.png" /></li>
                        <li><a href="../index.html">Hotel</a></li>
                        <li><a href="./pokoje.html">Pokoje</a></li>
                        <li><a href="./restauracja.html">Restauracja</a></li>
                        <li><a href="./kontakt.html">Kontakt</a></li>
                        <li class="active"><a href="./rezerwacja.php">Rezerwuj</a></li>
                    </ul>
                </nav>
                <header id="header-in-scroll" class="hide-header">
                    <img src="../source/logo.png" alt="logo" />
                    <nav>
                        <ul>
                            <li><a href="../index.html">Hotel</a></li>
                            <li><a href="./pokoje.html">Pokoje</a></li>
                            <li><a href="./restauracja.html">Restauracja</a></li>
                            <li><a href="./kontakt.html">Kontakt</a></li>
                            <li class="active"><a href="./rezerwacja.php">Rezerwuj</a></li>
                        </ul>
                    </nav>

                    <img src="../source/menu-icon.png" class="menu-icon" />

                    </header>
                    
                    <header id="header-initial" class="" >
                    <img src="../source/logo.png" alt="logo" />
                    <nav>
                        <ul>
                            <li><a href="../index.html">Hotel</a></li>
                            <li><a href="./pokoje.html">Pokoje</a></li>
                            <li><a href="./restauracja.html">Restauracja</a></li>
                            <li><a href="./kontakt.html">Kontakt</a></li>
                            <li class="active"><a href="./rezerwacja.php">Rezerwuj</a></li>
                        </ul>
                    </nav>
                </header>
                    <h1>
                       Rezerwacja
                    </h1>
            </div>

            <main>
                <section>
                    <form method="post" action="../scripts/dodajRezerwacje.php">
                        <h3>Data wynajęcia</h3>
                        <p class="date">
                            <input type="date" id="od_kiedy" name="od_kiedy" onchange="obliczKoszt()" required>
                            -
                            <input type="date" id="do_kiedy" name="do_kiedy" onchange="obliczKoszt()" required>
                            <br />
                            <span  class="error"></span>
                        </p>
                        <h3>Wybierz pokój i liczbę osób</h3>
                        <p>
                            <select id="pokoj" name="pokoj" onchange="obliczKoszt()">
                                <option value="1">Pokój 1 osobowy Riva Hiot - 179zł</option>
                                <option value="2">Pokój 1 osobowy Maria Rot - 242zł</option>
                                <option value="3">Pokój 2 osobowy Stardust - 541zł</option>
                                <option value="4">Pokój 2 osobowy Vesta Liva - 345zł</option>
                                <option value="5">Pokój 2 osobowy Granda Hal - 299zł</option>
                                <option value="6">Pokój 2 osobowy Frista Vel - 378zł</option>
                                <option value="7">Pokój 4 osobowy Prente Lar - 811zł</option>
                                <option value="8">Pokój 4 osobowy Deste Wur - 762zł</option>
                                <option value="9">Pokój 6 osobowy Jil Fin - 1024zł</option>
                            </select>
                        </p>
                        <div class="osoby">
                            <p>
                                <label for="dorosli">Dorośli</label>
                                <input type="number" value="1" id="dorosli" name="dorosli" required>
                            </p>
                            <p>
                                <label for="dzieci">Dzieci</label>
                                <input type="number" value="0" id="dzieci" name="dzieci"  required>
                            </p>
                        </div>
                        <h3>Dane kontaktowe</h3>
                        <div class="dane-kontaktowe">
                            <p>
                                <label for="imie">Imie</label>
                                <input type="text" id="imie" name="imie" placeholder="Imie" oninput="obliczKoszt()" required/>
                            </p>
                            <p>
                                <label for="nazwisko">Nazwisko</label>
                                <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko" oninput="obliczKoszt()" required/>
                            </p>
                            <p>
                                <label for="telefon">Numer telefonu</label>
                                <input type="text" id="telefon" name="telefon" placeholder="123456789" required/>
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="email@example.com" required/>
                            </p>
                          </div>
                        <h3>Dodatkowe</h3>
                        <p>
                            <input type="checkbox" id="czy_sniadanie" name="czy_sniadanie" onchange="obliczKoszt()"/>
                            <label for="czy_sniadanie"> Śniadanie - 50zł / os.</label>

                        </p>

                        <p id="koszt"><b>Cena ostateczna: </b>0 zł</p>
                        <input type="submit" disabled="true" id="przycisk" value="Zatwierdź rezerwacje">

                    </form>
                </section>
            </main>
            <footer>
                <div>
                 <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="./pokoje.html">Pokoje</a></li>
                    <li><a href="./restauracja.html">Restauracja</a></li>
                    <li><a href="./kontakt.html">Kontakt</a></li>
                    <li><a href="./rezerwacja.php">Rezerwuj</a></li>
                </ul>
                </div>
               
                <div>
                    <ul>
                        
                        <li><img src="../source/logo.png" alt="logo"></li>
                        <li><a href="./regulamin.html">Regulamin</a></li>
                        <li><a href="./faq.html">FAQ</a></li>
                    </ul>
                </div>
                <div>

                    <ul>
                        <li>Telefon 372 291 021</li>
                        <li>floria@company.com</li> 
                        <li>Autor: Patryk Migała</li>
                    </ul>
                </div>
                </footer>
    </body>
    <script>
        
    </script>
    <script src="../scripts/handleHeaders.js"></script>
    <script src="../scripts/handleMenu.js"></script>
    <script  src="../scripts/obliczKoszt.js"></script>

</html>