<?php
// define('DB_SERVER', 'localhost');
// define('DB_USER', 'readonly');
// define('DB_PASSWORD', 'readonly');
// define('DB_NAME', 'countries');
$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');


if (isset($_GET['term'])){
	$return_arr = array();

	try {
		  $conn = new PDO($dsn, $user, $password);
	    // $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('SELECT DISTINCT list_name FROM products WHERE list_name LIKE :term');
	    $stmt->execute(array('term' => $_GET['term'].'%'));

	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['list_name'];
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>
