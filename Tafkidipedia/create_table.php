<td>
<?php
    include "db_connect.php";

    $sql = "SELECT COUNT(jobID) AS total FROM jobs";
    $result = $mysqli->query($sql);
    $values = mysqli_fetch_assoc($result);
    $num_rows = $values['total'];

    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>"."Job ID: " . $row["jobID"]. " - Unit: " . $row["job_unit"]. " - Migzar: " . $row["job_migzar"]. 
        " - Mahlaka: " . $row["job_mahlaka"]. " - Anaf: " . $row["job_anaf"]. " - Mador: " . $row["job_mador"].
        " - Tafkid: " . $row["job_tafkid"]. " - Current: " . $row["job_current"]. " - Certain: " . $row["job_certain"]."</td> </tr>";
    }
?> 
</td>