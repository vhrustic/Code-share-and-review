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
            </p>
            <article id="latest_news">
                <h2>Novost jedan</h2>
                <span class="news_datetime">30.03.2016 16:18</span>
                <img src="https://www.python.org/static/community_logos/python-logo-master-v3-TM.png" alt="python logo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pretium scelerisque commodo. Fusce hendrerit lacus et suscipit mattis. Phasellus malesuada dolor eget dignissim venenatis. Mauris eget libero in nisl venenatis pharetra et eu nulla. Donec fermentum, risus vitae vestibulum tempus, massa mi cursus velit, et pulvinar nunc libero non nibh. Donec venenatis quis turpis a posuere. Pellentesque dignissim, justo nec egestas molestie, nulla nisl mattis urna, in vestibulum augue metus a libero. Mauris dolor lectus, vulputate non ante vitae, fringilla mattis enim. Praesent bibendum vehicula purus, eget iaculis lorem feugiat maximus. Nunc eu posuere eros. Cras efficitur tellus velit, nec lobortis diam cursus vel. Sed accumsan augue metus, non dictum sem interdum ac. Morbi nec condimentum sapien. Vestibulum elit dolor, scelerisque nec volutpat a, ornare sed lacus. Maecenas malesuada accumsan eleifend.</p>
            </article>
            <section class="other_news_group">
                <div class="other_news_row">
                    <article class="other_news">
                        <h2>Novost dva</h2>
                        <span class="news_datetime">30.03.2016 12:33</span>
                        <img src="http://famouslogos.net/images/google-chrome-logo.jpg" alt="chrome logo">
                        <p>Cras quis facilisis velit. Donec nunc felis, sollicitudin sit amet mi venenatis, rutrum blandit arcu. Aliquam suscipit pulvinar lacus, nec efficitur leo gravida lacinia. Suspendisse porttitor accumsan ornare. Phasellus maximus sem eu nisi mollis tristique vitae a lacus. Phasellus accumsan justo id lacus facilisis sagittis. Aliquam eget convallis tellus, quis condimentum sapien. Mauris tempor porta lorem quis porta.</p>
                    </article>

                    <article class="other_news">
                        <h2>Novost tri</h2>
                        <span class="news_datetime">30.03.2016 12:55</span>
                        <img src="https://kanbanize.com/blog/wp-content/uploads/2014/11/GitHub.jpg" alt="github">
                        <p>Praesent bibendum commodo augue, vitae tristique elit iaculis sed. Aenean pellentesque in mi blandit sollicitudin. In sollicitudin, nibh id consectetur dignissim, sapien elit sagittis metus, ac commodo augue lacus non est. Nulla facilisi. Donec aliquet imperdiet leo id commodo. Aenean ut dolor at turpis viverra feugiat eu quis turpis. Donec elementum ipsum at congue hendrerit. Etiam ut accumsan felis. Nunc ut pretium neque. Ut congue risus ac dolor venenatis, non elementum sapien facilisis. Ut tempus, lacus nec auctor volutpat, lectus massa dictum augue, eu vulputate mauris arcu sit amet orci. Nunc quis viverra purus. Morbi quis nunc eget.</p>
                    </article>
                </div>
                <div class="other_news_row">
                    <article class="other_news">
                        <h2>Novost četiri</h2>
                        <span class="news_datetime">27.03.2016 15:33</span>
                        <img src="http://sdtimes.com/wp-content/uploads/2015/07/0720.sdt-vs2010.png" alt="visual studio logo">
                        <p>Nullam mi ipsum, vulputate ut ultricies vel, rutrum at turpis. Donec vel molestie nulla. Fusce vel ex pellentesque, lacinia lacus ut, luctus ante. Proin id quam quis justo mattis vestibulum et non urna. Vivamus condimentum venenatis ornare. Maecenas ultrices dui ut enim facilisis iaculis. Quisque sed risus maximus, semper velit nec, fermentum lacus. Nullam sit amet enim tincidunt, volutpat nisl a, tempus lacus. Integer malesuada lectus nec venenatis tempus. Sed nec convallis turpis. Suspendisse potenti. Morbi interdum, nisi semper auctor ullamcorper, arcu metus pellentesque eros, a ornare arcu tortor vel tortor. In at sapien sit amet dui vulputate cursus vitae venenatis neque. Cras leo ligula, sollicitudin sit amet rutrum sit amet, dignissim id felis. Nam imperdiet metus nec purus ullamcorper, in finibus tellus pharetra.</p>
                    </article>

                    <article class="other_news">
                        <h2>Novost pet</h2>
                        <span class="news_datetime">26.03.2016 10:33</span>
                        <img src="http://paymentweek.com/wp-content/uploads/2015/11/google-maps-logo-480.jpg" alt="google maps">
                        <p>Praesent bibendum commodo augue, vitae tristique elit iaculis sed. Aenean pellentesque in mi blandit sollicitudin. In sollicitudin, nibh id consectetur dignissim, sapien elit sagittis metus, ac commodo augue lacus non est. Nulla facilisi. Donec aliquet imperdiet leo id commodo. Aenean ut dolor at turpis viverra feugiat eu quis turpis. Donec elementum ipsum at congue hendrerit. Etiam ut accumsan felis. Nunc ut pretium neque. Ut congue risus ac dolor venenatis, non elementum sapien facilisis. Ut tempus, lacus nec auctor volutpat, lectus massa dictum augue, eu vulputate mauris arcu sit amet orci. Nunc quis viverra purus. Morbi quis nunc eget arcu iaculis mollis eget sit amet orci.
                        </p>
                    </article>
                </div>
                <div class="other_news_row">
                    <article class="other_news">
                        <h2>Novost šest</h2>
                        <span class="news_datetime">25.03.2016 22:15</span>
                        <img src="http://i2.wp.com/elweb.co/wp-content/uploads/2013/09/learnember1.jpg" alt="emberjs">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat dapibus velit, in congue metus condimentum lobortis. Aliquam erat volutpat. Nulla vestibulum accumsan lorem, sit amet consectetur augue. Proin placerat condimentum nulla. Donec eget lorem varius, molestie sem eu, gravida ligula. Maecenas et sagittis leo. Integer ligula dolor, facilisis sit amet consectetur sodales, ultricies in ante. Pellentesque posuere purus volutpat auctor ullamcorper. Sed tempus accumsan egestas. Etiam interdum posuere lacus tempus volutpat. </p>
                    </article>

                    <article class="other_news">
                        <h2>Novost sedam</h2>
                        <span class="news_datetime">20.03.2016 02:00</span>
                        <img src="https://udemy-images.udemy.com/course/750x422/338398_7fde_6.jpg" alt="git">
                        <p>Maecenas ullamcorper lorem diam, in sollicitudin purus bibendum quis. Maecenas pharetra, purus ac vulputate suscipit, diam lorem ornare est, vel elementum ipsum ex sed velit. Nullam sed sapien luctus, egestas augue egestas, pharetra odio. Cras tincidunt lectus quis mauris convallis volutpat. Vestibulum consectetur gravida massa at auctor. Nulla vel ante est. Curabitur accumsan porttitor nunc.</p>
                    </article>
                </div>
                <div class="other_news_row">
                    <article class="other_news">
                        <h2>Novost osam</h2>
                        <span class="news_datetime">15.03.2016 21:22</span>
                        <img src="http://raspberrypimaker.com/wp/wp-content/uploads/2015/03/phantomjs.png" alt="raspberry pi">
                        <p>Aenean a maximus quam, sed ornare ex. Donec tempus commodo justo non volutpat. Nulla porta sapien id placerat ullamcorper. Sed iaculis egestas commodo. Donec vehicula euismod lectus, quis eleifend turpis placerat vel. Vestibulum ornare cursus sagittis..</p>
                    </article>

                    <article class="other_news">
                        <h2>Novost devet</h2>
                        <span class="news_datetime">7.03.2016 12:02</span>
                        <img src="https://devfreecasts.org/assets/images/typesafe.jpg" alt="typesafe">
                        <p>Aliquam ut tortor sagittis, pretium diam vitae, consequat libero. Donec iaculis vehicula libero, eu interdum ante aliquam ut. Nullam dignissim velit ac eleifend molestie. Donec pretium blandit egestas. Cras luctus molestie sagittis. Nunc ullamcorper rutrum massa. Nullam convallis dui ante, et iaculis neque imperdiet nec.</p>
                    </article>
                </div>
                <div class="other_news_row">
                    <article class="other_news">
                        <h2>Novost deset</h2>
                        <span class="news_datetime">2.03.2016 21:06</span>
                        <img src="http://15441-presscdn-0-77.pagely.netdna-cdn.com/wp-content/uploads/2015/05/TypeScript-logo.jpg" alt="typescript">
                        <p>Praesent congue tincidunt mattis. Integer sit amet sem a nisl eleifend pharetra. Nullam tristique, purus nec ultricies dapibus, mi risus imperdiet justo, ac consectetur felis felis sed velit. Phasellus pretium, nisl gravida ullamcorper fringilla, nisi mi aliquam dui, nec sollicitudin felis erat in quam. Integer dictum justo eget dui egestas, vitae efficitur velit hendrerit. Sed metus magna, varius ac justo sed, commodo aliquam leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </article>

                    <article class="other_news">
                        <h2>Novost jedanest</h2>
                        <span class="news_datetime">29.01.2016 20:33</span>
                        <img src="http://cdn.filipekberg.se/fekberg-blog/wp-content/uploads/2013/01/visualcsharp_2.png" alt="c#">
                        <p>Nunc sed mattis nisl. Duis consectetur feugiat tellus. Sed rutrum a nisl a bibendum. Maecenas porttitor ipsum a pretium vestibulum. Donec condimentum nisi orci, non ullamcorper nunc finibus ut. Etiam lacinia imperdiet consequat. Aliquam ornare mi sit amet felis tincidunt sodales. Curabitur consectetur eros magna, et ultrices augue suscipit id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer finibus euismod dui, id molestie elit cursus nec. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam nec varius massa.
                        </p>
                    </article>
                </div>
                <div class="other_news_row">
                    <article class="other_news">
                        <h2>Novost dvanaest</h2>
                        <span class="news_datetime">10.01.2016 23:54</span>
                        <img src="http://www.developertutorials.com/wp-content/uploads/2014/12/AngularJS.png" alt="angularjs">
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In ex dui, gravida at ipsum eu, accumsan luctus felis. Nulla cursus augue feugiat posuere sagittis. Sed eros ante, luctus nec eleifend non, blandit in nisi. Cras euismod tellus libero, non facilisis nisl tristique vitae. Nullam accumsan ex in mauris tempus, eget facilisis metus sagittis.
                        </p>
                    </article>
                </div>
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