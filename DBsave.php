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

    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $regist_day = date("Y-m-d H:i");


    $con = mysqli_connect("localhost","user1","12345","sample");


   $sql = "insert into members(id,pass,name,email,regist_day)values('$id','$pass','$name','$email','$regist_day')";

   mysqli_query($con, $sql);
   mysqli_close($con);

   # echo $id."인 사용자 정보가 등록되었습니다";
    ?>

    <script>
        alert("등록 되었습니다.");
        location.href = "gaip.php"

    </script>
    <br>
    

</body>
</html>