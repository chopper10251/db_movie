<?php

// ******** update your personal settings ******** 
$servername = "140.122.184.128";
$username = "kdd";
$password = "kdd204";
$dbname = "movie_db";


// Connecting to and selecting a MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET['id'];

if (isset($id)) {
    $delete_sql = "DELETE FROM movie WHERE id = '$id' "; // TODO 

	if ($conn->query($delete_sql) === TRUE) {
        // echo "刪除成功!<a href='main.php'>返回主頁</a>";
        // 重定向用戶到下一頁
		header('Location: index.php');
		exit;
    }else{
        echo "刪除失敗!";
	}

}else{
	echo "資料不完全";
}
				
?>