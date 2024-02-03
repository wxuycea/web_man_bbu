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
        <h1>보유 포인트: <span id="point">0</span></h1>
        <a href="">
            <article>
                <h2>닉네임 변경권</h2>
                <button class="buy-btn">구매 </button>
                <p>필요 포인트: <span id="pointValue"></span>p</p>

            </article>
        </a>

        <!-- 추가적인 공지사항 항목을 필요에 따라 추가 -->
    </section>

    <footer>
        © 2024 CodeSnack. All rights reserved.
    </footer>

    <script>
        const pointDisplay = document.getElementById('point');  // 포인트를 표시
        let points = 500;
        const itemPoint = 100;

        document.getElementById("pointValue").textContent = itemPoint;
        pointDisplay.textContent = points;


        const buyButtons = document.querySelectorAll('.buy-btn');
        buyButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault(); // 기본 동작을 막음
                if (points < itemPoint) {
                    alert('포인트가 부족합니다');
                } else if (confirm('구매하시겠습니까?')) {
                    points -= itemPoint;
                    pointDisplay.textContent = points;
                    alert('구매가 완료되었습니다!');
                } else {
                    alert('취소하였습니다.');
                }
            });
        });
    </script>
</body>

</html>