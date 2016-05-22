<!DOCTYPE html>
<html>

<head>
    <title>Podržani jezici</title>
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


    <table>
        <caption>Trenutna lista podržanih jezika</caption>
        <thead>
            <tr>
                <th>Jezik</th>
                <th>Verzija</th>
                <th>Datum dodavanja</th>
                <th>Formatiranje teksta</th>
                <th>Označavanje teksta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HTML</td>
                <td>5</td>
                <td>12.5.2014</td>
                <td>Da</td>
                <td>Da</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>3</td>
                <td>2.4.2014</td>
                <td>Da</td>
                <td>Da</td>
            </tr>
            <tr>
                <td>Javascript</td>
                <td>1.8.5</td>
                <td>29.9.2014</td>
                <td>Da</td>
                <td>Ne</td>
            </tr>
            <tr>
                <td>Python</td>
                <td>3.4.3</td>
                <td>6.2.2015</td>
                <td>Ne</td>
                <td>Ne</td>
            </tr>
        </tbody>
    </table>

    <footer>
        Copyright © CodeShareAndReview.com - 2016
    </footer>
</body>

</html>