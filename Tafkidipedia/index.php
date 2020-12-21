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
        <title>Tafkidipedia</title>
    </head>
    <body>
      <header>
         <nav>
             <div class="row">
                 <a href="index.php">
                     <img src="resources/img/mekatnar-logo.png" href="index.php" alt="לוגו מקטנא&#34ר" class="logo">
                     <img src="resources/img/mekatnar-logo.png" href="index.php" alt="לוגו מקטנא&#34ר" class="logo-sticky">
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
          <div class="hero-text-box">
              <h1 class="hero-title">תפקידיפדיה</h1>
              <h3 class="hero-h2">מצא את התפקיד הבא שלך</h3>
              <a class="btn btn-full btn-hero js--scroll-to-search" href="#search-bar">חיפוש</a>
          </div>         
      </header>
      <section class="section-units js--section-units">
      <div class="row">
            <form action="search_keyword.php">          
              <div class="search-bar">
                  <input type="text" name="keyword" placeholder="חיפוש...">
                  <input type="submit" value="חיפוש">
                  <table border="1">
                    <?php
                            include "db_connect.php";
                            $mysqli->close();
                        ?>
                    </table>
              </div>
            </form>
          </div>
          <ul class="units-showcase clearfix" id="units">
              <li>
                  <figure class="unit-photo">
                      <a href="search_keyword.php?keyword=tikshuv">
                          <img src="resources/img/lotem.png" alt="אגף תקשוב">
                      </a>
                  </figure>
              </li>
              <li>
                  <figure class="unit-photo">
                    <a href="search_keyword.php?keyword=hatal">  
                        <img src="resources/img/hatal.png" alt="Hatal">
                    </a>
                  </figure>
              </li>
              <li>
                  <figure class="unit-photo">
                     <a href="search_keyword.php?keyword=yabasha">
                      <img src="resources/img/zi.png" alt="זרוע היבשה">
                  </figure>
              </li>
              <li>
                  <figure class="unit-photo">
                     <a href="search_keyword.php?keyword=matkal">
                      <img src="resources/img/mantak.png" alt="מטה כללי">
                  </figure>
              </li>
          </ul>
          <ul class="units-showcase clearfix">
              <li>
                  <figure class="unit-photo">
                      <a href="search_keyword.php?keyword=hovala">
                          <img src="resources/img/ovala.png" alt="מרכז הובלה">
                      </a>
                  </figure>
              </li>
              <li>
                  <figure class="unit-photo">
                     <a href="search_keyword.php?keyword=masha">
                      <img src="resources/img/masha.png" alt="Masha">
                  </figure>
              </li>
              <li>
                  <figure class="unit-photo">
                     <a href="search_keyword.php?keyword=mekatnar">
                      <img src="resources/img/mekatnar.png" alt="Mekatnar">
                  </figure>
              </li>
              <li>
                  <figure class="unit-photo">
                     <a href="search_keyword.php?keyword=eged">
                      <img src="resources/img/eged.png" alt="אגד אחזקה ארצי">
                  </figure>
              </li>
          </ul>
      </section>
      <section class="section-aboutus js--section-aboutus" id="aboutus">
          <div class="row">
              <h2>עלינו</h2>
          </div>
          <div class="row">
              <p>
                  חיל הטכנולוגיה והאחזקה (חיל הטנ"א; נקרא בעבר "חיל החימוש" עד 2016) הוא חיל תומך לחימה באגף הטכנולוגיה והלוגיסטיקה (אט"ל) של צבא הגנה לישראל. עיקר עיסוקו של החיל הוא באחזקת אמצעי הלחימה (אמל"ח) של כוחות היבשה: נשק קל (נק"ל), תחמושת וטילים, כלי רכב, טנקים, כלי רכב קרביים משוריינים, טילים נגד טנקים (נ"ט), אמצעי סיוע ללחימה (אמסל"ח) כגון אמצעי חילוץ וגרירה, מנופים, מלגזות ומערכות אחרות. במסגרת החיל פועלות גם יחידות המעורבות בפיתוח אמל"ח בשיתוף עם תעשיות הנשק הישראליות, דוגמת התעשייה הצבאית. בנוסף, חיל הטכנולוגיה והאחזקה אחראי על תחזוקת כל הגנרטורים ותחנות הכח המשמשים בפעילות היבשתית של צה"ל, ומספק מענה לכל צורכי אספקת החשמל בזרוע היבשה.
              </p>
          </div>
      </section>
      <section class="section-selectpath js--section-select-path" id="selectpath">
          <div class="row">
              <h2>"בוחרים דרך"</h2>
          </div>
          <div class="row">
              <p>
                בשוק העבודה אשר נמצא בהשתנות מתמדת, הפכו מושגים, כמו "קריירה" ו"מסלול", ללא רלוונטיים. המהפכה הטכנולוגית, הכוללת תהליכי דיגיטציה ואוטומציה, מובילה להיעלמות תפקידים לצד היווצרותם של מקצועות חדשים המשלבים בין עולמות תוכן שונים ומגוונים. במציאות זו, על הפרט לעסוק בלמידה מתמדת לאורך כל חייו (Life Long Learning) בכדי לשמור על הרלוונטיות של הצעת הערך שלו לשוק העבודה המשתנה.

                מציאות זו מובילה לשינוי "חוקי המשחק" בעולם העבודה, וארגונים שלא יידעו לבצע את ההתאמה הנדרשת עשויים למצוא את עצמם מחוץ למשחק. לאור העובדה כי הארגונים לא יכולים להציע ביטחון תעסוקתי לעובדיהם, עליהם להתמקד בהרחבה ובהעלאה של הצעת הערך של הפרט, באמצעות פלטפורמות המאפשרות למידה מתמדת ותהליכי התפתחות אישית ומקצועית. תפקיד המנהלים בהקשר זה הופך לקריטי יותר ויותר להצלחת עובדיהם ולהגברת החיבור שלהם לארגון.

                "בוחרים דרך" הינה תפיסת כ"א חדשנית בצה"ל, אשר שמה את האדם במרכז, מתוך הבנה כי דרך תהליך משותף שיעשה הפרט עם עצמו, בליווי כלי ניתוח ואבחון אישי וכן בהנחיה אישית של מפקדו ושל גורם ייעוץ קריירה מקצועי, ניתן יהיה להביא את הפרט לבצע קפיצת דרך בהתפתחות המקצועית והאישית שלו, ויחד איתו קפיצה של הארגון כולו. התפיסה מנסה להגיע ל־WIN-WIN בין צורכי הפרט לבין צורכי המערכת, באמצעות הכשרות מפקדים כמפתחי קריירה וכ־"מנטורים" וביצוע תהליכי אבחון וייעוץ קריירה למשרתים.
                </p>
          </div>
      </section>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectvizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    </body>
</html>

<!--

-->











