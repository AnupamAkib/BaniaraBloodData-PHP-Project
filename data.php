<?php
class donor{
	public $name;
	public $age;
	public $blood_group;
	public $phone;
	public $address;
	public $passcode;
	public $id;
}

$all = array_fill(0, 10000, 0);;
$cnt=0;

//$file = fopen("akib.txt", "r");

$file = fopen("data/mergeData_full.txt", "r");
while(! feof($file)) {
  $x=fgets($file);
  $all[$cnt]=$x;
  $cnt=$cnt+1;
 }
fclose($file);

$info[1300] = new donor();
$donor_cnt=0;

for($i=0, $k=0; $i<$cnt; $i=$i+7, $k++){
	$info[$k] = new donor();
	$info[$k] -> name = $all[$i];
    $info[$k] -> age = $all[$i+1];
	$info[$k] -> blood_group = $all[$i+2];
	$info[$k] -> phone = $all[$i+3];
	$info[$k] -> address = $all[$i+4];
	$info[$k] -> passcode = $all[$i+5];
	$info[$k] -> id = ($k+1);
	$donor_cnt++;
}
$donor_cnt--;








//echo "<h1>".$donor_cnt."</h1>";
/*for($i=1; $i<$donor_cnt; $i++){
	for($j=0; $j<$donor_cnt; $j++){
		if(strlen($info[$i]->phone) > strlen($info[$j]->phone)){
			$tmp = new donor();
			$tmp = $info[$i];
			$info[$i]=$info[$j];
			$info[$j]=$tmp;
		}
	}
}*/


/*for($i=0; $i<$donor_cnt; $i++){
	echo $info[$i] -> name;
	echo "<br>";
	echo $info[$i] -> age;
	echo "<br>";
	echo $info[$i] -> blood_group;
	echo "<br>";
	echo $info[$i] -> phone;
	echo "<br>";
	echo $info[$i] -> address;
	echo "<br>";
	echo $info[$i] -> passcode;
	echo "<br><hr>";
}*/
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	








