<?php

$BASE = 'wedkowanie';
$USER = 'root';
$PASSWORD = '';
$SERVER = 'localhost';

$connect = new mysqli($SERVER, $USER, $PASSWORD, $BASE, 3306);

$sql = "SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1";
$result = $connect -> query($sql);

    if ($result -> num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nazwa']}</td><td>{$row['wystepowanie']}</td></tr>";
        }
        $connect -> close();
    }

?>




