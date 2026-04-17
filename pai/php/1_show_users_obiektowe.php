<?php
mysqli_report(MYSQLI_REPORT_OFF);
$connection = new mysqli("127.0.0.1", "root", "", "pai");
if (!$connection) {
    die("Błąd: " . $connection->connect_error);
}
$query = "select * from users";
$result = $connection->query($query);
if (!$result) {
    die("Błąd zapytania: " . mysqli_error($connection));
}

echo "Liczba rekordów: " . mysqli_num_rows($result) . "<br><br>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $i = 1;
        echo <<< DATA
        Użytkownik: $i <br>
        ID: $row[id] <br>
        Imię: $row[first_name] <br>
        Nazwisko: $row[last_name] <br>
        Data urodzenia: $row[birthday] <hr>
DATA;
        $i = $i + 1;
    }}


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // echo $row['first_name'];
        echo <<< DATA
                ID: $row[id], imię: $row[first_name], nazwisko: $row[last_name], data urodzenia: $row[birthday]<hr>
DATA;

    }
} else {
    echo "Brak danych w tabeli users";
}




$connection->close();
?>





<!--
Liczba rekordów:3
