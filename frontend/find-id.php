<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>아이디 찾기</title>
</head>

<body>
    <header>
        <div class="header-top">
            <a href="login.php">로그인</a>
            <a href="register.php">회원가입</a>
        </div>
        <div class="header-main">
            <h1 class="header-title"><a href="index.php">CodeSnack</a></h1>
        </div>
    </header>

    <nav>
        <div class="nav-left">
            <a href="index.php">홈</a> |
            <a href="notice-board.php">공지사항</a> |
            <a href="free-board.php">자유 게시판</a> |
            <a href="market-board.php">장터 게시판</a> |
            <a href="suggestions-board.php">건의 게시판</a> |
            <a href="qna-board.php">QnA 게시판</a> |
            <a href="pointshop.php">포인트샵</a>
        </div>
        <div class="search-box">
            <input type="text" placeholder="검색어를 입력하세요">
            <button type="button">검색</button>
        </div>

    </nav>

    <section id="login-section">
        <h2>비밀번호 찾기</h2>

        <form action="" method="post">
            <label for="username">아이디:</label>
            <input type="text" id="username" name="username" required>

            <label for="nickname">닉네임:</label>
            <input type="password" id="nickname" name="nickname" required>

            <button type="submit">아이디 찾기</button>

        </form>
    </section>

    <footer>
        © 2024 CodeSnack. All rights reserved.
    </footer>
</body>

</html>