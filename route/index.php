<?php
session_start();
$_SESSION['redirect']='/route';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Routes | Chemfluence 2K19 | National Level Technical Symposium</title>
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
                            <?php
                            session_start();
                              if(isset($_SESSION['id'])){
                              echo "<div class='col-md-3 col-xs-6'>
                                  <div class='card shape' id='borderimg1'>
                                      <center> <span> <img src='../assets/images/website.png'>   <a href='../logout/'>Logout</a></span>
                                      </center>
                                  </div>
                              </div> ";
                         } else {
                           echo "<div class='col-md-3 col-xs-6'>
                               <div class='card shape' id='borderimg1'>
                                   <center> <span> <img src='../assets/images/website.png'>   <a href='../logout/'>Logout</a></span>
                                   </center>
                               </div>
                           </div>";
                         }       ?>
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
    <section class="routemain">
        <div class="container top">
            <div class="row">
                <div class="col-md-9 card eventspace" id="borderimg1">
                    <center>
                        <h3>Popular Routes</h3>
                        <br>
                        <br>
                        <h4>Alagappa College of Technology</h4>
                        <p>Anna University, Sardar Patel Road, Anna University, Guindy, Chennai, Tamil Nadu 600025</p>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Train Routes</h4>
                                <p><span>1. FROM CHENNAI EGMORE & TAMBARAM</span>
                                </p>
                                <p>Take a Local Train ( Beach - Tambaram )</p>
                                <p>Get down in Guindy Railway Station</p>
                                <p>Go to Guindy Bus stop</p>
                                <p>Board the Buses 49 , 21G , 54F, get down in CLRI Stop.</p>
                                <p>Walk in to ACT (ALAGAPPA COLLEGE OF TECHNOLOGY)</p>
                                <br>
                                <p><span>1. FROM CHENNAI EGMORE & TAMBARAM</span>
                                </p>
                                <p>Take Local Train from Park Town ( Beach - Velachery)</p>
                                <p>Get down in Kasturba Railway Station</p>
                                <p>Walk to College or Take any bus and get down in Anna University</p>

                            </div>
                            <div class="col-md-4">
                                <img class="imaging" src="../assets/images/train1.png">
                            </div>
                        </div>
                        <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="imaging" src="../assets/images/bus.png">
                            </div>
                            <div class="col-md-8">
                                <h4>Bus Routes</h4>
                                <p><span>1. FROM TAMBARAM</span>
                                </p>
                                <p>Board the Bus 21G( Vandalur Zoo - Broadway Route) FREQ – 20 MIN.</p>
                                <p>Get down in CLRI Bus Stop</p>
                                <p>Walk to College</p>
                                <br>
                                <p><span>2. FROM CHENNAI EGMORE</span>
                                </p>
                                <p>Board the Bus 23C( Ayanavaram - Besant Nagar) FREQ – 25 MIN.</p>
                                <p>Get down in CLRI Bus Stop</p>
                                <p>Walk to College</p>
                                <br>
                                <p><span>3. FROM CHENAI CENTRAL</span>
                                </p>
                                <p>Board the Bus 5C( Broadway - Tharamani) FREQ – 30 MIN.</p>
                                <p>Get down in CLRI Bus Stop</p>
                                <p>Walk to College</p>
                                <br>
                            </div>

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <h4>Cab Routes</h4>
                                <p>1. From tambaram -Rs 200 to Rs 250</p>
                                <p>From egmore - Rs 150 to Rs 200</p>
                                <p>From central - Rs 200 to Rs 250</p>
                                <p>Surge Prices Apply during Peak Hours</p>
                            </div>
                            <div class="col-md-6">
                                <img class="imaging" src="../assets/images/taxi.png">
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>


        <footer class="footer  right">
            <div class="icons">
                <center><a href="https://www.facebook.com/chemfluence/" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i>
              <a href="https://twitter.com/chemfluence" target="_blank">  <i class="fa fa-twitter" style="font-size:24px"></i>
                  <a href="https://instagram.com/chemfluence" target="_blank">  <i class="fa fa-instagram" style="font-size:24px"></i></a>
                </center>
                <br>
            </div>
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
    </script>

    <div class="icon-bar hidden-sm hidden-xs">
        <a href="https://www.facebook.com/chemfluence/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/Chemfluence?s=09" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://instagram.com/chemfluence" class="google" target="_blank"> <i class="fa fa-instagram" style="font-size:24px"></i>
        </a>
    </div>

</body>

</html>
