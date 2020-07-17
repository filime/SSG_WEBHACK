<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
ini_set("display_errors", "1");
$conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
  mysqli_select_db($conn, "filime");
  $con_id = $_GET['con_id'];


$uploaddir = './data/';
$file_name = basename($_FILES['userfile']['name']);
$uploadfile = $uploaddir . $file_name;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  $sql = "INSERT INTO files (file_name, con_id) VALUES ('$file_name', '$con_id')";
  $result = mysqli_query($conn, $sql);
  ?>


  <script>
    alert('파일이 업로드 되었습니다.');

       history.back();
    </script>
  <?php
} else {
  ?>
  <script>
    alert('파일 업로드에 실패하였습니다.');
       history.back();
    </script>
  <?php
}


?>
</body>
</html>
