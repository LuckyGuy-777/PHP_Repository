<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function ttt(){
            if (document.mem.id.value == "")
            {
                alert("아이디가 입력되어야 해요!");
                document.mem.id.focus()
                return;
            }

            if (document.mem.pass.value == "")
            {
                alert("비밀번호가 입력되어야 해요!");
                document.mem.pass.focus()
                return;
            }

            if (document.mem.passx.value == "")
            {
                alert("비밀번호 재입력이 되어야 해요!");
                document.mem.passx.focus()
                return;
            }

            if (document.mem.pass.value != document.mem.passx.value)
            {
                alert("비밀번호가 일치하지 않아요!");
                document.mem.pass.focus()
                return;
            }


            if (document.mem.name.value == "")
            {
                alert("이름이 입력되어야 해요!");
                document.mem.name.focus()
                return;
            }

            document.mem.submit()

        }

    </script>
<body>  
    회원가입 화면<br>
    <form name="mem" action="DBsave.php" method="post">
    아이디 : <input type="text" name="id" id=""><br>
    비밀번호 : <input type="password" name="pass" id=""><br>
    비밀번호 재확인 : <input type="password" name="passx" id=""><br>
    이름 : <input type="text" name="name" id=""><br>
    이메일: <input type="email" name="email" id=""><br>
    <input type="button" value="가입하기" onclick="ttt()">
    <input type="reset" value="취소하기">
    </form>
</body>
</html>