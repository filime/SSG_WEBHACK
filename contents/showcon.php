<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="/process/style.css">
</head>
<body>
<?php
    session_start();
    // 파라미터값 받기
    $id = $_GET['id'];
    $user_id = $_SESSION['id'];
    // DB에 접속
    $conn = mysqli_connect("localhost", "filime", "rlawjdgh12~");
    mysqli_select_db($conn, "filime");

    // 게시글의 id값으로 해당 게시글 불러오기
    $sql = "SELECT * FROM contents WHERE id = $id";

    // 쿼리문 수행
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // 게시글 출력
    echo '<div id="main">';

    echo '<div id = "in">제목<br></br>'.$row['title'].'</div>';
    $write = $row['writer'];
    echo '<div id = "in">내용<br></br>'.$row['main'].'</div>';
    // 수정, 삭제시 해당 게시글의 id값을 파라미터로 전송하며 이동
      echo '<div style="margin-top:20px;">';
    echo '<button id = "but" type="button" onclick="location.href=\'/index.php\'">메인으로</button>';
if($_SESSION['id'] == $row['writer']){




    echo '<button id = "but" type="button" onclick="location.href=\'/contents/upcon.php?id='.$row['id'].'\'">수정</button>';
    echo '<button id = "but" type="button" onclick="location.href=\'/process/delcon.php?id='.$row['id'].'\'">삭제</button>';

    echo '</div>';


    echo '<div style="margin-top:20px;">';
    echo '
    <form enctype="multipart/form-data" action="/process/upfile.php?con_id='.$row['id'].'" method="POST">

       <input name="userfile" type="file" />

       <input type="submit" value="파일 업로드" />

    </form>
    ';
    }
echo '</div>';

    echo '<div id = "in" style="margin-top:50px;">';
    echo "파일 목록";
    $sql = "SELECT * FROM files WHERE con_id = $id";
    $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo '<br>';
    echo $row['file_name'];
    echo '<button id = "but" type="button" onclick="location.href=\'/process/filedown.php?id='.$row['id'].'\'">파일다운로드</button>';
  if($_SESSION['id'] == $row['writer']){
      echo '<button id = "but" type="button" onclick="location.href=\'/process/delfile.php?id='.$row['id'].'\'">파일삭제</button>';
}
    echo '</br>';
    }
    echo '</div>';

?>



  <div id = "in">

<?php
echo '<form class="" action="/process/newcomment.php?id='.$id.'" method="post">';
  ?>
      <textarea cols="60" rows="3" name="comment" placeholder="댓글입력"/></textarea><br><br>
    <input type="submit" name="" value="댓글달기">
  </form>
  </div>
  <div id = "in">
댓글 <div style = "float:right">글쓴이</div>
<?php


  $sql = "SELECT comments.comment, comments.writer, comments.id, user.user_id FROM comments LEFT JOIN user ON comments.writer = user.id WHERE comments.con_id = '$id'";
$result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){

  echo '<br>';
  echo $row['comment'];
  echo '<div style = "float:right">';
 echo $row['user_id'];
 if($_SESSION['id'] == $write)
 echo '<button id = "but" type="button" onclick="location.href=\'/process/delcomment.php?id='.$row['id'].'\'">댓글삭제</button>';
 echo '</div>';
  echo '</br>';
}

 ?>

    </div>
</body>
</html>
