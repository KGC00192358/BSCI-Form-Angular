<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
define('DB_HOST', 'tcp:bsci-request-server.database.windows.net,1433');
define('DB_USER', 'bsciAdmin');
define('DB_PASS', 'News@11pm');
define('DB_NAME', 'bsci-travel-request-database');

function connect()
{
  try
  {
    $conn = new PDO(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success";
  }
catch (PDOException $e)
  {
    print("Error connecting to Data to SQL Server.\n");
    die(print_r($e));
  }
}
?>
