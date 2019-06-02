


    <?php 
	session_start();
	// database
	$conn = mysqli_connect("localhost", "root", "root", "blogg");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
    define('BASE_URL', 'http://localhost:8888/blogg/');
    ?>