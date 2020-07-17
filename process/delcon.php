<?php

    // 파라미터 값 받기
    $id = $_GET['id'];

    // DB에 접속
  $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
    mysqli_select_db($conn, "filime");

    // 해당 id의 게시글을 삭제
    $sql = "DELETE FROM contents WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // 처리가 끝난 후 메인화면으로 이동
?>
<script>
    location.href='/index.php';
</script>
