<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        chiều dài <input type="text" name="chieudai" /></br>
        chiều rộng  <input type="text" name="chieurong" /></br>
        lựa chọn 
        <select name="luachon">
            <option value="1">Tính Chu Vi</option>
            <option value="2">Tính Diện Tích</option>
        </select>
        <input type="submit" name="tinh" value="tinh" />
    </form>
    <?php
    // kiểm tra xem có tồn tại nut hay không 
    if(isset($_POST['tinh'])) {// người dùng thực hiện ấn nút 
        $chieudai = $_POST['chieudai']; // lấy dữ liệu từ input có name là soa
        $chieurong = $_POST['chieurong']; // lấy dữ liệu từ input có name là sob
        $luachon = $_POST['luachon'];
        if($luachon == 1) {
            $chuvi = ($chieudai + $chieurong)*2;
            echo $chuvi;
        } else if ($luachon == 2) {
            $dientich = $chieudai * $chieurong;
            echo $dientich;
        }
        // echo $dientich; 
    }
    ?>
</body>
</html>