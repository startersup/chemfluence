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
    <section class="techmain">
        <div class="container top">
            <div class="row">
                <div class="col-md-9">
                    <center>
                        <h3>Spot Events</h3>
                        <br>

                         <div class="card eventspace " id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/paper.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> PAPER PRESENTATION</h4>
                                   <p>Here is an amazing opportunity to showcase your ideas on an unique and
massive platform in the form of well-integrated and
intriguing presentation. It strives to explore the inquisitiveness of young
minds by giving their incredulous ideas in a definitive direction.</p>
                                    <p><span>Participants - Max. 3 members per team.</span></p>
                                    
                                     <div id="demo6" class="collapse">

                                        <h3>TOPICS</h3>
                                        <p> Solid waste management.</p>
                                        <p> Environmental issues and climatic changes.</p>
                                        <p> Bio fuel and solvents.</p>
                                        <p> Solar distillation.</p>
                                        <p> Thermal and electrochemical technology.</p>
                                        <p> Zero waste processing.</p>
                                        <p> Air pollution control and bio filters.</p>
                                        <p> Water technology</p>

                                       <h3>RULES</h3>
                                       <p> Send your abstract to chem19events@gmail.com</p>
                                       <p> Deadline for submission is March 22 nd .</p>
                                       <p> Abstract should be one page in pdf format.</p>
                                       <p> Selected abstracts will be posted in website https://www.chemfluence.in and in instagram page https://www.instagram.com/chemfluence/</p>
                                       <p> Send the title of your paper as the subject of mail.</p>
                                       <p> Presentation should be 7 – 10 mins + 5 mins questioning session.</p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo6">Read More...</button>
                                   <button onclick="set('Paper Presentation')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/poster%20presen.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                  <h4> POSTER PRESENTATION</h4>
                                   <p>Posters are often used to share information and are an important part of
