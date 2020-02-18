<?php
include "header.php";
include "data.php";
?>

<title>Blood Donor Registration</title>

<style>
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
</style>

<?php
if(isset($_POST['submit'])){
	$check = $_POST['reg_phn'];
	$check+=0;
	$flag=0;
	for($i=0; $i<$donor_cnt; $i++){
		$p=rtrim($info[$i] -> phone);
		if(strlen($p)>5){
		    $p=$p+0;
		    //echo $p."<br>".$check."<br>";
		    if($p==$check){
			    echo "<div align='center' style='font-size:17px; border:1px solid red; padding:10px; margin:10px; color:red;'>দুঃখিত, ".$_POST['reg_phn']." এই ফোন নাম্বার ব্যবহার করে ইতিমধ্যে একটি একাউন্ট খোলা আছে। তথ্য পরিবর্তন করতে দয়া করে <a href='login.php' style='text-decoration:none'>লগইন করুন</a>। ডিফল্ট পাসওয়ার্ড হিসেবে 'baniara' সেট করা আছে। আপনি চাইলে পাসওয়ার্ড পরিবর্তন করতে পারবেন। ধন্যবাদ।</div>";
			    $flag=1;
			    break;
		    }
		}
	}
	if($flag==0){
		if($_POST['reg_pass']==$_POST['reg_pass_again']){
			$name=$_POST['reg_name'];
			$year=$_POST['reg_year'];
			$blood=$_POST['reg_blood'];
			$phone=$_POST['reg_phn'];
			$address=$_POST['reg_address'];
			$pass=$_POST['reg_pass'];
			
			
			
			$fp = fopen("data/mergeData_full.txt", "a");
			fwrite($fp, $name."\n");
			fwrite($fp, $year."\n");
			fwrite($fp, $blood."\n");
			fwrite($fp, $phone."\n");
			fwrite($fp, $address."\n");
			fwrite($fp, $pass."\n\n");
			fclose($fp);
			$_SESSION['flag']=true;
			$_SESSION['name']=$name;
			echo "<script type='text/javascript'>
    window.location.href = 'success.php';
</script>";
			
			/*
			$_SESSION['reg_name']=$_POST['reg_name'];
			$_SESSION['reg_year']=$_POST['reg_year'];
			$_SESSION['reg_blood']=$_POST['reg_blood'];
			$_SESSION['reg_phn']=$_POST['reg_phn'];
			$_SESSION['reg_address']=$_POST['reg_address'];
			$_SESSION['reg_pass']=$_POST['reg_pass'];
			*/
		}
		else{
			echo "<div align='center' style='font-size:17px; border:1px solid red; padding:10px; margin:10px; color:red;'>পাসওয়ার্ড মিলেনি। দয়া করে আবার চেষ্টা করুন।</div>";
		}
	}
}
?>



<center><br>
<font size="6"><b>নতুন রক্তদাতা নিবন্ধন</b></font><br>
<font color='red' size='5'>* </font>চিহ্নিত গুলো পূরণ করা অত্যাবশ্যক<br>
</center>

<div class='division'>
<form method='POST' autocomplete="off">
	
আপনার নাম: <font color='red' size='4'>* </font><br>
<input class='txtbar' type='text' name='reg_name' placeholder='Your Name' required/><br>

জন্মসাল: <font color='red' size='4'>* </font><br>
<input class='txtbar' type='number' name='reg_year' placeholder='Birth Year (Ex: 1993)' required/><br>

রক্তের গ্রুপ: <font color='red' size='4'>* </font><br>
<select name='reg_blood' class='bg' required>
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
		
ফোন নাম্বার: <font color='red' size='4'>* </font><br>
<input class='txtbar' type='text' name='reg_phn' placeholder='Ex: 01875945443' required/><br>

বর্তমান ঠিকানা: <br>
<input class='txtbar' type='text' name='reg_address' placeholder='Address'/><br>

পাসওয়ার্ড: <font color='red' size='4'>* </font><br>
<input class='txtbar' type='password' name='reg_pass' placeholder='Password' required/><br>

পাসওয়ার্ডটি আবার লিখুন: <font color='red' size='4'>* </font><br>
<input class='txtbar' type='password' name='reg_pass_again' placeholder='Re-enter Password' required/><br>

<input class='btn' type='submit' name='submit' value='নিবন্ধন'/>

</form>
</div>



<?php include "footer.php";?>











