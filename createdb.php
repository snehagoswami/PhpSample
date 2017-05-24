<?php
 // DB connection info
 

     $conn = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","bcab93265b8e34","382579f9");
	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	 $sql = "CREATE DATABASE phpsampledb";

if(mysqli_query($conn, $sql)){
    echo "Database demo created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?> 
 