<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: inline-block;
            width: 140px;
            text-align: left;
        }
        .block{
            margin-bottom:2px ;
        }
        body{
            text-align: center;
        }
        form{
            display: inline-block;
            border:2px solid ;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="add.php" method="POST">
        <h1> Thêm quản trị viên</h1>
        <div class="block">
            <label for="">Tên đăng nhập</label>
            <input type="text" name="username" id="">
        </div>
        <div class="block">
            <label for="">mật khẩu</label>
            <input type="password" name="password" id="">
        </div>
        <div class="block">
            <label for="">Email:</label>
            <input type="text" name="email" id="">
        </div>
        <div class="block">
            <label for="">Họ và tên</label>
            <input type="text" name="hoten" id="">
        </div>
        <div class="block">
           <label for=""></label>
           <input type="submit" name="btnSubmit" value="Thêm mới">
        </div>
    </form>
</body>

</html>