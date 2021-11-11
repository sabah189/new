<?php



/* $conn = mysqli_connect("localhost","root","","dentaire");

mysqli_query($conn,"SET NAMES 'utf8'");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } */



  

  //mysql://bc9de0256b71d3:a2b62260@eu-cdbr-west-01.cleardb.com/heroku_3facac34f0e8bbd?reconnect=true

  //Get Heroku ClearDB connection information


/* $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);
$active_group     = 'default';
$query_builder    = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);  */




$cleardb_url      = "mysql://bc9de0256b71d3:a2b62260@eu-cdbr-west-01.cleardb.com/heroku_3facac34f0e8bbd?reconnect=true";
$cleardb_server   = "eu-cdbr-west-01.cleardb.com";
$cleardb_username = "bc9de0256b71d3";
$cleardb_password = "a2b62260";
$cleardb_db       = "heroku_3facac34f0e8bbd";


$active_group     = 'default';
$query_builder    = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db); 
  
?>

