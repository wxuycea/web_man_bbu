<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>회원가입</title>
</head>

<body>
    <?php include '../header.php' ?>

    <nav>
        <div class="search-box">
            <input type="text" placeholder="검색어를 입력하세요">
            <button type="button">검색</button>
        </div>
        <div class="nav-left">
            <a href="index.php">홈</a> |
            <a href="notice-board.php">공지사항</a> |
            <a href="free-board.php">자유 게시판</a> |
            <a href="market-board.php">장터 게시판</a> |
            <a href="suggestions-board.php">건의 게시판</a> |
            <a href="qna-board.php">QnA 게시판</a> |
            <a href="pointshop.php">포인트샵</a>
        </div>
    </nav>
    <section id="register-section">
        <h3>회원가입</h3>

        <form action="../register-process.php" method="post" id="register-form">
            <label for="username">이름:</label>
            <input type="text" id="username" name="username" required>

            <label for="id">아이디:</label>
            <input type="text" id="id" name="id" required>
            <button type="button" id="id_check_button"
                style="padding: 10px; color: #333; border: none; border-radius: 5px; cursor: pointer;">중복확인</button>
            <div id="id_check_result"></div><br>

            <label for="password">비밀번호:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">비밀번호 확인:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <label for="nickname">닉네임:</label>
            <input type="text" id="nickname" name="nickname" required>
            <button type="button" id="nickname_check_button"
                style="padding: 10px; color: #333; border: none; border-radius: 5px; cursor: pointer;">중복확인</button>
            <div id="nickname_check_result"></div><br>

            <label for="miss">비밀번호 분실 시 질문 및 답변:</label>
            <select name="question">
                <option value="1">출생지는 어디인가요?</option>
                <option value="2">가장 친한 친구의 이름은 무엇인가요?</option>
                <option value="3">좋아하는 동물은 무엇인가요?</option>
            </select><br>
            <input type="text" id="answer" name="answer" required><br>

            <button type="submit" id="submit_button">회원가입</button>
        </form>

        <p>이미 계정이 있으신가요? <a href="login.php">로그인</a></p>
    </section>

    <footer>
        © 2024 CodeSnack. All rights reserved.
    </footer>
    <script>
        document.getElementById("id_check_button").addEventListener("click", function () {
            var id = document.getElementById("id").value;

            if (id.trim() == "") {
                alert("아이디를 입력하세요.");
                return;
            }

            fetch("../check-id.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "id=" + encodeURIComponent(id),
            })
                .then(response => response.text())
                .then(message => {
                    document.getElementById('id_check_result').innerHTML = message;

                    if (message.includes('사용 가능')) {
                        document.getElementById('id_check_button').remove();
                        document.getElementById("id").readOnly = true;
                    }
                });
        });
        document.getElementById("nickname_check_button").addEventListener("click", function () {
            var nickname = document.getElementById("nickname").value;

            if (nickname.trim() == "") {
                alert("닉네임을 입력하세요.");
                return;
            }

            fetch("../check-nickname.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "nickname=" + encodeURIComponent(nickname),
            })
                .then(response => response.text())
                .then(message => {
                    document.getElementById('nickname_check_result').innerHTML = message;

                    if (message.includes('사용 가능')) {
                        document.getElementById('nickname_check_button').remove();
                        document.getElementById("nickname").readOnly = true;
                    }
                });
        });
        document.getElementById("submit_button").addEventListener("click", function () {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var answer = document.getElementById("answer").value;

            if (username.trim() == "" || password.trim() == "" || answer.trim() == "") {
                alert("빈칸없이 입력해주세요.");
                event.preventDefault();
            }
        })
    </script>

</body>

</html>