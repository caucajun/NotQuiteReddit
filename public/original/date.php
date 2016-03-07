<?php
  // This file displays the date for inclusion on pages
?>



<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
  <body>
  	<br>
  	<?php
  	  date_default_timezone_set('America/Chicago');
    //  echo "Today is " . date("Y.m.d") .        //Not digging it.
      echo "Today is " . date("Y-m-d") . "<br>";
    ?>
    </br>

  </body>
</html>