<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_double_arrow_down" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type="description" content="Popularny hotel o różnorodnych pokojach dla każdego" />
        <link rel="stylesheet" href="../../styles/globalStyles.css">
        <link rel="stylesheet" href="../../styles/pokoj.css">
        <link rel="icon" href="../../source/logo.svg" />
        <title>Hotel Floria</title>
        <style>
            #header-container {
                background-image: url('../../source/pokoje/pokoj-2-osoby3.png')
            }
        </style>
    </head>
    <body>
            <div id="header-container" >
                 <nav class="mobile-navigation">
                    <ul>
                        <li><img src="../../source/logo.svg"/></li>
                        <li><a href="../../index.php">Hotel</a></li>
                        <li class="active"><a href="../pokoje.php">Pokoje</a></li>
                        <li><a href="../restauracja.php">Restauracja</a></li>
                        <li ><a href="../kontakt.php">Kontakt</a></li>
                        <li><a href="../rezerwacja.php">Rezerwuj</a></li>
                    </ul>
                </nav>
                <header id="header-in-scroll">
                    <img src="../../source/logo.svg" alt="logo" />
                    <nav>
                        <ul>
                            <li><a href="../../index.php">Hotel</a></li>
                            <li class="active"><a href="../pokoje.php">Pokoje</a></li>
                            <li><a href="../restauracja.php">Restauracja</a></li>
                            <li><a href="../kontakt.php">Kontakt</a></li>
                            <li><a href="../rezerwacja.php">Rezerwuj</a></li>
                        </ul>
                    </nav>

                    <img src="../../source/menu-icon.png" class="menu-icon" />
                    </header>
                    
                    <a href="../pokoje.php"><button class="back">&larr; Powrót</button></a>
                    <h1>
                       Pokój 2 osobowy Granda Hal
                    </h1>
            </div>

            <main>
                <section class="sekcja sekcja1">
                        <div class="informacje1">
                            <div>
                                <p class="cena">299zł/noc</p>
                                <p class="osoby">maks. 2 osoby</p>
                            </div>
                            <div>
                                <a href="../rezerwacja.php"><button>Zarezerwuj</button></a>
                            </div>
                        </div>
                        <div class="informacje3">
                            <h3>Granda Hal</h3>
                            <p> Zbudowany jest z kamienia, a na suficie widać ciężkie drewniane belki, które nadają mu rustykalnego charakteru. Pośrodku pokoju stoi duże, wygodne łóżko z białymi poduszkami, a obok niego, na stoliku, położone są książki, co zachęca do relaksu. W rogu pokoju znajduje się zielony, pluszowy fotel, który dodaje wnętrzu przytulności i jest świetnym miejscem do odpoczynku.</p>
                        </div>
                        <div class="informacje3">
                            <ul>
                                <li>Podwójne łóżko</li>
                                <li>Stoliczek</li>
                                <li>Biurko</li>
                                <li>Telewizor</li>
                                <li>Widok</li>
                                <li>Klimat</li>
                                <li>Szafa</li>
                                <li>Osobna łazienka</li>
                                <li>Mini bar</li>
                                <li>Bezpłatne Wi-Fi</li>
                                <li>Sejf</li>
                                <li>Darmowy Parking</li>
                            </ul>
                        </div>
                </section>
               
            </main>
            <footer>
                <div>
                 <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../pokoje.php">Pokoje</a></li>
                    <li><a href="../restauracja.php">Restauracja</a></li>
                    <li><a href="../kontakt.php">Kontakt</a></li>
                    <li><a href="../rezerwacja.php">Rezerwuj</a></li>
                </ul>
                </div>
               
                <div>
                    <ul>
                        
                        <li><img src="../../source/logo.svg" alt="logo"></li>
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
    <script src="../../scripts/handleMenu.js"></script>

</html>