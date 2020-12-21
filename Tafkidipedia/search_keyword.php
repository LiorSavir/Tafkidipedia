<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Job Details</title>
    </head>
    <body>
       <header>
         <nav>
             <div class="row">
                <a href="index.php">
                     <img src="resources/img/mekatnar-logo.png" href="index.php" alt="Mekatnar Logo" class="logo">
                 </a>
                 <ul class="main-nav">
                     <li><a href="#main">ראשי</a></li>
                     <li><a href="search_keyword.php?keyword=machines">מכונות</a></li>
                     <li><a href="search_keyword.php?keyword=electricity">חשמל</a></li>
                     <li><a href="search_keyword.php?keyword=ton">תון</a></li>
                     <li><a href="search_keyword.php?keyword=versatile">ורסטילי</a></li>
                     <li><a href="search_all_jobs.php">הכל</a></li>
                     <li><a href="prefere-question.php">שאלון העדפות</a>
                 </ul>
             </div>
         </nav> 
    <table border="1">          
      <?php

        include "db_connect.php";
        $keywordfromform = $_GET["keyword"];

        //Search the database for the word mekatnar
        echo "<h3>Show all $keywordfromform units</h3>";
        $sql = "SELECT * FROM jobs WHERE job_unit LIKE '%" . $keywordfromform . "%' OR
        job_migzar LIKE '%" . $keywordfromform . "%' OR
        job_mahlaka LIKE '%" . $keywordfromform . "%' OR
        job_anaf LIKE '%" . $keywordfromform . "%' OR
        job_mador LIKE '%" . $keywordfromform . "%' OR
        job_tafkid LIKE '%" . $keywordfromform . "%' OR
        job_current LIKE '%" . $keywordfromform . "%' OR
        job_certain LIKE '%" . $keywordfromform . "%'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>" . "<td>" . "Job ID: "  . $row["jobID"]. " - Unit: " . $row["job_unit"]. " - Migzar: " . $row["job_migzar"]. 
            " - Mahlaka: " . $row["job_mahlaka"]. " - Anaf: " . $row["job_anaf"]. " - Mador: " . $row["job_mador"].
            " - Tafkid: " . $row["job_tafkid"]. " - Current: " . $row["job_current"]. " - Certain: " . $row["job_certain"]. "</td>" . "</tr>" . "<br>";
        }
        } else {
        echo "0 results";
        }
    ?>
    </table>
    </header>
        <footer>
          <div class="row">
              <p dir="ltr">
                  Copyright &copy; 2020 by Mekatnar. All rights reserved.
              </p>
              <p>
                  האתר נבנה על ידי מדור מערכות מידע וחדשנות - צוות 100
              </p>
          </div>
      </footer>
    </body>
</html>
