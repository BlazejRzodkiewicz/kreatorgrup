<?php

require("connect.php");
$imie_nazwisko=$_POST['imie_nazwisko'];

$sql = "INSERT INTO studenci(id, imie_nazwisko) VALUES ('','$imie_nazwisko')";
$sql2 = "SELECT id, imie_nazwisko from studenci";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows>0) {
    while($row = $result2->fetch_assoc()) {
        echo "#: ".$row['id']."  Imię i Nazwisko: ".$row['imie_nazwisko']. "<br />";
    }
}
else{
    echo "Nie znaleziono studentów";
}

?>