<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_double_arrow_down" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type="description" content="Popularny hotel o różnorodnych pokojach dla każdego" />
        <link rel="stylesheet" href="../styles/globalStyles.css">
        <link rel="stylesheet" href="../styles/rezerwacja.css">
        <link rel="icon" href="../source/logo.svg" />
        <title>Hotel Floria</title>
    </head>
    <body>
            <div id="header-container" >
                <header id="header-in-scroll" class="hide-header">
                    <img src="../source/logo.svg" alt="logo" />
                    <nav>
                        <ul>
                            <li><a href="../index.php">Hotel</a></li>
                            <li><a href="./pokoje.php">Pokoje</a></li>
                            <li><a href="./restauracja.php">Restauracja</a></li>
                            <li><a href="./kontakt.php">Kontakt</a></li>
                            <li class="active"><a href="./rezerwacja.php">Rezerwuj</a></li>
                        </ul>
                    </nav>
                    </header>
                    
                    <header id="header-initial" class="" >
                    <img src="../source/logo.svg" alt="logo" />
                    <nav>
                        <ul>
                            <li ><a href="../index.php">Hotel</a></li>
                            <li><a href="./pokoje.php">Pokoje</a></li>
                            <li><a href="./restauracja.php">Restauracja</a></li>
                            <li ><a href="./kontakt.php">Kontakt</a></li>
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
                        <p>
                            <label for="od">Od</label>
                            <input type="date" id="od">
                            
                            <label for="do">Do</label>
                            <input type="date" id="do">
                        </p>
                        <h3>Wybierz pokój</h3>
                        <p>
                            <label>Pokój</label>
                            <select>
                                <option>Pokój 1 osobowy </option>
                                <option>Pokój 1 osobowy </option>
                                <option>Pokój 2 osobowy </option>
                                <option>Pokój 2 osobowy </option>
                                <option>Pokój 2 osobowy </option>
                                <option>Pokój 2 osobowy </option>
                                <option>Pokój 4 osobowy </option>
                                <option>Pokój 4 osobowy </option>
                                <option>Pokój 6 osobowy  - Family Room</option>
                            </select>
                        </p>
                        <h3>Dane kontaktowe</h3>
                        <p>
                            <label>Imie</label>
                            <input type="text"/>
                            <labe>Nazwisko</labe>
                            <input type="text"/>
                            <br />
                            <label>Email</label>
                            <input type="email"/>

                        </p>
                        <h3>Dodatkowe</h3>
                        <p>
                            <input type="checkbox"/><label>Śniadanie - 50zł / os</label><br />
                            <input type="checkbox"/><label>Parking całodobowy - 70zł</label><br />
                            <input type="checkbox"/><label>Obsługa sprzątająca - 20zł</label><br />
                            <input type="checkbox"/><label>Jaccuzzi - 60zł</label>
                        </p>

                        <p><input type="submit" value="Zarezerwuj pokój"></p>

                    </form>
                </section>
            </main>
            <footer>
                <div>
                 <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="./pokoje.php">Pokoje</a></li>
                    <li><a href="./restauracja.php">Restauracja</a></li>
                    <li><a href="./kontakt.php">Kontakt</a></li>
                    <li><a href="./rezerwacja.php">Rezerwuj</a></li>
                </ul>
                </div>
               
                <div>
                    <ul>
                        
                        <li><img src="../source/logo.svg" alt="logo"></li>
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
    <script src="../scripts/handleSlider.js"></script>
</html>