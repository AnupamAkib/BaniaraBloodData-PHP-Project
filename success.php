<?php
include "header.php";
if(isset($_SESSION['flag'])==false || $_SESSION['flag']==false){
	echo "<script type='text/javascript'>
    window.location.href = 'register.php';
</script>";
}
$_SESSION['flag']=false;
?>


<title>Donor Account Created!</title>
<br>
<center>
<img src='images/ok.png' width='100'/><br>
<h1>নিবন্ধন সফল হয়েছে</h1>
<div style='padding:10px'>অভিনন্দন <?php echo $_SESSION['name']?>, আপনার ডোনার অ্যাকাউন্ট সফলভাবে নিবন্ধন করা হয়েছে। নিবন্ধন করার জন্য ধন্যবাদ। তথ্য পরিবর্তন করতে উপরে বাম দিকের মেনু থেকে লগইন সিলেক্ট করে নিবন্ধিত ফোন নাম্বার ও পাসওয়ার্ড দিয়ে লগইন করুন।<br>
</div></center><br>
	

<?php include "footer.php";?>
	
	
	
	
	
	
	
	
	
