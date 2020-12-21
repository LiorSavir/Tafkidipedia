<?php
    include "db_connect.php";
    $newName = $_GET["new-name"];
    $newId = $_GET["new-id"];
    $newPs1 = $_GET["new-ps1"];
    $newPs2 = $_GET["new-ps2"];
    $newPs3 = $_GET["new-ps3"];
    $newPo1 = $_GET["new-po1"];
    $newPo2 = $_GET["new-po2"];
    $newPo3 = $_GET["new-po3"];

    $sql = "INSERT INTO preference (ID, fname, pnumber, ps1, ps2, ps3, po1, po2, po3)
    VALUES (NULL, '$newName', '$newId', '$newPs1', '$newPs2', '$newPs3', '$newPo1', '$newPo2', '$newPo3')";
    $result = $mysqli->query($sql);

    include "index.php";
?>