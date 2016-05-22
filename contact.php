<!DOCTYPE html>
<html>

<head>
    <title>Linkovi</title>
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


    <form onsubmit="validateForm()">
        <label>Email</label>
        <input type="email" name="email" placeholder="email adresa" onkeyup="validateEmail()">
        <label>Datum rođenja</label>
        <input type="date" name="bday" onchange="validateBirthday()">
        <label>Vaša stranica</label>
        <input type="url" name="url" placeholder="web stranica" onkeyup="validateUrl()">
        <label>Poruka</label>
        <textarea name="msg" onkeyup="validateMessage()"></textarea>
        <input type="submit" id="send_button" value="Pošalji">
    </form>

    <footer>
        Copyright © CodeShareAndReview.com - 2016
    </footer>
    <script src="validation.js"></script>
</body>

</html>