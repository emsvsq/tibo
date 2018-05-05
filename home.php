<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">-->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/mbcss/component.css"/>
        <script type="text/javascript" src="js/mobile/classie.js"></script>
        <script type="text/javascript" src="js/mobile/gnmenu.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
        <link rel="icon" href="images/favicon.ico"/>
        <title>Tibho</title>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-86130297-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>

    <div id="toppanel">
        <div class="content">
        </div>
    </div>

                <!-- MENU PC -->
            <div id="BackgroundMenuPC"><ul id="menuPC" class="ulItems">
                <div id="libelle">
                    <li><p class="MenuItem">Accueil</p>
                        <ul class="ulItems">
                            <li><a href="home.php?accueil"><p>Présentation</p></a></li>
                        </ul>
                    </li>

                     <li><p class="MenuItem">Websites</p>
                        <ul class="ulItems">
                            <li><p>Jeux</p>
                                <ul class="ulItems">
                                    <li><a href="http://www.tibho.com/meteors/"><p>Meteors</p></a></li>
                                    <li><a href="http://fr.tibho.com:8080/echecs/"><p>Echecs</p></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><p class="MenuItem">A propos</p>
                        <ul class="ulItems">
                            <li><a href="home.php?about"><p>About me</p></a></li>
                            <li><a href="https://www.linkedin.com/in/thibault-gilleron-b4743bb6?authType=NAME_SEARCH&authToken=jZFu&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A413143975%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1477152205651%2Ctas%3Athibault%20Gilleron">
                            <p>LinkedIn</p></a></li>

                        </ul>
                    </li>

               </div>
            </ul></div>


            <!-- MENU MOBILE -->

            <ul id='gn-menu' class='gn-menu-main menumobile' style='height:60px;' >
                <li class='gn-trigger'>
                <a class='gn-icon gn-icon-menu'>
                <svg width="60" height="60" >
                <polygon points="5,10 25,10" style="stroke:white;stroke-width:2;" transform="scale(2)"></polygon>
                <polygon points="5,15 25,15" style="stroke:white;stroke-width:2;" transform="scale(2)"></polygon>
                <polygon points="5,20 25,20" style="stroke:white;stroke-width:2;" transform="scale(2)"></polygon>
                </svg>
                </a>
                <nav class='gn-menu-wrapper'>
                <div class='gn-scroller'>
                <ul class='gn-menu'>

                    <!--<li><a class="menuitem item1">Accueil</a>
                        <ul class="ulItems">
                            <li><a class="menuitem lastitem" href="home.php?accueil">Présentation</a></li>
                        </ul>
                    </li>

                     <li><a class="menuitem item1">Websites</a>
                        <ul class="ulItems">
                            <li><a class="menuitem item2">Jeux</a>
                                <ul class="ulItems">
                                    <li><a class="menuitem lastitem" href="http://www.teebbo.com/meteors/">Meteors</a></li>
                                    <li><a class="menuitem lastitem" href="http://fr.teebbo.com:8080/echecs/">Echecs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a class="menuitem item1">A propos</a>
                        <ul class="ulItems">
                            <li><a class="menuitem lastitem" href="home.php?about">About me</a></li>
                            <li><a class="menuitem lastitem" href="https://www.linkedin.com/in/thibault-gilleron-b4743bb6?authType=NAME_SEARCH&authToken=jZFu&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A413143975%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1477152205651%2Ctas%3Athibault%20Gilleron">
                            LinkedIn</a></li>

                        </ul>
                    </li>-->

                     <li class="gap">Accueil</li>

                     <li><img src="images/presentation.png" alt=" " style="width:50px;height:50px;float:left"/>
                        <a class="menuitem lastitem" href="home.php?accueil">Présentation</a></li>

                     <li class="gap">Websites</li>

                     <li><img src="images/meteors.png" alt=" " style="width:50px;height:50px;float:left;"/>
                        <a class="menuitem lastitem" href="http://www.tibho.com/meteors/">Meteors</a></li>
                     <li><img src="images/echecs.png" alt=" " style="width:50px;height:50px;float:left;"/>
                        <a class="menuitem lastitem" href="http://fr.tibho.com:8080/echecs/" >Echecs</a></li>

                    <li><div class="gap">About</div></li>

                    <li><img src="images/about.png" alt=" " style="width:50px;height:50px;float:left;"/>
                        <a class="menuitem lastitem" href="home.php?about">About me</a></li>
                    <li><img src="images/linkedIn.png" alt=" " style="width:50px;height:50px;float:left;"/>
                        <a class="menuitem lastitem" href="https://www.linkedin.com/in/thibault-gilleron-b4743bb6?authType=NAME_SEARCH&authToken=jZFu&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A413143975%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1477152205651%2Ctas%3Athibault%20Gilleron">
                            LinkedIn</a></li>

         </ul>
         </div>
            </nav>
            </li>
            </ul>

                        <?php

                            if(isset($_GET['about'])) {
                                include "about.php";
                            } else if(isset($_GET['applications'])) {
                                include "applications.php";
                            } else {
                                include "accueil.php";
                            }
                            include "footer.php";
                        ?>


    </body>

</html>

<script type="text/javascript" src="home.js"></script>
