<?php
include "header.php";
if($_SESSION['logged']==false){
	echo "<script type='text/javascript'>
    window.location.href = 'login.php';
</script>";
}
include "data.php";
?>

<title>Donor Profile</title>

<style>
.division{
	background:#f0f0f0;
	color:#000;
	box-shadow:0 0 8px rgba(0,0,0,0.5);
	padding:13px;
	margin:10px;
	border-radius:0px 0px 10px 10px;
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
	font-family:arial;
	background: linear-gradient(to bottom right, darkred, red);
}
.btn:active{
	background:red;
}
.txt{
	text-align:center;
	border:0px;
	border-radius:5px;
	font-size:20px;
	color:#000;
	background:#fff;
	padding:15px;
	width:100%;
	outline:none;
	border:1px solid gray;
	transition: 0.3s
}
.txt:hover{
	box-shadow:0 0 8px rgba(0,0,0,0.5);
}
.logout{
	background:red;
	outline:none;
	padding:10px;
	border:0px;
	color:#fff;
	font-size:large;
	font-weight:bold;
	border-radius:5px;
	background: linear-gradient(to bottom right, darkred, red);
}
.msg{
	background:#fff;
	color:green;
	box-shadow:0 0 3px rgba(0,0,0,0.4);
	padding:13px;
	margin:10px;
	
}
</style>

<?php
$id=$_SESSION['pID'];
if(isset($_POST['submit'])){
	echo "<br><br><br><br><center><font size='6' color='green'>Profile Updaing</font></center>";
	for($i=0; $i<$donor_cnt; $i++){
		$cID=$info[$i] -> id;
		if($cID == $id){
			$name=$_POST['newName'];
			$_SESSION['logged_user_name']=$name;
			//$name[strlen($name)]="\n";
			$info[$i] -> name=$name;
			
			$address = $_POST['newAddress'];
			//$address[strlen($address)] = "\n";
			$info[$i] -> address=$address;
			
			$phone=$_POST['newPhn'];
			//$phone[strlen($phone)] = "\n";
			$info[$i] -> phone=$phone;
			
			if(strlen($_POST['newPass'])>=3){
				$pas=$_POST['newPass'];
				$pas[strlen($pas)]="\n";
                $info[$i] -> passcode=$pas;
            }
			break;
		}
	}
	
	$fp=fopen("data/mergeData_full.txt", "w");
	for($i=0; $i<$donor_cnt; $i++){
		fwrite($fp, rtrim($info[$i] -> name)."\n");
		fwrite($fp, rtrim($info[$i] -> age)."\n");
		fwrite($fp, rtrim($info[$i] -> blood_group)."\n");
		fwrite($fp, rtrim($info[$i] -> phone)."\n");
		fwrite($fp, rtrim($info[$i] -> address)."\n");
		fwrite($fp, rtrim($info[$i] -> passcode)."\n\n");
	}
	fclose($fp);
	echo "<script type='text/javascript'>
    window.location.href = 'profile.php';
</script>";
}

if(isset($_POST['logout'])){
	unset($_SESSION['p_name']);
	//unset($_SESSION['password']);
	unset($_SESSION['pID']);
	$_SESSION['logged']=false;
	unset($_SESSION['logged']);
	echo "<script type='text/javascript'>
    window.location.href = 'login.php';
</script>";
}


?>
<script>
	function showmsg(){
	    alert("You can't make change in this field");
    }
</script>

<?php
for($i=0; $i<$donor_cnt; $i++){
if($id == $info[$i] -> id){
$name=$info[$i]->name;
$_SESSION['logged_user_name']=$name;
$address=$info[$i] -> address;
$blood=$info[$i]->blood_group;
$phn=$info[$i] -> phone;
$age=date("Y")-rtrim($info[$i] -> age);

echo "<div style='font-family:arial;' class='msg' align='center'>Welcome, ".strtoupper($name)."</div><center>
<div class='msg'>তথ্য পরিবর্তন বা সংযোজন করতে নতুন তথ্য লিখে 'Save Change' বাটনে টাচ করুন</div>

<form method='POST'>
<button class='logout' name='logout' onclick='logout()'>LOGOUT</button>
</form></center>
<div class='division' align='center'>
<form method='POST'>
<table border='0' cellpadding='5'>
<tr><td>নাম: </td><td><input class='txt' placeholder='Name' type='text' name='newName' value='".$name."'/></td></tr>
<tr><td>ঠিকানা: </td><td><input class='txt' placeholder='Address' type='text' name='newAddress' value='".$address."'/></td></tr>
<tr><td>বয়স: </td><td><input onclick='showmsg()' style='background:#e0e0e0;' class='txt' placeholder='Age' type='button' value='".$age."' /></td></tr>
<tr><td>রক্তের গ্রুপ: </td><td><input onclick='showmsg()' class='txt' style='background:#e0e0e0; color:red;' placeholder='blood' type='button' name='newBlood' value='".$blood."' /></td></tr>
<tr><td>ফোন নাম্বার: </td><td><input class='txt' placeholder='Phone' type='text' name='newPhn' value='".$phn."'/></td></tr>
<tr><td>ডোনার আইডি: </td><td><input onclick='showmsg()' style='background:#e0e0e0;' class='txt' placeholder='ID' type='button' name='id' value='".$_SESSION['pID']."'/></td></tr>
<tr><td>নতুন পাসওয়ার্ড: </td><td><input class='txt' placeholder='New Password' type='text' name='newPass' value=''/></td></tr>
	
</table>
<input class='btn' type='submit' name='submit' value='SAVE CHANGE'/>
</form>
</div>";
break;
}
}
?>

<?php include "footer.php";?>












