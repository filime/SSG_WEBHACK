<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/process/style.css">
<!-- 사용자의 데이터를 받거나 출력하는 페이지는 contents 폴더에, 데이터에 관련하여 처리하는 부분은 process 폴더에 저장-->
</head>
<?php
    session_start();
    if(isset($_SESSION['is_login'])){

    }
    else{
      ?>
      <script>
          location.href='/contents/login.php';
      </script>
<?php
    }


    $connum= 1;
    // MYSQL DB에 접속
    $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
    mysqli_select_db($conn, "filime");

    // 게시글을 메인 화면에 띄우고 가져오는 게시글들을 최신순으로 정렬
    $sql = "SELECT contents.id, user.user_id, contents.title FROM contents LEFT JOIN user ON contents.writer = user.id ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);


    echo '<div id ="main">';
        echo '<h1>안녕하세요 '.$_SESSION['nick'].'님</h1>';
    // 게시글들을 출력(각각의 게시글들의 제목은 게시글의 id값을 파라미터로 주는 링크로 작성)
    while($row = mysqli_fetch_assoc($result)){
    echo '<div id ="in">';
    echo $connum;
    echo '. ';

    // showcon.php 페이지로 각 게시글의 id값을 파라미터로 전송 및 이동.
    echo '<a href="contents/showcon.php?id='.$row['id'].'">'.$row['title'].'</a>';
    echo '<div style = "float:right;">작성자: '.$row['user_id'].'</div>';
    echo '</div>';
    $connum++;
    }




    echo '<div>';
    echo '<button id = "but" type="button" onclick="location.href=\'/process/logout.php\'">로그아웃</button>';
    echo '<button id = "but" type="button" onclick="location.href=\'/contents/makecon.php\'">글생성</button>';
    // 글생성하는 페이지로 이동
    echo '</div>';
    echo '</div>'
?>
</html>