many conferences, seminars and exhibitions. They may be used to
present quite complex material, and so it is important that the
information on them is well laid out, legible and attractively presented./p>
                                    <p><span>Participants - Max. 3 members per team.</span></p>
                                    
                                     <div id="demo7" class="collapse">

                                        <h3>TOPICS</h3>
                                        <p> Solid waste management.</p>
                                        <p> Environmental issues and climatic changes.</p>
                                        <p> Bio fuel and solvents.</p>
                                        <p> Solar distillation.</p>
                                        <p> Thermal and electrochemical technology.</p>
                                        <p> Zero waste processing.</p>
                                        <p> Air pollution control and bio filters.</p>
                                        <p> Water technology</p>

                                       <h3>RULES</h3>
                                       <p> Send your abstract to chem19events@gmail.com</p>
                                       <p> Deadline for submission is March 22 nd .</p>
                                       <p> Abstract should be one page in pdf format.</p>
                                       <p> Selected abstracts will be posted in website https://www.chemfluence.in and in instagram page https://www.instagram.com/chemfluence/</p>
                                       <p> Send the title of your paper as the subject of mail.</p>
                                       <p> Presentation should be 7 – 10 mins + 5 mins questioning session.</p>
                                       <P> Poster layout – open size.</P>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo7">Read More...</button>
                                    <button onclick="set('Poster Presentation')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/jigsaw.png">
                                    </center>
                                </div>

                                <div class="col-md-9 span">
                                    <h4> JIGSAW EXPLORER</h4>
                                    <p><span>Description :</span> 25 pieces puzzle of plant layout or an equipment.</p>
                                    <p><span>Participants :</span> 2 members / team.</p>
                                    <div id="demo" class="collapse">
                                        <h4>Selection & Judgement:</h4>
                                        <p>Round 1, Final.</p>
                                        <p>If teams less than 15</p>
                                        <p>Completion % = (no of rightly placed pieces / 25) * 100</p>
                                        <p>Teams are arranged on ascending order of completion %.</p>
                                        <p>Top 6 selected.</p>
                                        <p>If teams > 15, Completion % = (no of rightly placed pieces / 25) * 100</p>
                                        <p>Teams are arranged on ascending order of completion %</p>
                                        <p>Top 8 selected.</p>
                                        <p>Same is followed for Final. Top 3 selected.</p>
                                        <p><span>Judge decision is final.</span>
                                        </p>
                                     </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo">Read More...</button>
                                    <button onclick="set('Jigsaw Explorer')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/quizzing.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4>  NERD STOP – A TECHNICAL QUIZ</h4>
                                    <p><span>Description :</span>Normal quiz based on chemical engineering with moderate difficulty.</p>
                                    <p><span>Participants :</span> 2 members / team.</p>
                                    <div id="demo1" class="collapse">
                                        <h4>Selection & Judgement:</h4>
                                        <p>Each team write the answer in respective paper given.</p>
                                        <p>Marks are evaluated for each team.</p>
                                        <p>Top 6 (if teams
                                            < 15) or Top 8 (if teams>15) are selected based on ascending order of marks</p>
                                        <p>Happens in 2 rounds; Round one & Final.</p>
                                        <p>For Tie breakers a separate question in given for selection.</p>
                                        <p>Copying or speaking with other teams will lead to disqualification.</p>
                                        <p>Judge decision is final.</p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo1">Read More...</button>
 <button onclick="set('Nerd Stop')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge"  src="../assets/images/dumb%20chard.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> DUMB CHARADES</h4>
                                    <p><span>Description :</span> Team member select their chemical from lot and has to make their teammates identify that chemical without saying a word. Total dumb. They can use chalk and board in process. But shouldn’t depict
                                        it directly.</p>
                                    <p><span>Participants :</span> 3 member / team.</p>
                                    <div id="demo2" class="collapse">
                                        <h4>Selection & Judgement:</h4>
                                        <p>Teams that identify the chemicals are arranged based on time taken to find in ascending order.</p>
                                        <p>Two teams take part at a time.</p>
                                        <p> Top 6 (if teams
                                            < 15) or Top 8 (if teams>15) are selected.</p>
                                        <p>Same is done for Finals, Top 3 selected.</p>
                                        <p>Speaking or saying the chemical name leads to disqualification.</p>
                                        <p><span>Judge decision is final.</span>
                                        </p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo2">Read More...</button>
                                 <button onclick="set('Dumb Charades')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                         <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge"  src="../assets/images/solve.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> Solve it</h4>
                                    <p><span>Description :</span> In this event you will be given problems related to chemical engineering. Use your skill to
solve in the right way.</p>
                                    <p><span>Participants :</span> max 2 members / team.</p>
                                    <div id="demo12" class="collapse">
                                        <h4>Selection & Judgement:</h4>
                                        <p>It will be of two rounds preliminary and final round.</p>
                                        <p>Use of scientific calculator is allowed.</p>
                                        <p>Marks would be given based on the scoring card prepared.</p>
                                        <p><span>Organizers decision are final.</span>
                                        </p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo12">Read More...</button>
                               <button onclick="set('Solve it')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/rummy.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> RUMMY WITH CHEMICALS</h4>
                                    <p><span>Description :</span> A normal rummy game with joker, instead of decks of A,K,Q,J,…. ,Game is with chemicals.</p>
                                    <p><span>Participants :</span>1 member / team. </p>

                                    <div id="demo3" class="collapse">
                                        <h4>Selection & Judgement:</h4>
                                        <p>Up to 6 teams can participate in a single game.</p>
                                        <p>Team to declare first is the winner.</p>
                                        <p>Based on number of teams, no. of game will be decided by judge.</p>
                                        <p>Winners of each game will fight it out in final.</p>
                                        <p><span>Judge decision is final.</span>
                                        </p>
                                        <br>
                                         <p><span>Game play :</span> 11 card game with joker, sets of 4,3,3 and one card to Declare. A set should complete a sequence or a reaction. For example Acid + Base  salt + water That is 4 cards  Acid, base, salt, water
                                        constitute a set.
                                    </p>
                                        <br>
                                      </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo3">Read More...</button>
                                     <button onclick="set('Rummy with chemicals')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/clash%20of%20chemic.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> CLASH OF CHEMICALS</h4>
                                    <p><span>Description :</span> Similar to Draft card battle in clash royale.</p>
                                    <p><span>Participants :</span> 2 members / team.</p>
                                     <div id="demo4" class="collapse">
                                        <h4>Selection & Judgement:</h4>
                                        <p>At a time 6 team can battle it out, that is 3 battle with one deck.</p>
                                        <p>Winners of battle go for next round.</p>
                                        <p>Each round, battle pairs are made by judges.</p>
                                       <p><span>Judge decision is final.</span></p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo4">Read More...</button>
                                   <button onclick="set('Clash of chemicals')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>

                                       <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/debate.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> DEBATE</h4>
                                    <p><span>Description :</span> Normal Debate</p>
                                    <p><span>Participants :</span>  5 members / team.</p>
                                    <p><span>Topic :</span>  On the spot.</p>
                                     <div id="demo10" class="collapse">
                                       <p><span>Judge decision is final.</span></p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo10">Read More...</button>
                                     <button onclick="set('Debate')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                        <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/interview.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> MOCK INTERVIEW</h4>
                                    <p><span>Participants :</span>  20 members.</p>
                                    <p>Replica of original HR and technical interview for chemical engineers.</p>
