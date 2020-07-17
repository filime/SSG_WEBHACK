<!DOCTYPE html>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="/process/style.css">
    <title></title>
  </head>
  <body>
    <div id="main">
      <form id = "in" class="" action="/process/registerpro.php" method="post">
        <br>
        아이디 입력

        <input type="text" name="id" placeholder="id">
        </br>
        <br>
        비밀번호 입력
        <input type="password" name="password" placeholder="password">
        </br>
        <br>
        비밀번호 재입력
        <input type="password" name="repassword" placeholder="repassword">
      </br>
      <br>
        인증 코드
        <input type="text" name="key" placeholder="key">
      </br>
      <div style="margin-top:20px;">
        <input type="submit" value="회원가입"/>
<button type="button" onclick="location.href='/index.php' ">메인으로</button>
      </div>

      </form>

    </div>






  </body>
</html>
