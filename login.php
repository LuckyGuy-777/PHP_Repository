<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function ttt(){
            if (document.kkk.id.value == "")
            {1
                alert("아이디를 입력해주세요!");
                document.kkk.id.focus();
                return;
            }
            if (document.kkk.pass.value == "")
            {
                alert("비밀번호를 입력해주세요!");
                document.kkk.pass.focus();
                return;
            }

            document.kkk.submit();
        }
    </script>
</head>
<body>
    로그인 화면 <br>
    <form name="kkk" action="loginX.php" method="post">
    아이디 : <input type="text" name="id" id=""><br>
    비밀번호 : <input type="password" name="pass" id=""><br>
    <input type="button" value="로그인" onclick="ttt()">
    </form>

</body>
</html>