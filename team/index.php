<?php
session_start();
$_SESSION['redirect']='/team';
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
    <section class="team">
        <div class="container top">
            <div class="row">
                <div class="col-md-9">
                    <center>
                        <h3>Our Squad</h3>
                        <br>
                               <div class="row">
                            <div class="col-md-4 col-xs-6">
                                <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/bril.jpeg"><br>
                                  <center><h5><span>Brillingston Raj</span><h5>
                                             <h5>Joint Secretary</h5>
                                           </center>
                                </div><br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/aravind.jpg">
                                    <center><h5><span>Arravind S</span><h5>
                                             <h5>Treasurer</h5>
                                           </center>

                                </div>
                                <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/sowmya.jpg">
                                    <center><h5><span>Sowmya V</span><h5>
                                             <h5>Senior Executive Member</h5>
                                           </center>
                                </div>
                                 <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/rupan.JPG">
                                    <center><h5><span>Rupan Kumar P</span><h5>
                                             <h5>Senior Executive Member</h5>
                                             <h5><span>97911 86516</span></h5>
                                           </center>
                                </div>
                                      <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/kailesh.JPG">
                                    <center><h5><span>Kailesh Sakthivel</span><h5>
                                             <h5>General Secetary</h5>
                                             <h5><span>76396 33897</span></h5>
                                           </center>
                                </div>
                               <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/suriya.JPG">
                                    <center><h5><span>Suriya Prakash M</span><h5>
                                             <h5>Joint Treasurer</h5>
                                           </center>
                                </div>
                            </div>
                                <div class="col-md-4 col-xs-6">
                                <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/gayathri.jpeg"><br>
                                     <center><h5><span>Gayathri Kalyanaraman</span><h5>
                                             <h5>Executive Director</h5>
                                             <h5><span>97911 02730</span></h5>
                                           </center>
                                </div><br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/gokul.jpg">
                                    <center><h5><span>Gokulnath R S</span><h5>
                                             <h5>Senior Executive Member</h5>
                                           </center>
                                </div>
                                <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/srikar.jpg">
                                    <center><h5><span>Srikar V Srinivas</span><h5>
                                             <h5>Chief Editor(Pathways)</h5>
                                           </center>
                                </div>
                                 <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/malligarjun.jpg">
                                    <center><h5><span>Malligarjun K</span><h5>
                                             <h5>Cultural Secretary</h5>
                                           </center>
                                </div>
                                 <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/arun.JPG">
                                    <center><h5><span>Arul Selvan A</span><h5>
                                             <h5>Senior Executive Members</h5>
                                           </center>
                                </div>
                                <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/balu.jpg">
                                    <center><h5><span>Balakrishnan P</span><h5>
                                             <h5>Senior Executive Member</h5>
                                           </center>
                                </div>
                            </div>
                             <div class="col-md-4 col-xs-6">
                                <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/sulai.jpg"><br>
                                    <center><h5><span>Mohammed Sulaiman</span><h5>
                                             <h5>Director</h5>
                                             <h5><span>78069 76789</span></h5>
                                           </center>
                                </div><br>
                                <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/jeb.png"><br>
                                    <center><h5><span>Jebin Joshua Moses</span><h5>
                                             <h5>Director</h5>
                                             <h5><span>89038 32168</span></h5>
                                           </center>
                                </div>
                                <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/ruthra.JPG">
                                    <center><h5><span>Rudhra Dharshini M</span><h5>
                                             <h5>Executive Director</h5>
                                           </center>
                                </div>
                                <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/shankar.jpeg">
                                    <center><h5><span>Shankarabalan G</span><h5>
                                             <h5>Senior Executive Member</h5>
                                             <h5><span>94448 25499</span></h5>
                                           </center>
                            </div>
                             <br>
                                 <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/sairam.JPG">
                                    <center><h5><span>Sairam Ganesh</span><h5>
                                             <h5>Senior Executive Member</h5>
                                           </center>
                                </div>
                                <div class="cardin eventspace" id="borderimg2">
                                   <img class="imager" src="../assets/images/deepiga.jpg">
                                    <center><h5><span>Deepiga K</span><h5>
                                             <h5>Cultural Secretary</h5>
                                           </center>
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
    </script>

    <div class="icon-bar hidden-sm hidden-xs">
        <a href="https://www.facebook.com/chemfluence/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/Chemfluence?s=09" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://instagram.com/chemfluence" class="google" target="_blank"> <i class="fa fa-instagram" style="font-size:24px"></i>
        </a>
    </div>


</body>

</html>
