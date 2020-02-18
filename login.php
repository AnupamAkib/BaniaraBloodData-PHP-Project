<?php
include "header.php";
if(isset($_SESSION['logged'])==true && $_SESSION['logged']==true){
	echo "<script type='text/javascript'>
    window.location.href = 'profile.php';
</script>";
}
include "data.php";
?>
	
<title>Baniara Blood DB - Login </title>
	
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

</style>

<?php
if(isset($_POST['submit'])){
	$flag=0;
	$user = $_POST['user'];
	$pass= $_POST['passcode'];
	for($i=0; $i<$donor_cnt; $i++){
		$tmp_user=$info[$i]->phone;
		$tmp_pass=$info[$i]->passcode;
		$tmp_user=rtrim($tmp_user);
		$tmp_pass=rtrim($tmp_pass);
		if($tmp_user==$user && $tmp_pass==$pass){
			$flag=1;
            $_SESSION['logged']=true;
            $_SESSION['p_name']=$info[$i] -> name;
            //$_SESSION['p_phn']=$info[$i] -> phone;
            //$_SESSION['p_address']=$info[$i] -> address;
            //$_SESSION['p_blood']=$info[$i] -> blood_group;
            $_SESSION['pID']=$info[$i]->id;
            echo "<script type='text/javascript'>
    window.location.href = 'profile.php';
</script>";
		}
	}
	if($flag==0){
		echo "<div align='center' style='font-family:bn; font-size:17px; border:1px solid red; padding:10px; margin:10px; color:red;'>Sorry, you entered wrong phone number or password. Try again.</div>";
	}
}

?>

<center>
<font size="6"><b>Login Page</b></font><br></center>
<div class='division' align='center'>
<img src='images/user.png' width='70'/><br><br>
<form method="POST" autocomplete="off">
<input class='txtbar' name='user' type='text' placeholder='Phone Number' required/><br>
<input class='txtbar' name='passcode' type='password' placeholder='Password' required/><br>
<input class='btn' name='submit' type='submit' value='LOGIN'/><br>

</form>
</div>
</center>
<br>
<?php include "footer.php";?>




