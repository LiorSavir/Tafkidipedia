<!DOCTYPE html>
<html lang="he">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Preferences Questionnaire</title>
    </head>
    <body>
        <br>
        <h2>שאלון העדפות</h2>
        <form action="add_prefere.php">
            <div class="search-bar">
                <h3>שם:</h3>
                <input type="text" name="new-name" placeholder="שם">
            </div>
            <div class="search-bar">
                <h3>מספר אישי:</h3>
                <input type="text" name="new-id" placeholder="מספר אישי">
            </div>
            <div class="search-bar">
                <h3>תפקיד ודאי 1:</h3>
                <input type="text" name="new-ps1" placeholder="תפקיד ודאי 1:">
            </div>
            <div class="search-bar">
                <h3>תפקיד ודאי 2:</h3>
                <input type="text" name="new-ps2" placeholder="תפקיד ודאי 2:">
            </div>
            <div class="search-bar">
                <h3>תפקיד ודאי 3:</h3>
                <input type="text" name="new-ps3" placeholder="תפקיד ודאי 3:">
            </div>
            <div class="search-bar">
                <h3>תפקיד אופציונלי 1:</h3>
                <input type="text" name="new-po1" placeholder="תפקיד אופציונלי 1:">
            </div>
            <div class="search-bar">
                <h3>תפקיד אופציונלי 2:</h3>
                <input type="text" name="new-po2" placeholder="תפקיד אופציונלי 2:">
            </div>
            <div class="search-bar">
                <h3>תפקיד אופציונלי 3:</h3>
                <input type="text" name="new-po3" placeholder="תפקיד אופציונלי 3:">
            </div>
            <input type="submit" value="שלח">
        </form>
    </body>
</html>