<html>
    <head>
    <link rel="stylesheet" href="/process/style.css">
    </head>
    <body>
    <?php
        // 파라미터 값 받기
        $id = $_GET['id'];

        // DB접속
        $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
        mysqli_select_db($conn, "filime");

        // 수정하기 위한 게시글 불러오기
        $sql = "SELECT * FROM contents WHERE id = $id";

        // 쿼리문 수행
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        // 받아온 게시글을 textarea에 출력하여 수정 할 수 있도록 함
        // 수정된 게시물 내용과 id값을 post방식으로 upconpro.php 페이지로 전송
        echo '<div id="main">';
        echo '<form id ="in" action="/process/upconpro.php" accept-charset="utf-8" name="con" method="post">';
        echo '<textarea cols = "40" rows = "2"name="title"/>'.$row['title'].'</textarea><br><br>';
        echo '<textarea cols="60" rows="15" name="main"/>'.$row['main'].'</textarea><br><br>';
        echo '<input type="submit" value="수정"/>';
        echo '<input type="hidden" name="id" value="'.$id.'">';


        echo '<button id = "but" type="button" onclick="location.href=\'/index.php\'">메인으로</button>';
        echo '</form>';
        echo '</div>'
    ?>

    </body>
</html>