<p>1 member /team</p>
                                    <p>Best 3 are selected based on the answers by participants</p>
                                     <div id="demo8" class="collapse">
                                       <p><span>Interviewer decision is final.</span></p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo8">Read More...</button>
                                    <button onclick="set('Mock Interview')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                          <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/conn.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4> CHEM – CONNEXIONS</h4>
                                    <p><span>Description :</span> It is inspired from popular reality show. Here we will be using
chemical engineering terms instead of normal words.</p>
                                    <p><span>Participants :</span>   2 members / team.</p>
                                     <div id="demo9" class="collapse">
                                          <h4>Selection & Judgement:</h4>
                                       <p>The final decision rests in the hands of the panel of judges and cannot be
disputed.</p>
                                         <p>Any form of malpractice by a team member will result in disqualification
of the team.</p>
                                         <p>Based on number of teams rounds will be decided.</p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo9">Read More...</button>
                                     <button onclick="set('Chem-Connexions')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                         <div class="card eventspace topper" id="borderimg2">
                            <div class="row">
                                <div class="col-md-3">
                                    <center>
                                        <img class="imge" src="../assets/images/min.png">
                                    </center>
                                </div>
                                <div class="col-md-9 span">
                                    <h4>  MINUTES TO DISASTER</h4>
                                    <p><span>Description :</span> In this event you will be given a case study of hypothetical industrial
disasters around the world. You must unwind the clock, imagine
yourself in the situation, crack your brain and identify the cause.
</p>
                                    <p><span>Participants :</span>    3 members / team (max).</p>
                                     <div id="demo11" class="collapse">
                                          <h4>Selection & Judgement:</h4>
                                       <p>It’s all about critical reasoning.</p>
                                         <p>The final decision rests in the hands of panel of judges and cannot be
disputed.</p>
                                         <p>Any form of malpractice by a team member will result in disqualification
of the team.</p>
                                    </div>
                                    <button class="button" data-toggle="collapse" data-target="#demo11">Read More...</button>
                                    <button onclick="set('Minutes to Disaster')" class="button button2" data-toggle='modal' data-target='#myModal-2'>Subscribe for Event</button>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>




<!-- modal-content -->
 <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
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



        <footer class="footer right">
            <div class="icons">
                <center><i class="fa fa-facebook" style="font-size:24px"></i>
                    <i class="fa fa-twitter" style="font-size:24px"></i>
                    <i class="fa fa-google-plus" style="font-size:24px"></i>
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
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
    </div>

</body>

</html>
