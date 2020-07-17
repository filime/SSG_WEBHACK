<?php

  $target_Dir = "./data/";
  $fileid = $_GET['id'];

  $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
  mysqli_select_db($conn, "filime");

  $sql = "SELECT * FROM files WHERE id = $fileid";
  $result = mysqli_query($conn, $sql);

 $row = mysqli_fetch_assoc($result);



$target_Dir = $target_Dir.$row['file_name'];

unlink($target_Dir);

$sql = "DELETE FROM files WHERE id = $fileid";
$result = mysqli_query($conn, $sql);



?>
<script>
  alert('파일 삭제 완료');
     history.back();
  </script>
