<?php
  session_start();
    // 전달받은 POST 형식의 데이터를 변수에 저장
    $title = $_POST['title'];
    $main = $_POST['main'];
    $id = $_SESSION['id'];
    // DB접속
    $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
    mysqli_select_db($conn, "filime");

    // 새로운 게시물 데이터에 저장
    $sql = "INSERT INTO contents (title, main, writer) VALUES ('$title', '$main', '$id')";

    $result = mysqli_query($conn, $sql);

    if($result == false){
        echo 'ERROR';
    }
?>
<script>
    location.href='/index.php';
</script>
