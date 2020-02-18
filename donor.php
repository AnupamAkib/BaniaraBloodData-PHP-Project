<?php
include "header.php";

if(isset($_SESSION['search_key'])==false || $_SESSION['search_key']==false){
	echo "<script type='text/javascript'>
    window.location.href = 'index.php';
</script>";
}
unset($_SESSION['search_key']);

include "data.php";

for($i=0; $i<$donor_cnt; $i++){
	for($j=0; $j<$donor_cnt; $j++){
		if(strlen($info[$i]->phone) > strlen($info[$j]->phone)){
			$tmp = new donor();
			$tmp = $info[$i];
			$info[$i]=$info[$j];
			$info[$j]=$tmp;
		}
	}
}
?>

<title>Search Result</title>
	
<style>
.msg{
	background:#fff;
	color:red;
	box-shadow:0 0 3px rgba(0,0,0,0.4);
	padding:13px;
	margin:10px;
}
.division{
	background:#fbfbfb;
	font-size:19px;
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
	border:1px solid gray;
	margin-bottom:8px;
	margin-top:5px;
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
	font-family:bn;
	background: linear-gradient(to bottom right, darkred, red);
}
.btn:active{
	background:red;
}
.txtbar{
	border:0px;
	border-radius:5px;
	font-size:20px;
	color:#000;
	background:#fff;
	padding:15px;
	width:100%;
	outline:none;
	border:1px solid gray;
	margin-bottom:10px;
	transition: 0.3s
}
.txtbar:hover{
	box-shadow:0 0 8px rgba(0,0,0,0.5);
}
.call{
	background:red;
	outline:none;
    font-family:arial;
	border:0px;
	color:#fff;
	font-size:large;
	font-weight:bold;
	border-radius:5px;
	background: linear-gradient(to bottom right, darkred, red);
}
</style>

<?php
$available = 0;
$available_donor[500] = new donor();

$search = $_SESSION['search_blood'];
strval($search);
$search=rtrim($search);

$k = 0;
for($i=0; $i<$donor_cnt; $i++){
	$blood=$info[$i] -> blood_group;
	strval($blood);
	$blood=rtrim($blood);
	/*echo $blood;
	echo "<br>";
	echo $search;
	echo "<br>";*/
	
	if(strcmp($blood, $search)==0){
		$available++;
		$available_donor[$k] = new donor();
		$available_donor[$k] = $info[$i];
		$k++;
	}
}
?>

<div class='msg' align='center'>
খোঁজকৃত রক্তের গ্রুপ : <b><?php echo $search ?></b>
</div>
<center><font size='5'>
<b><?php echo $available ?> জন রক্তদাতা পাওয়া গেছে</b></font><br>
</center>

<?php
for($i=0; $i<$k; $i++){
echo "<div class='division'>
<b>নাম: </b><font color='green' style='font-family:arial;'><b>";

if(strlen($available_donor[$i] -> name)>3){
	echo strtoupper($available_donor[$i] -> name);
}
else{
	echo "N/A";
}

echo "</b></font><br>
<b>বয়স: </b>";
$cAge=(rtrim($available_donor[$i] -> age) + 0);
$cAge=(date("Y")-$cAge);
if($cAge>0){
	echo $cAge." বছর";
}
else{
	echo "পাওয়া যায়নি";
}

echo "<br>
<b>রক্তের গ্রুপ: </b><font color='red'>";
if(strlen($available_donor[$i] -> blood_group)>1){
	echo $available_donor[$i] -> blood_group;
}
else{
	echo "N/A";
}

echo "</font><br>
<b>ফোন নাম্বার: </b>";
if(strlen($available_donor[$i] -> phone)>5){
	echo $available_donor[$i] -> phone;
}
else{
	echo "পাওয়া যায়নি";
}

echo "<br>
<b>ঠিকানা: </b>";
if(strlen($available_donor[$i] -> address)>2){
	echo ucwords($available_donor[$i] -> address);
}
else{
	echo "পাওয়া যায়নি";
}

echo "<br>
<b><font style='font-size:18px;'>Donor ID: </b>".$available_donor[$i] -> id."</font>";

if(strlen($available_donor[$i] -> phone)>5){
	echo "<br><center><table><td><a style='text-decoration:none;' href='tel:".$available_donor[$i] -> phone."'><table class='call' cellspacing='6'><td><img src='images/call.png' width='25px'/></td><td>Call</td></table></a></td><td><a style='text-decoration:none;' href='sms:".$available_donor[$i] -> phone."'><table class='call' cellspacing='6'><td><img src='images/sms.png' width='25px'/></td><td>SMS</td></table></a></td></table></center></div>";
}
else{
	echo "</div>";
}
}


?>

<?php include "footer.php";?>


	
	
	
	
	
	