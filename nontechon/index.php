<?php
session_start();
$_SESSION['redirect']='/tech';
$_SESSION['amount']="250";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events | Chemfluence 2K19 | National Level Technical Symposium</title>
    <link rel="icon" href="../assets/images/logo.png" type="image" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:700|Open+Sans|Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/sidenav.js"></script>
    <script src="../assets/js/scroller.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <script src="../assets/js/sidenav.js"></script>
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top">
        <span class="navtaber" onclick="openNav()">&#9776;</span>
        <div class="navbar-header">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" style="font-size:60px;" onclick="closeNav()">&times;</a>
                <div class="overlay-content">

                    <div class="container">
                                               <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center><span> <img src="../assets/images/house.png"><a href="../index.html">Home</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center><span> <img src="../assets/images/flags.png"><a href="../about/">About</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center><span> <img src="../assets/images/party.png"><a href="../events/">Events</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center><span> <img src="../assets/images/class.png"> <a href="../workshop/">Workshops</a></span>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center><span> <img src="../assets/images/motel.png"> <a href="../accom/">Accomodation</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center><span> <img src="../assets/images/investor.png"><a href="../sponsors/">Sponsors</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center> <span> <img src="../assets/images/networking.png">  <a href="../team/">Our Team</a> </span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                             <center> <span> <img src="../assets/images/timeline.png">   <a href="../timeline/"> Timeline</a></span>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center> <span> <img src="../assets/images/contact.png">  <a href="../contact/">Contact</a> </span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center> <span> <img src="../assets/images/location.png">   <a href="../route/">Routes</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center> <span> <img src="../assets/images/card.png">   <a href="../register/">Register</a></span>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="card shape" id="borderimg1">
                                    <center> <span> <img src="../assets/images/website.png">   <a href="../login/">Login</a></span>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <a class="navbar-brand" href="../index.html">
                    <span> <img class="logo" src="../assets/images/logofull.png"></span>
                </a>
            </center>
            <div id="nav-icon4" style="float:right;">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </nav>
    <section class="nontechmain">
        <div class="container top">
            <div class="row">
                <div class="col-md-9">
                    <center>
                        <h3>Online Events</h3>
                        <br>
                        <div class="card eventspace" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/tiktok.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> TIK – TOK</h4>
                                 <p><span>Description :</span>  Online event to show their acting skill.</p>
                                    <p><span>Participants :</span> Individual.</p>
                                    <div id="demo1" class="collapse">
                                        <h4>Rules:</h4>
                                        <p>Any kind of tik-tok video is accepted.</p>
                                       <p><span>Please Mention:</span> Name, Department, Year, College.</p>
                                        <p>Languages allowed - Tamil and English.</p>
                                        <p>Send your video to https://www.instagram.com/chemfluence or
to mail Id chem19online@gmail.com
                                        </p>
                                        <p>Send it before 22nd March 2019.</p>
                                        <p>The content will be uploaded in Instagram.</p>
                                        <p>The most liked video will be the winner.</p>
                                        <p>The adult content or usage of inappropriate word in tik-tok will
not be entertained.</p>

                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo1">Read More...</button>
                                    <button onclick="set('tiktok')" class="button button2">Register for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge"  src="../assets/images/photo1.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> Photography contest</h4>
                          <p><span>Description :</span>  Online event to show their photography skill</p>
                                    <p><span>Participants :</span> individual.</p>
                                    <div id="demo2" class="collapse">
                                        <h4>Rules:</h4>
                                        <p><span>Theme:</span> vintage photography.</p>
                                        <p><span>Please Mention:</span> Name, Department, Year, College.</p>
                                        <p>Send your photos to chem19online@gmail.com</p>
                                        <p>Send it before 22nd March 2019</p>
                                        <p>The content will be uploaded in instagram.(https://www.instagram.com/chemfluence)</p>
                                        <p>The most liked photograph will be the winner.</p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo2">Read More...</button>
                                    <button onclick="set('Photography')" class="button button2">Register for Event</button>
                                </div>
                            </div>
                        </div>
                       <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/meme.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4>MEME CONTEST</h4>
                     <p><span>Description :</span> Online event to show their skill in meme creating</p>
                                    <p><span>Participants :</span> Individual.</p>
                                    <div id="demo5" class="collapse">
                                        <h4>Rules:</h4>
                                        <p><span>Topic:</span> Chemical Engineering is fun.</p>
                                        <p><span>Please Mention:</span> Name, Department, Year, College.</p>
                                        <p>ALanguages allowed - Tamil and English.  </p>
                                        <p>Send your meme to chem19online@gmail.com</p>
                                        <p>Send it before 22nd March 2019</p>
                                        <p>The memes will be uploaded in instagram.</p>
                                        <p>The most liked meme will be the winner.</p>
                                        <p>The adult content or usage of inappropriate word in meme will
not be entertained.</p>
                                        </p>

                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo5">Read More...</button>
                                    <button onclick="set('Meme contest')" class="button button2">Register for Event</button>
                                </div>
                            </div>
                        </div>
                                               <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge"  src="../assets/images/pubg.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> PUBG</h4>
                          <p><span>Description :</span>  A multiplayer game</p>
                                    <p><span>Participants :</span> Team</p>
                                    <div id="demo4" class="collapse">

                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo4">Read More...</button>
                                    <button class="button button2">Register for Event</button>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>


        <footer class="footer right">
            <div class="icons">
                <center><a href="https://www.facebook.com/chemfluence/" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i>
              <a href="https://twitter.com/chemfluence" target="_blank">  <i class="fa fa-twitter" style="font-size:24px"></i>
                  <a href="https://instagram.com/chemfluence" target="_blank">  <i class="fa fa-instagram" style="font-size:24px"></i></a>
                </center>
            </div>
            <br>
            <center>
                <p class="footerp">Copyrights &copy 2019 Chemfluence. All Rights Reserved</p>
                <span class="craft">UI design by <a href="https://www.behance.net/prawinronab0fb" target="_blank">SK</a> | Crafted By <a href="http://www.seotechie.tk/" target="_blank">SEOTechie</a></span>
            </center>
            <br>
        </footer>

    </section>
    <script></script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }
        function set(str) {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      console.log("Success"+str);
                    }
                };
                xmlhttp.open("GET", "/set.php?q=" + str, true);
                xmlhttp.send();
        }
    </script>

    <div class="icon-bar hidden-sm hidden-xs">
        <a href="https://www.facebook.com/chemfluence/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/Chemfluence?s=09" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://instagram.com/chemfluence" class="google" target="_blank"> <i class="fa fa-instagram" style="font-size:24px"></i>
        </a>
    </div>


</body>

</html>
