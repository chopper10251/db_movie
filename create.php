<?php

// ******** update your personal settings ******** 
// $servername = "140.122.184.128:3306";
// $username = "aaa";
// $password = "aaa";
// $dbname = "movie_db";

$servername = "140.122.184.128";
$username = "kdd";
$password = "kdd204";
$dbname = "movie_db";


// Connecting to and selecting a MySQL database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['director']) && isset($_POST['release_date'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$director = $_POST['director'];
	$release_date = $_POST['release_date'];

	$insert_sql = "INSERT INTO movie (id, title, director, release_date)
					VALUES ('$id', '$title', '$director', '$release_date')";	// TODO 
	
	if ($conn->query($insert_sql) === TRUE) {
		// echo "新增成功!!<br> <a href='main.php'>返回主頁</a>";
		// 重定向用戶到下一頁
		header('Location: index.php');
		exit;
	} else {
		echo "<h2 align='center'><font color='antiquewith'>新增失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}
				
?>

