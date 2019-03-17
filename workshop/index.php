<?php
session_start();
$_SESSION['redirect']='/workshop';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Workshops | Chemfluence 2K19 | National Level Technical Symposium</title>
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
                                    <center><span> <img src="../assets/images/house.png"><a href="../index.php">Home</a></span>
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
                                   <center> <span> <img src='../assets/images/website.png'>   <a href='../login/'>Login</a></span>
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
    <section class="workmain">
        <div class="container top">
            <div class="row">
                <div class="col-md-9">
                      <h3>Workshops</h3>
                        <br>
                    <div class="card eventspace" id="borderimg2">
                            <div class="row">
                            
                                <div class="col-md-12 span">
                                    <center><img src="../assets/images/petrokens.png" style="max-width:400px;width:100%;"></center>
                                    <h4> PROCESS DESIGN WORKSHOP</h4>
                                    <p><span>Description :</span> This Process Design workshop will provide information on how to model and simulate Processes
(From Oil & Gas and Petrochemical Plant) and Effective way of using unit operation to optimize the
Process Plant using process simulation software <span>ASPEN HYSYS.</span></p>
<br>
                                    <p><span>  REGISTRATION FEE :</span> Rs:500 /-</p>
                                     <p><span>  DATE :</span> 26<sup>th</sup> March, 10am</p>
                                    <div id="demo2" class="collapse">
                                        <p>ASPEN HYSYS is a chemical process simulator, which is able to perform many of the core
calculations of chemical engineering, including those concerned with mass balance, energy balance,
vapor-liquid equilibrium, heat transfer, mass transfer, chemical kinetics, etc.</p>
<br>
<p>This Workshop is useful for Students, Lecturers, Engineers and Researchers in the area of R&amp;D and
Plant Design/Operation.</p>
                                       <p> It also covers Case Studies to understand the Application better.</p>
                                       <p>At the end of the workshop, you will be able to setup a simulation, run it, get results and more
important, analysis of the process for further optimisation.</p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo2">Read More...</button>
                                    <?php
                                    if($log==1)
                                    {
                                      echo "<a href='/login'><button class='button button2'>Subscribe for Event</button></a>";}
                                    else if($_SESSION['mode']=="Onspot"){
                                      echo '<button onclick="set(\'Dumb Charades\')" class="button button2" data-toggle="modal" data-target="#myModal-2">Subscribe for Event</button>';}
                                    else if($_SESSION['mode']=="Paid"){
                                      echo '<a onclick="direct(\'Dumb Charades\')"><button class="button button2">Subscribe for Event</button></a>';}
                                        ?>                              </div>
                            </div>
                        </div>
                          <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                               
                                <div class="col-md-12 span">
                                    <h4> RESPONSE SURFACE METHODOLOGY (RSM)</h4>
                                    <p><span>Description :</span> In RESPONSE SURFACE METHODOLOGY (RSM) workshop , explores the relationships between
several explanatory variables and one or more response variables.</span></p>
<br>
                                    <p><span>  REGISTRATION FEE :</span> Rs:300 /-</p>
                                     <p><span>  DATE :</span> 27<sup>th</sup> March, 10am</p>
                                    <div id="demo3" class="collapse">
                                        <p>Statistical approaches such as RSM can be employed to maximize the production of a special
substance by optimization of operational factors. In contrast to conventional methods, the
interaction among process variables can be determined by statistical techniques.</p>
<br>
<p>This Workshop is useful for Students, Lecturers, Engineers.</p>
                                       <p> </p>
                                      
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo3">Read More...</button>
                                    <?php
                                    if($log==1)
                                    {
                                      echo "<a href='/login'><button class='button button2'>Subscribe for Event</button></a>";}
                                    else if($_SESSION['mode']=="Onspot"){
                                      echo '<button onclick="set(\'Dumb Charades\')" class="button button2" data-toggle="modal" data-target="#myModal-2">Subscribe for Event</button>';}
                                    else if($_SESSION['mode']=="Paid"){
                                      echo '<a onclick="direct(\'Dumb Charades\')"><button class="button button2">Subscribe for Event</button></a>';}
                                        ?>                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <footer class="footer top right">
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
          <a href="https://instagram.com/chemfluence" class="google" target="_blank">  <i class="fa fa-instagram" style="font-size:24px"></i></a>
    </div>

</body>

</html>
