<?php
include "header.php";
include "data.php";
?>

<title>About</title>
<style>
.msg{
	background:#fff;
	color:#000;
	box-shadow:0 0 3px rgba(0,0,0,0.4);
	padding:13px;
	margin:10px;
	font-family:arial;
}
</style>

<h1 align="center" style='font-family:arial;'>About site</h1>


<div class='msg'>
<center><font size='4'><b>Total Registered Donor</b></font>
<br><hr>
<table><td><img src='images/blood.png' width='39'/> </td><td><font size="7"><b><?php echo $donor_cnt; ?></b></font></td></table></center>
</div>

<div class='msg'>
<center><font size='4'><b>Credit</b></font>
<br><hr></center>
Created by MIR ANUPAM HOSSAIN AKIB<br>
Data collected by SYED MAJHARUL AKASH
</div>

<div class='msg'>
<center><font size='4'><b>Language Used</b></font>
<br><hr></center>
<b>Front-End: </b>HTML, CSS, JavaScript<br>
<b>Back-End:</b> PHP
</div>

<div class='msg'>
<center><font size='4'><b>Source Code</b></font>
<br><hr>
<a href='http://github.com/AnupamAkib'><img src='images/github.png' width='150px'/></a>
</center>
</div>
<div class='msg'>
<center><font size='4'><b>Beta Release</b></font>
<br><hr></center>
<b>Date: </b>10 February, 2020<br>
<b>Day: </b> Monday
</div>

<?php include "footer.php";?>







