<?php
// mảng là nơi lưu trữ nhiều phần tử/giá trị có cùng kiểu dữ liệu 
// mảng gồm 2 phần (vị trí,giá trị)
// khai báo mảng 
// $mang = [2,3,4,5,6];
// // lấy ra phần tử 4 
// // duyệt mảng // hiển thị ra các phần tử trong mảng 
// for($i = 0;$i < count($mang);$i++) {
//     echo $mang[$i]."<br>";
// }
//hiển thị ra các phần tử là số chẵn trong mảng 
//tính tổng các phần tử trong mảng 
// tìm giá trị lớn nhất trong mảng 
//tìm giá trị nhỏ nhất trong mảng 
// hiển thị những phần tử trong mảng là ước của 18. 
// echo $mang[1]."<br>";
// echo $mang[2]."<br>";
// echo $mang[3]."<br>";
// echo $mang[4]."<br>";
// lấy ra tất các phần tử trong mảng
///////ddddddddddd 
$manglh = ["a"=>1,"b"=>2,"c"=>3];
// echo $manglh["a"];
// echo $manglh["b"];
// echo $manglh["c"];
$manginfo = ["ten"=>"Hoàng Thắng","nam_sinh"=>1996,"email"=>"thanghq12@fe.edu.vn"];
//echo $manginfo["ten"]."-".$manginfo["nam_sinh"]."-".$manginfo["email"];
//vòng lặp foreach được dùng để chuyên duyệt mảng trong php 
//số lần lặp của vòng lặp foreach phụ thuộc vào tổng số phần tử của mảng bao h 
// hết các phần tử của mảng thì dừng 
//
// foreach ($manginfo as $key => $value) {
//     echo $key."-".$value."<br>";
// } 
$tong = 0;
foreach($manglh as $key => $value) {
    $tong+= $value;
}
echo "Tổng là ".$tong;
?>