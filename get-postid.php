<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$db_host = "localhost";
$db_user = "codesnack";
$db_password = "";
$db_name = "codesnack";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

$query1 = "SELECT postType FROM post";
$result1 = $mysqli->query($query1);

if ($result1 && $result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $postType = $row['postType'];
        
        switch ($postType) {
            case 1:
                $query2 = "SELECT postId FROM post WHERE postType = 1";
                $result2 = $mysqli->query($query2);
                if ($result2 && $result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                        $postid = $row2['postId'];
                        echo '<a href="free-text.php?postid=' . $postid . '" class="free-post-link">';
                        echo '<article class="free-post">';
                        echo '<h2>자유 게시물</h2>';
                        echo '<p>게시물 내용이 여기에 들어갑니다.</p>';
                        echo '</article>';
                        echo '</a>';
                    }
                }
                break;
            case 2:
                $query3 = "SELECT postId FROM post WHERE postType = 2";
                $result3 = $mysqli->query($query3);
                if ($result3 && $result3->num_rows > 0) {
                    while ($row3 = $result3->fetch_assoc()) {
                        $postid = $row3['postId'];
                        echo '<a href="market-text.php?postid=' . $postid . '" class="market-post-link">';
                        echo '<article class="market-post">';
                        echo '<h2>장터 게시물</h2>';
                        echo '<p>게시물 내용이 여기에 들어갑니다.</p>';
                        echo '</article>';
                        echo '</a>';
                    }
                }
                break;
            case 3:
                $query4 = "SELECT postId FROM post WHERE postType = 3";
                $result4 = $mysqli->query($query4);
                if ($result4 && $result4->num_rows > 0) {
                    while ($row4 = $result4->fetch_assoc()) {
                        $postid = $row4['postId'];
                        echo '<a href="suggestions-text.php?postid=' . $postid . '" class="suggestions-post-link">';
                        echo '<article class="suggestions-post">';
                        echo '<h2>건의 게시물</h2>';
                        echo '<p>게시물 내용이 여기에 들어갑니다.</p>';
                        echo '</article>';
                        echo '</a>';
                    }
                }
                break;
            case 4:
                $query5 = "SELECT postId FROM post WHERE postType = 4";
                $result5 = $mysqli->query($query5);
                if ($result5 && $result5->num_rows > 0) {
                    while ($row5 = $result5->fetch_assoc()) {
                        $postid = $row5['postId'];
                        echo '<a href="qna-text.php?postid=' . $postid . '" class="qna-post-link">';
                        echo '<article class="qna-post">';
                        echo '<h2>QnA 게시물</h2>';
                        echo '<p>게시물 내용이 여기에 들어갑니다.</p>';
                        echo '</article>';
                        echo '</a>';
                    }
                }
                break;
            default:
                break;
        }
    }
}