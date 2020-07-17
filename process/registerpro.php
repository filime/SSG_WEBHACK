<?php
  $id = $_POST['id'];
  $pw = $_POST['password'];
  $rpw = $_POST['repassword'];
  $key = $_POST['key'];
  ini_set("display_errors", "1");

  $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
  mysqli_select_db($conn, "filime");

  if($_POST['repassword'] != $_POST['password']){
    ?>
    <script>
      alert('비밀번호와 비일번호 재입력이 일치하지 않습니다.');
      location.href='/contents/register.php';
    </script>
    <?php

  }

  $sql = "SELECT user_id FROM user WHERE id = $id";
  $result = mysqli_query($conn, $sql);

  if($result == true){
    ?>
    <script>
      alert('해당 아이디가 이미 존재합니다.');
      location.href='/contents/register.php';
    </script>
    <?php

  }


  if($key != "filime"){
    ?>
    <script>
      alert('인증 키값이 다릅니다.');
      location.href='/contents/register.php';
    </script>
    <?php

  }

//$hashed = hash("sha256", $pw, true);

$sql = "INSERT INTO user (user_id, user_pw) VALUES ('$id', '$pw')";


$result = mysqli_query($conn, $sql);
?>

<script>
  alert('회원가입 완료');
  location.href='/contents/login.php';
</script>
