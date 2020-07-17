<html>
    <head>
    <link rel="stylesheet" href="/process/style.css">
    </head>
    <body>
    
    <div id="main">
        <!-- 게시글 작성 부분 -->
        <!-- 작성된 데이터들은 newcon.php페이지로 이동 -->
        <form id ="in" action="/process/newcon.php" accept-charset="utf-8" name="con" method="post">

            <textarea cols = "40" rows = "2"name="title" praceholder="제목을 입력해주세요"/></textarea><br><br>
            <textarea cols="60" rows="15" name="main" placeholder="내용을 입력해주세요"/></textarea><br><br>
            <input type="submit" value="생성"/>



        <button type="button" onclick="location.href='/index.php' ">메인으로</button>
        </form>
    </div>
    


    </body>
</html>
