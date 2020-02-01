<?php
echo "hello Bangladesh";
/*if(isset($_POST["submit"])){
 $fp=fopen("data.txt", "a");
  fwrite($fp, $_POST["name"];
 fclose($fp);
  echo "<font size='7' color='green'><br><br>saved</font>";
}*/
?>
<form method="POST">
  <input name="name"/>
  <input type="submit" name="submit" value="GO"/>
 </form>
