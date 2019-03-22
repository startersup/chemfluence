<?php
session_start();
$_SESSION['redirect']='/timeline';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Timeline | Chemfluence 2K19 | National Level Technical Symposium</title>
    <link rel="icon" href="../assets/images/logo.png" type="image" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|lato|Montserrat:700|Open+Sans|Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/tl.css">
    <script src="../assets/js/sidenav.js"></script>
    <script src="../assets/js/scroller.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    <section class="timelinemain">
        <div class="container top">
            <div class="row">
                <div class="col-md-10" >
                    <center>
                      <h3>Event Timeline</h3>
    <ul class="timeline">
    	 <div class="">
					<center><h4 style="color:green; font-family: 'lato', sans-serif;">DAY 1: MARCH 25th 2019 (MONDAY)</h4></center>
				<br>
			</div>
        <li>

          <div class="timeline-badge warning"><img  class="imge1" src="../assets/images/ino.png"></div>

          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">INAUGURATION</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 9:30 AM - 11:00 AM</small></p>
            </div>
            <div class="timeline-body">
              <p>All the participants are requested to complete their registration before the Inaugration.</p>
               <p><span>Raman Auditorium</span></p>
            </div>
          </div>
        </li><br>
        <li class="timeline-inverted">
          <div class="timeline-badge success"><img  class="imge1" src="../assets/images/lecron.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">GUEST LECTURE</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11:30 AM - 12:30 NOON</small></p>
            </div>
            <div class="timeline-body">
              <p>The Guest Lecture will be starting sharply at the displayed time, participants are requested to be on time.</p>
		    <p><span>Raman Auditorium</span></p>
            </div>
          </div>
        </li><br>
        <li>
          <div class="timeline-badge info"><img  class="imge1" src="../assets/images/craftsman.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Lunch</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 12:30 – 1:30 NOON</small></p>
            </div>
            <div class="timeline-body">
              <p>The Partcipants can have their lunch and get back to their events.</p>
            </div>
          </div>
        </li>
        <br>
          <li class="timeline-inverted">
          <div class="timeline-badge success"><img  class="imge1" src="../assets/images/lecron.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">PAPER PRESENTATION</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1:30 – 4:00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>All the Participants are requested to assemble in Meeting Room Prior to the event time.</p>
            </div>
          </div>
        </li><br>
        <li>
          <div class="timeline-badge info"><img  class="imge1" src="../assets/images/craftsman.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">NERT STOP QUIZ (1) & CLASH OF CHEMICALS (2)</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 4 PM – 5.00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>The Partcipants are requested to schedule their timings as both the events are ongoing parallel.</p>
              <p><span>201 (ACT)</span></p>
            </div>
          </div>
        </li>
        <br>
         <li class="timeline-inverted">
          <div class="timeline-badge success"><img  class="imge1" src="../assets/images/lecron.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">RUMMY WITH CHEMICALS</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5:00 PM – 6:00 PM </small></p>
            </div>
            <div class="timeline-body">
              <p>A normal rummy game with joker, instead of decks of A,K,Q,J,…. ,Game is with chemicals.</p>
              <p><span>316 (ACT)</span>
            </div>
          </div>
        </li><br>
        <div class="">
					<center><h4 style="color:green;font-family: 'lato', sans-serif;">DAY 2: MARCH 26th 2019 (TUESDAY)</h4></center>
				<br>
			</div>
        <li class="">
        	 <div class="timeline-badge warning"><img  class="imge1" src="../assets/images/tutorial.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">WORKSHOP – 1</h4>
               <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 9:30 AM – 1:00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>This Process Design workshop will provide information on how to model and simulate Processes (From Oil & Gas and Petrochemical Plant) and Effective way of using unit operation to optimize the Process Plant using process simulation software ASPEN HYSYS.</p>
              <p><span>201 ACT</span></p>
            </div>
          </div>
        </li><br>
       
  <li class="timeline-inverted">
          <div class="timeline-badge info"><img  class="imge1" src="../assets/images/craftsman.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Lunch</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 PM – 2 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>The Partcipants can have their lunch and get back to their events.</p>
            </div>
          </div>
        </li>

             <li >
          <div class="timeline-badge warning"><img class="imge1" src="../assets/images/jigsaw.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">MOCK INTERVIEW</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 PM – 4 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>Replica of original HR and technical interview for chemical engineers..</p>
              <p><span>316 (ACT)</span></p>
            </div>
          </div>
        </li><br>
        <li class="timeline-inverted">
          <div class="timeline-badge info"><img class="imge1" src="../assets/images/quizzing.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">CHEM CONNECXIONS & JIG SAW EXPLORER </h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 4 PM – 5.00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>The Partcipants are requested to schedule their timings as both the events are ongoing parallel.</p>
              <p><span>202 (TEXTILE)</span></p>
            </div>
          </div>
        </li>
       <br>
         <li >
          <div class="timeline-badge info"><img class="imge1"  src="../assets/images/dumb%20chard.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">DUMB CHARADES</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5:00 PM – 6:00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>Team member select their chemical from lot and has to make their teammates identify that chemical without saying a word. Total dumb. </p>
              <p><span>204 (TEXTILE)</span></p>
            </div>
          </div>
        </li>
          <br><br>
        <div>
					<center><h4 style="color:green;font-family: 'lato', sans-serif;">DAY 3: MARCH 27th 2019 (WEDNESDAY)</h4></center>
				<br>
			</div>
       <li  class="timeline-inverted">
          <div class="timeline-badge info"><img  class="imge1" src="../assets/images/craftsman.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">WORKSHOP-2 </h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 9:30 AM – 1:00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>In RESPONSE SURFACE METHODOLOGY (RSM) workshop , explores the relationships between several explanatory variables and one or more response variables.</p>
              <p><span>RAMAN AUDI</span></p>
            </div>
          </div>
        </li>
       <br>  
         <li >
          <div class="timeline-badge info"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">SOLVE IT</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11:30 AM – 12:30PM</small></p>

            </div>
            <div class="timeline-body">
             <p>In this event you will be given problems related to chemical engineering. Use your skill to solve in the right way.</p>
                 <p><span>201 (ACT)</span></p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
           <div class="timeline-badge info"><img class="imge1" src="../assets/images/poster%20presen.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">POSTER PRESENTATION</h4>
               <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 PM – 4 PM </small></p>
               <p><span>FLUID MECHANICS LAB</span></p>
            </div>
            <div class="timeline-body">
              <p>Participants are requested to send their abstract before March 20, 6:00 pm.</p>
            </div>
          </div>
        </li><br>
       <li >
          <div class="timeline-badge info"><img  class="imge1" src="../assets/images/craftsman.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Lunch</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 PM – 2 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>The Partcipants can have their lunch and get back to their events.</p>
            </div>
          </div>
        </li><br>

        <li class="timeline-inverted">
          <div class="timeline-badge success"><img class="imge1" src="../assets/images/rummy.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">MINUTES TO DISASTER & DEBATE</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10:00 AM - 12:00 NOON</small></p>
            </div>
            <div class="timeline-body">
              <p>The Partcipants are requested to schedule their timings as both the events are ongoing parallel.</p>
            </div>
          </div>
        </li><br>
        <li>
          <div class="timeline-badge warning"><img class="imge1" src="../assets/images/conn.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">CHEM CONNEXIONS</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11:00 AM – 12:30 PM</small></p>
            </div>
            <div class="timeline-body">
              <p> It is inspired from popular reality show. Here we will be using chemical engineering terms instead of normal words.</p>
            </div>
          </div>
        </li>
       <br>
        <li class="timeline-inverted">
          <div class="timeline-badge info"><img class="imge1" src="../assets/images/interview.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">MOCK INTERVIEW</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1:00 PM - 3:00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>Replica of original HR, Technical interview for chemical engineers.</p>
            </div>
          </div>
        </li>
        <br>
         <li class="timeline-inverted">
          <div class="timeline-badge warning"><img class="imge1" src="../assets/images/debate.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">DEBATE</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1:00 PM - 3:00 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>Normal Debate about the given topic.</p>
            </div>
          </div>
        </li><br>
         <li>
          <div class="timeline-badge success"><img class="imge1" src="../assets/images/min.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">MINUTES TO DISASTER</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2:00 PM - 3:30 PM</small></p>
            </div>
            <div class="timeline-body">
              <p>In this event you will be given a case study of hypothetical industrial disasters around the world. </p>
            </div>
          </div>
        </li>
       <br>
      
    </ul>
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
