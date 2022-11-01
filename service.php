<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo $_SESSION["ok"];

    if ($_SESSION["ok"])
    {
        echo "회원제 서비스이고 중요한... 돈이되는. ...";
    }
    else{
        echo "회원이 아니면 사용할수 없습니다";
    }
    ?>
    
</body>
</html>