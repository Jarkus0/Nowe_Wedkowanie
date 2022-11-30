<?php
$BASE = 'wedkowanie';
$USER = 'root';
$PASSWORD = '';
$SERVER = 'localhost';

$connect = new mysqli($SERVER, $USER, $PASSWORD, $BASE, 3306);

$sql = "SELECT Ryby.nazwa, akwen, wojewodztwo FROM Lowisko Inner JOIN Ryby On Ryby.id = Lowisko.Ryby_id";
$result = $connect -> query($sql);

    if ($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["nazwa"]. " plywa w rzece " . $row["akwen"]. " " . $row["wojewodztwo"] . "</li>";
        }
        $connect -> close();
    }

?>