<?php
   define('DB_SERVER', 'dijkstra.ug.bcc.bilkent.edu.tr');
   define('DB_USERNAME', 'remzi.tepe');
   define('DB_PASSWORD', 'nUHU4yD5');
   define('DB_DATABASE', 'remzi_tepe');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if( $db->connect_errno){
       echo "Failed to connect to MySQL: (", $db->connecnt_errno . ") " .$db->connect_error;
   }
?>