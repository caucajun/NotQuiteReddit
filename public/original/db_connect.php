<?php
  $link = mysql_connect('localhost', 'chris', 'Caillouet', 'redditapp');
 
  if (!$link) {
    die('Could not connect: ' . mysql_error());
              }
 // echo '<br> Connected successfully to the ShittyReddit Database!  </br>   Impressive.  Most impressive!  But you are not a Jedi, yet.';
  mysql_close($link);
?>