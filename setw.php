<?php
session_start();
$_SESSION['name']=$_GET['q'];
if($_SESSION['name']=='Petroken')
{
  $_SESSION['amount']="500";
}
else {
  $_SESSION['amount']="300";
}
 ?>
