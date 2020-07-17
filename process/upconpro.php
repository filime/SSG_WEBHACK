<?php


    // 받은 POST형식의 값들을 변수에 저장
    $id = $_POST['id'];
    $title = $_POST['title'];
    $main = $_POST['main'];

    // DB에 접속
    $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
    mysqli_select_db($conn, "filime");

    // 해당 id에 맞는 게시물을 UPDATE하는 쿼리문을 작성
    $sql ="UPDATE contents SET title = '$title', main = '$main' where id = '$id'";
    $result = mysqli_query($conn, $sql);


    // 모든 처리가 끝난 후 메인화면으로 이동
?>
<script>
    location.href='/index.php';
</script>
