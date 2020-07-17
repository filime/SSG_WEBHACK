<?php
session_start();

  $con_id = $_GET['id'];
  $writer = $_SESSION['id'];
  $comment = $_POST['comment'];

  $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
  mysqli_select_db($conn, "filime");



  $sql = "INSERT INTO comments (comment, con_id, writer) VALUES ('$comment', '$con_id', '$writer')";
  $result = mysqli_query($conn, $sql);
echo $sql;
 var_dump($result);





 ?>
 <script>
 history.back();
</script>
