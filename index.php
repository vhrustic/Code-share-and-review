<!DOCTYPE html>
<html>

<head>
    <title>Naslovnica</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
    <header class="page_header">
        <div id="header_content">
            <div id="logo_container">
                <div id="c_slovo_outer">
                    <div id="c_slovo_inner"></div>
                </div>
                <div id="c_slovo_odsjecak"></div>

                <div id="s_slovo_outer"></div>
                <div class="s_slovo_odsjecak"></div>
                <div class="s_slovo_odsjecak" id="drugi_s_odsjecak"></div>

                <div id="r_slovo_left"></div>
                <div id="r_slovo_rec">
                    <div id="r_slovo_rec_inner"></div>
                </div>
                <div id="r_slovo_nogica"></div>
            </div>
            <h1>Code Share And Review</h1></div>
    </header>

    <nav>
        <ul>
            <li><a class="nav_button" href="index.php">Naslovnica</a></li>
            <li><a class="nav_button" href="languages.php">Lista jezika</a></li>
            <li><a class="nav_button" href="links.php">Linkovi</a></li>
            <li><a class="nav_button" href="contact.php">Kontakt</a></li>
            <li id="username_navbar">
                <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }                     if(isset($_SESSION["username"])){
        echo '<a class="nav_button" href="unosnovosti.php">Unos vijesti</a>';
     echo '<a class="login_button" href="#">Dobrodosli ' . $_SESSION["username"] . '</a>';}
                    else echo '<a class="login_button" href="login.php">Login</a>';
                ?>
            </li>
        </ul>
    </nav>

    <div id="content">
        <section>
            <h2>Novosti</h2>
            <p id="news_selection">Prikaži:
                <select name="filtriranje" onchange="filterNews()">
                    <option value="allnews">Sve vijesti</option>
                    <option value="thismonth">Vijesti za ovaj mjesec</option>
                    <option value="thisweek">Vijesti za ovu sedmicu</option>
                    <option value="today">Današnje vijesti</option>
                </select>
                <form action="index.php" method="get" name="sortiraj">
                    <input type="checkbox" name="sort_way" value="opadajuce">Z-A vijesti
                    <input type="checkbox" name="sort_way" value="rastuce">A-Z vijesti
                    <input type="submit" name="sortiraj" value="Sortiraj">
                </form>
            </p>

            <article id="latest_news">
            <?php
            function cmp($a, $b)
            {
                   $a[0] = strtolower( explode("__--__",  $a)[0]);
                   $b[0] = strtolower( explode("__--__",  $b)[0]);
                  return $a[0]<$b[0];
            }

            function cmp2($a, $b)
            {
                   $a[0] = strtolower( explode("__--__",  $a)[0]);
                   $b[0] = strtolower( explode("__--__",  $b)[0]);
                  return $a[0] > $b[0];
            }

            $allNews = explode( "^^^^^^", file_get_contents("news.csv"));
            unset($allNews[count($allNews)-1]);
            if(!isset($_GET["sortiraj"]) && count($allNews) > 1){
                $latestNews = explode("__--__", $allNews[count($allNews)-1]);
                echo '<h2>' . $latestNews[0] . '</h2>';
                echo '<span class="news_datetime">' . $latestNews[3] . '</span>';
                echo '<img src="' . $latestNews[2] . '" alt="slika">';
                echo '<p>' . $latestNews[1] . '</p>';
                echo '</article><section class="other_news_group">';
                $br = 0;
                for($i = count($allNews) - 2; $i >= 0 ; $i--){
                    $br++;
                    if($i % 2 == 0) echo '<div class="other_news_row">';
                    $news = explode("__--__", $allNews[$i]);
                    echo '<article class="other_news">';
                    echo '<h2>' . $news[0] . '</h2>';
                    echo '<span class="news_datetime">' . $news[3] . '</span>';
                    echo '<img src="' . $news[2] . '" alt="slika">';
                    echo '<p>' . $news[1] . '</p>';
                    echo '</article>';
                    if($br == 2 || $i == 0) {
                    $br = 0;
                    echo '</div>';
                    }
                }}
                else if(isset($_GET["sortiraj"]) && count($allNews) > 1) {
                    if(isset($_GET["sort_way"]) && $_GET["sort_way"]== "opadajuce"){
                        usort($allNews,"cmp");
                    }
                    else if(isset($_GET["sort_way"]) && $_GET["sort_way"]== "rastuce"){
                        usort($allNews,"cmp2");
                    }
                $latestNews = explode("__--__", $allNews[count($allNews)-1]);
                echo '<h2>' . $latestNews[0] . '</h2>';
                echo '<span class="news_datetime">' . $latestNews[3] . '</span>';
                echo '<img src="' . $latestNews[2] . '" alt="slika">';
                echo '<p>' . $latestNews[1] . '</p>';
                echo '</article><section class="other_news_group">';
                $br = 0;
                for($i = count($allNews) - 2; $i >= 0 ; $i--){
                    $br++;
                    if($i % 2 == 0) echo '<div class="other_news_row">';
                    $news = explode("__--__", $allNews[$i]);
                    echo '<article class="other_news">';
                    echo '<h2>' . $news[0] . '</h2>';
                    echo '<span class="news_datetime">' . $news[3] . '</span>';
                    echo '<img src="' . $news[2] . '" alt="slika">';
                    echo '<p>' . $news[1] . '</p>';
                    echo '</article>';
                    if($br == 2 || $i == 0) {
                    $br = 0;
                    echo '</div>';
                    }
                }
                    /*$latestNews = explode("__--__", array_reverse($allNews)[0]);
                    echo '<h2>' . $latestNews[0] . '</h2>';
                    echo '<span class="news_datetime">' . $latestNews[3] . '</span>';
                    echo '<img src="' . $latestNews[2] . '" alt="slika">';
                    echo '<p>' . $latestNews[1] . '</p>';
                    echo '</article><section class="other_news_group">';
                    $br = 0;
                    unset($allNews[count($allNews)-1]);
                    foreach (array_reverse($allNews) as $key => $value) {
                        $br++;
                        if($key % 2 ==0) echo '<div class="other_news_row">';
                        $news = explode("__--__", $value);
                        echo '<article class="other_news">';
                        echo '<h2>' . $news[0] . '</h2>';
                        echo '<span class="news_datetime">' . $news[3] . '</span>';
                        echo '<img src="' . $news[2] . '" alt="slika">';
                        echo '<p>' . $news[1] . '</p>';
                        echo '</article>';
                        if($br == 2) {
                            $br = 0;
                            echo '</div>';
                        }
                    }*/
                }
            ?>
            </section>
        </section>

        <aside>
            <h3>Nove mogućnosti</h3>
            <ul>
                <li>Dodana podrška za Python</li>
                <li>Omogućeno automatsko formatiranje koda</li>
                <li>Dodana pretraga koda po naslovu</li>
                <li>Korisnički avatar/slika</li>
            </ul>

            <article>
                <h3>O nama</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </article>
        </aside>
        <div class="clear"></div>
    </div>
    <footer>
        Copyright © CodeShareAndReview.com - 2016
    </footer>
    <script src="script.js"></script>
</body>

</html>