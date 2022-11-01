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

    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $con=mysqli_connect("localhost","user1","12345","sample");

    $sql="select * from members where  id = '$id' && pass = '$pass'";
    
    $result = mysqli_query($con, $sql);

    $cnt=mysqli_num_rows($result);

    if ($cnt)
    {
        echo "로그인 되었습니다";
        
        $my = mysqli_fetch_array($result);
        echo  $my["id"]." ".$my["pass"];
        $_SESSION["ok"] = $my["id"];
    }
    else
    {
        echo "등록된 사용자가 아닙니다";
        $_SESSION["ok"] ="";
    }

    ?>

    <a href="service.php">서비스로 이동하기</a>
</body>
</html>