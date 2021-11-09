<!DOCTYPE html>
<html>
<head>
	<title>AAA</title>
</head>
<style type="text/css">

.body1{
    background-color: skyblue;
}	

.sad{
	background-color: white;
}
.sam{
	background-color: black;
}

</style>
<body class="body1">
   
<table class="div1" style="width: 65%;height: 100vh;border: 1px solid red;font-size: medium;margin: 0px auto " >
	
  <?php

      for($i=1;$i<9;$i++)
      {
        $sembol = array("A", "B", "C","D","E", "F", "G","H");
          echo "<tr>";
          for($j=0;$j<8;$j++)
          {
          $all=$i+$j;
          if($all%2==0){
          
          echo "<td class='sad' style='color:black;border:2px solid red;text-align: center;font-size: 50px'>".$i.$sembol[$j]."</td>";
          }
          else
          {
          echo "<td class='sam' style='color:white;border:2px solid red;text-align: center;font-size: 50px'>".$i.$sembol[$j]."</td>";
          }
          }
          echo "</tr>";
    }
          ?>

</table>
</body>
</html>