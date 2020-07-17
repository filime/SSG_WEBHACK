<html>
    <head>
    <link rel="stylesheet" href="/process/style.css">
    </head>
    <body>

    <div id="main">
        <!-- 게시글 작성 부분 -->
        <!-- 작성된 데이터들은 newcon.php페이지로 이동 -->
        <form id ="in" action="/process/loginp.php" accept-charset="utf-8" name="login" method="post">
          <input type="text" name="id" placeholder="id">
          <input type="password" name="password" placeholder="password">
            <input type="submit" style = "margin-right: 10px;" value="로그인"/>



        <button type="button" onclick="location.href='/index.php' ">메인으로</button>
        <button type="button" style = "margin-top: 10px;" onclick="location.href='./register.php' ">회원가입</button>
        </form>
    </div>



    </body>
</html>
