<?php
    include "db_connect.php";
    //If there are any values in the table, display them one at a time
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $sql = "SELECT jobID, job_unit, job_mahlaka, job_migzar, job_anaf, job_mador, job_tafkid, job_current, job_certain FROM jobs";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Job ID: " . $row["jobID"]. " - Unit: " . $row["job_unit"]. " - Migzar: " . $row["job_migzar"]. 
        " - Mahlaka: " . $row["job_mahlaka"]. " - Anaf: " . $row["job_anaf"]. " - Mador: " . $row["job_mador"].
        " - Tafkid: " . $row["job_tafkid"]. " - Current: " . $row["job_current"]. " - Certain: " . $row["job_certain"]. "<br>";
    }
    } else {
    echo "0 results";
    }
?>