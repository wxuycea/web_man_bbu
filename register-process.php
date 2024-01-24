<?php
// 오류 출력 (삭제)
error_reporting(E_ALL);
ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $id = $_POST['id'];
    $pw = $_POST['password'];
    $confirm_pw = $_POST['confirm-password'];
    $nickname = $_POST['nickname'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $db_host = "localhost";
    $db_user = "codesnack";
    $db_password = "";
    $db_name = "codesnack";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($pw != $confirm_pw) {
        echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
        echo "<script>location.href = 'templates/register.html';</script>";
    } else {
        $query = "INSERT INTO user (userName, id, passwd, nickname, question, answer) VALUES('$username', '$id', '$pw', '$nickname', '$question', '$answer')";
        $mysqli->query($query);

        if ($mysqli->affected_rows > 0) {
            echo "<script>alert('회원가입에 성공하였습니다.');</script>";
            echo "<script>location.href = 'templates/login.html';</script>";
        } else {
            echo "<script>alert('회원가입에 실패하였습니다. 다시 시도해주세요.');</script>";
            echo "<script>location.href = 'templates/register.html';</script>";
        }
    }
}