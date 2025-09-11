<?php

$connect = @new mysqli('localhost', 'root', '', 'hotel');

if($connect->connect_errno != 0 ){
    echo "Error: ".$connect->connect_error;
}
else{
    $od_kiedy = $_POST['od_kiedy'];
    $do_kiedy = $_POST['do_kiedy'];
    $pokoj = $_POST['pokoj'];
    $czy_sniadanie = $_POST['czy_sniadanie'] ? 1 : 0;
    $dorosli = $_POST['dorosli'];
    $dzieci = $_POST['dzieci'];

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    //pobranie pokoju z bazy
    $resultPokoj = $connect->query("SELECT * FROM pokoje WHERE id_pokoju = '$pokoj'");
    if($resultPokoj->num_rows > 0){
        $row = $resultPokoj->fetch_assoc();

        //obliczanie ceny
        $cenaPokoju = $row['cena'];
        $znizkaDzieci = 0.5 * 50;
        $sniadanie = $czy_sniadanie ? (50 * $dorosli) + ($znizkaDzieci * $dzieci) : 0;
        $iloscDni = (strtotime($do_kiedy) - strtotime($od_kiedy)) / (60 * 60 * 24);

        $koszt = $cenaPokoju * $iloscDni + $sniadanie;

        //wstawianie danych do bazy
        if($connect->query("INSERT INTO osoby VALUES (NULL, '$imie', '$nazwisko', '$telefon', '$email',  current_timestamp())")){
            $id_osoby = $connect->insert_id;

            if($connect->query("INSERT INTO rezerwacja VALUES (NULL, '$id_osoby', '$pokoj', '$od_kiedy', '$do_kiedy', '$dorosli', '$dzieci', '$czy_sniadanie', '$koszt' ,current_timestamp())")){
                echo "done";
            } else {
                echo "Error: ".$connect->error;
            }

        } else {
            echo "Error: ".$connect->error;
        }

        $connect->close();

    } else {
        echo "Error: Pokój nie istnieje.";
        $resultPokoj->close();
        $connect->close();
    }

}

?>