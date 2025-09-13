# Hotel floria - school project

<a href="https://liras333.github.io/hotel-school-project/" target="_blank">Link to page</a>


## quick descirption

To this project I used technologies like: html, css, js, php, mySQL. A home page and most of pages is a html landing page, and here is a page to adding reservation to database


## Javascript script

- JS is used for swap between headers.
- JS is used for calculate current cost of reservation in <b>rezerwacja.html</b>
- JS is used to validate a inputs in <b>rezerwacja.html</b>
- JS is used for handling menu for phones
- JS is used for changing slider in <b>index.html</b>


## PHP script

PHP is used for adding a reservation to the database. Script <b>dodajRezerwacje.php</b> is foking in following way:
  1) first making query question, which room is selected. When room esist, go next
  2) then adding a user to the table and if query was processed successfully, it goes further
  3) then finally making rezervation with foreign key of room id and user id and goes to <b>platnoscDokonana.php</b>


