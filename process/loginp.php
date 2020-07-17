<?php
  session_start();


  $id = $_POST['id'];
  $pw = $_POST['password'];

  $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
  mysqli_select_db($conn, "filime");

  $sql = "SELECT * FROM user WHERE user_id = '$id'";



  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);


  //$hashed = hash("sha256", 'qwer', true);



  if($pw == $row['user_pw']){

    $_SESSION['is_login'] = true;
    $_SESSION['id'] = $row['id'];
    $_SESSION['nick'] = $row['user_id'];
  }
  else{

    ?>

    <script>
      alert('아이디 혹은 비밀번호가 틀립니다.');
  location.href='/contents/login.php';
    </script>

    <?php

  }
?>
  <script>
  location.href='/index.php';

  </script>
