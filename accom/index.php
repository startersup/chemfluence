<?php
session_start();
$_SESSION['redirect']='/accom';
$id= $_SESSION['id'];
$conn=mysqli_connect('localhost','u148781541_chemf','Chemfluence2019','u148781541_stud');
$_SESSION['amount']="250";
if(!isset($_SESSION['id']))
{
  $log=1;
}
else {
  $log=0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accomodation | Chemfluence 2K19 | National Level Technical Symposium</title>
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
    <section class="accomain">
        <div class="container top">
            <div class="row">
              <center>
                        <h3>ACCOMODATION</h3>
                          <br></center>
                <div class="col-md-9 card eventspace" id="borderimg1">
                    <center>

                        <p>Accommodation will be provided in AC Tech hostels.</p>
                        <p>All the students staying in AC Tech hostels should follow the hostel rules.</p>
                        <p>Hostel in time for girls – 8.30 pm</p>
                        <p>Hostel in time for boys – 10.00 pm</p>

                        <br>
                        <br><p>ACCOMODATION FEE – 250/DAY</p>

<br><br>

                        <p><span>CONTACT</span></p>
                        <p>Boys hostel</p>
                        <p>Bala Krishnan – 98942 05934</p>
                        <p>arul bala – 9566521175</p>
                        <p>chandru – 97896 44584</p>

                        <p><span>Girls hostel</span></p>
                        <p>+91 9487049639 - bharani</p>
                        <p>+91 9597291059 - ranjana</p>

                    </center>
                    <?php
                    if($log==1)
                    {
                      echo "<a href='/login'><button class='button button2'>Subscribe for Event</button></a>";}
                    else {
                      echo '<button onclick="set(\'Accommodation\')" class="button" data-toggle="modal" data-target="#myModal">Register Now</button>';}
                        ?>
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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel-2">Subscribe the Event </h4>
                    </div>
                    <div class="modal-body">
                    <center><p>Choose your suitable options according to your convenience</p>
                          <div class="row">
                    <div class="col-md-6"><center><p>Paying Through Online?</p><br>
         <a href="/PaytmKit/TxnTest.php"><button class="button button2">Click here</button></a>

                    </center></div>
                          <div class="col-md-6"><center><p>Paying Onspot?</p><br>
         <a href="/success"><button class="button button2">Click here</button></a>

                    </center></div>
                          </center>
                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-dialog" data-dismiss="modal">Cancel</button>
                    </div>
                    </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                    </div>

        </div>
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
          <a href="https://instagram.com/chemfluence" class="google" target="_blank">  <i class="fa fa-instagram" style="font-size:24px"></i></a>
    </div>

</body>

</html>
