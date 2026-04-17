<?php
mysqli_report(MYSQLI_REPORT_OFF);
    $connection = mysqli_connect("127.0.0.1", "root", "", "pai");
     if (!$connection) {
         echo "error";
     }
     $query = "select * from users";
     $result = mysqli_query($connection, $query);
     if (!$result) {
         die("Błąd zapytania: " . mysqli_error($connection));
     }
     if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
            // echo $row['first_name'];
             echo <<< DATA
                ID: $row[id], imię: $row[first_name], nazwisko: $row[last_name], data urodzenia: $row[birthday]<hr>
DATA;

         }
     } else {
         echo "Brak danych w tabeli users";
     }
?>
