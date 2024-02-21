<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>포인트샵</title>
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

    <section>
        <?php include "../point-process.php"; ?>
        <a href="">
            <article>
                <h2>닉네임 변경권</h2>
                <button type="button" id="buy-btn">구매 </button>
                <p>필요 포인트: <span id="pointValue"></span>p</p>
            </article>
        </a>
    </section>

    <footer>
        © 2024 CodeSnack. All rights reserved.
    </footer>
    <script>
        document.getElementById("buy-btn").addEventListener("click", function () {
            var isBuy = true;
            fetch("../point-process.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "buy=" + encodeURIComponent(isBuy),
            })
                .then(response => response.text())
                .then(message => {
                    document.getElementById('buy-btn').innerHTML = message;

                    if (message.includes('사용 가능')) {
                        document.getElementById("id").readOnly = true;
                    }
                });
        });
    </script>
</body>

</html>