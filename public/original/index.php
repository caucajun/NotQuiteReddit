<?php
  session_start();
  require"db_connect.php";
  $sql = "SELECT page_id, page_title FROM pages;"


?>

<!doctypte html>
<html>
  
  <head>
    <meta charset="utf-8">
      <title>
      Welcome to Shitty Reddit!
      </title>
  </head>

  <body>
    <?php   include("menu.php");
    		include("page.php");
    		include("time.php");
    		include("date.php");
    ?>

    <!-- Removing placeholder content ... added page.php frontpage title
 	<p>This is my home page that uses a common menu to save me time when I add new pages to my website!</p>
 	-->
  </body>

</html>