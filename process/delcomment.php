<?php
$id = $_GET['id'];

$conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
  mysqli_select_db($conn, "filime");

$sql = "DELETE FROM comments WHERE id = $id";
    $result = mysqli_query($conn, $sql);
 ?>
 <script>

      history.back();
   </script>
