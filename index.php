<?php
require "dbconnect.php";
$result = $conn->query("SELECT *  FROM category") ;
echo "<h2>Категории задач</h2>";
while ($row = $result->fetch()) {
    echo $row['name']."<br>";

}