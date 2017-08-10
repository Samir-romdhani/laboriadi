<?php

$ch = isset($_POST['category']) ? $_POST['category'] : "Publications";
   if ($ch) {
      echo htmlentities($_POST['category'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";
     //exit; 
   }

?>