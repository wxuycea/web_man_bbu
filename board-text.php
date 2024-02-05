<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$db_host = "localhost";
$db_user = "codesnack";
$db_password = "";
$db_name = "codesnack";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
$query = "SELECT * FROM post";
$result = $mysqli->query($query);
$rows = array();

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
        $postId = $row['postId'];
        $userId = $row['userId'];
        $postType = $row['postType'];
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['image'];
        $timeStamp = $row['timeStamp'];
    }
}
echo json_encode($rows);