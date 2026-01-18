<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        chiều dài <input type="text" name="chieudai" /></br>
        chiều rộng  <input type="text" name="chieurong" /></br>
        <input type="submit" name="tinh" value="tinh" />
    </form>
    <?php
    // kiểm tra xem có tồn tại nut hay không 
    if(isset($_GET['tinh'])) {// người dùng thực hiện ấn nút 
        $chieudai = $_GET['chieudai']; // lấy dữ liệu từ input có name là soa
        $chieurong = $_GET['chieurong']; // lấy dữ liệu từ input có name là sob
        $dientich = $chieudai * $chieurong;
        echo $dientich; 
    }
    ?>
</body>
</html>