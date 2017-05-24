<?php
   define('DB_SERVER', 'us-cdbr-azure-southcentral-f.cloudapp.net');
   define('DB_USERNAME', 'bcab93265b8e34');
     define('DB_PASSWORD', '382579f9');
   define('DB_DATABASE','phpsampledb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
?>