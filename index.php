<?php
include "header.php";
//include "desktop.php";
include "data.php";
?>
<title>Baniara Blood DB - HOME</title>

<style>
.msg{
	background:#fff;
	color:red;
	box-shadow:0 0 3px rgba(0,0,0,0.4);
	padding:13px;
	margin:10px;
}
.division{
	background:#f0f0f0;
	color:#000;
	box-shadow:0 0 8px rgba(0,0,0,0.5);
	padding:13px;
	margin:10px;
	border-radius:0px 0px 10px 10px;
}
.bg{
	border:0px;
	border-radius:5px;
	font-size:20px;
	font-weight:bold;
	color:#000;
	background:#fff;
	padding:15px;
	width:100%;
	outline:none;
	border:1px solid red;
	margin-bottom:8px;
	margin-top:5px;
	transition:0.2s;
}
.bg:hover{
    box-shadow:0 0 8px rgba(0,0,0,0.34);
}
.btn{
	border:0px;
	border-radius:5px;
	font-size:22px;
	font-weight:bold;
	color:#fff;
	background:darkred;
	padding:15px;
	width:100%;
	outline:none;
	border:1px solid darkred;
	background: linear-gradient(to bottom right, darkred, red);
}
.btn:active{
	background:red;
}
</style>

<?php
if(isset($_POST['submit'])){
	$_SESSION['search_blood']=$_POST['blood'];
	$_SESSION['search_key']=true;
	echo "<script type='text/javascript'>
    window.location.href = 'donor.php';
</script>";
}
?>

<?php
if(isset($_SESSION['logged'])){
echo "<div class='msg' align='center' style='color:green;'>
স্বাগতম, ".strtoupper( $_SESSION['logged_user_name'])."
</div>";
}
?>

<div class='msg'>
♦ রক্তের গ্রুপ খুঁজতে রক্তের গ্রুপ নির্বাচন করে "SEARCH" বাটনে প্রেস করুন।<br>
♦ নতুন রক্তদাতা যোগ করতে উপরের ডানদিকে ক্লিক করুন এবং সকল তথ্য দিয়ে নিবন্ধন নিশ্চিত করুন।
</div>



<div class='msg'>
<center><font size='4' color='#000'><b>সর্বমোট নিবন্ধিত রক্তদাতা</b></font>
<br><hr>
<table><td><img src='images/blood.png' width='38'/> </td><td><font size="7" style='font-family:arial'><b><?php echo $donor_cnt; ?></b></font></td></table></center>
</div>



<div class='division' align='center'>
<form method='POST'>
	<font color='#000' size='4'><b>রক্তের গ্রুপ নির্বাচন করুন</b></font><hr>
	<select name='blood' class='bg' required>
		<option disabled selected value>Select Blood Group</option>
		<option value='A(+)ve'>A(+)ve</option>
		<option value='A(-)ve'>A(-)ve</option>
		<option value='B(+)ve'>B(+)ve</option>
		<option value='B(-)ve'>B(-)ve</option>
		<option value='O(+)ve'>O(+)ve</option>
		<option value='O(-)ve'>O(-)ve</option>
		<option value='AB(+)ve'>AB(+)ve</option>
		<option value='AB(-)ve'>AB(-)ve</option>
		
	</select><br>
	<input class='btn' name='submit' type='submit' value='SEARCH'/>
</form>
	
</div>

<?php include "footer.php";?>



