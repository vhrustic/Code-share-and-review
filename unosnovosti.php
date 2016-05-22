<!DOCTYPE html>
<html>

<head>
    <title>Unos novosti</title>
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
                    session_start();
                    if(isset($_SESSION["username"])) echo '<a class="login_button" href="#">Dobrodosli ' . $_SESSION["username"] . '</a>';
                    else echo '<a class="login_button" href="login.php">Login</a>';
                ?>
            </li>
        </ul>
    </nav>
    <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_SESSION["username"])) 
       echo '<form action="unosnovosti.php" method="post" name="unosnovosti_forma" onsubmit="return validateForm();" class="form">
                <label>Dvoslovni kod države</label>
                <input type="text" name="dkod" onfocus="resetErrors();" onblur="validateKodIbrojTelefona();">
                <label>Broj telefona</label>
                <input type="text" name="brtel" onfocus="resetErrors();" onblur="validateKodIbrojTelefona();">
                <label>Naslov vijesti</label>
                <input type="text" name="naslov">
                <label>Tekst vijesti</label>
                <textarea name="sadrzaj"></textarea>
                <label>URL Slike</label>
                <input type="url" name="url">
                <input type="submit" class="submitbtn" name="sendbtn" value="Pošalji">
                </form>';
            else echo '<p>Morate se prijaviti da bi mogli poslati novost.</p>';
        $errorPoruke = "";
        if(isset($_POST["sendbtn"])){
            if(empty($_POST["naslov"]) || empty($_POST["sadrzaj"]) || empty($_POST["url"])){
                $errorPoruke .= "<p>Sva polja moraju biti unesena</p>";
            }
            else {
                if(strlen($_POST["naslov"]) < 3) $errorPoruke .= "<p>Naslov mora biti barem 3 slova.</p>";
                if(strlen($_POST["sadrzaj"]) < 15) $errorPoruke .= "<p>Sadržaj vijesti mora biti barem 15 slova dužine.</p>";
                if(substr($_POST["url"], strlen($_POST["url"])-4, 4) != ".jpg" && substr($_POST["url"], strlen($_POST["url"])-4, 4) != ".png") $errorPoruke .= "<p>Slika mora biti .jpg ili .png formata.</p>";
                //xss zastita
                if(strpos($_POST["naslov"], '^^^^^^') !== FALSE || strpos($_POST["naslov"], '__--__')) $errorPoruke .= '<p>Naslov sadrži ilegalne znakove.</p>';
                if(strpos($_POST["sadrzaj"], '^^^^^^') !== FALSE || strpos($_POST["sadrzaj"], '__--__')) $errorPoruke .= '<p>Sadržaj vijesti sadrži ilegalne znakove.</p>';
                if(strpos($_POST["url"], '^^^^^^') !== FALSE || strpos($_POST["url"], '__--__')) $errorPoruke .= '<p>URL slike sadrži ilegalne znakove.</p>';

            }
            if(strlen($errorPoruke) > 0) echo '<div class="validation_alert">' . $errorPoruke . '</div>';
            else { //mozemo sacuvat vijest
            $vijest = $_POST["naslov"] . "__--__" . $_POST["sadrzaj"] . "__--__" . $_POST["url"] . "__--__" . date('d.m.Y H:i') . "^^^^^^"; 
            file_put_contents('news.csv', $vijest.PHP_EOL , FILE_APPEND);
            echo '<div class="validation_success"><p>Uspjesno ste objavili vijest.</p></div>';
        }
        }
    ?>
    <script src="unosnovostivalidacije.js"></script>
    <footer>
        Copyright © CodeShareAndReview.com - 2016
    </footer>
</body>

</html>