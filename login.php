<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
        </ul>
    </nav>
    <?php  
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }     if(isset($_POST["loginbtn"]) && isset($_POST["username"]) && isset($_POST["password"])){
        $usersArr = file("users.csv");
        $nePostojiUser = true;
        foreach ($usersArr as $key => $userStr) {
            $userLogInfo = explode(",", $userStr);
            if($_POST["username"] == $userLogInfo[0]){
                if(password_verify($_POST["password"], $userLogInfo[1])){
                    echo "Uspješno ste prijavljeni " . $userLogInfo[0] . ".";
                    $_SESSION["username"] = $userLogInfo[0];
                }
                else echo "Pogrešan password!";
            }
            else echo "Ne postoji korisnik sa datim korisničkim imenom!";
        }
    }

    if(!isset($_SESSION['username'])){
        echo '<form onsubmit="validateForm()" method="post" action="login.php" name="login_forma" class="form">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" class="submitbtn" name="loginbtn" value="Pošalji">
            </form>';
    }
    else echo "<p>Dobrodosli <b>" .  $_SESSION["username"] . "</b>. Kliknite <a href=\"index.php\">ovdje</a> za povratak na početnu.</p>";
?>

    <footer>
        Copyright © CodeShareAndReview.com - 2016
    </footer>
</body>

</html>
