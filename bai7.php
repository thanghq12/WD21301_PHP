<?php 
//mảng liên hợp 2 chiều 
//được sử dụng để lưu và chung truyển dữ liệu quan trọng nhất trong PHP 
//ví dụ 
$mangSV = [
    ["ten_sv"=>"Thang","nam_sinh"=>1996], // mỗi 1 mảng liên hợp tương ứng với 1 thông tin của sv 
    ["ten_sv"=>"Đại","nam_sinh"=>2005],
    ["ten_sv"=>"Minh","nam_sinh"=>2003],
    ["ten_sv"=>"Ngân","nam_sinh"=>2005]
];
// cách 1 for thường 
for($i = 0; $i < count($mangSV); $i ++) { // count($mangSV) -> trả về tổng số phần tử của mảng 
    echo $mangSV[$i]["ten_sv"]."-".$mangSV[$i]["nam_sinh"]."<br>";
}
//các 2 dùng foreach 
foreach($mangSV as $key => $value)
{
    echo $value["ten_sv"]."-".$value["nam_sinh"]."<br>";
} 

//tao 1 mang lien hop 2 chieu product gom cac thong tin sau 
// ten_sp,gia,mau_sac
// hien thi thong tin product ra table nhuw sau
// ten_sp|gia|mau_sac|xep loai 
// gia >= 5000 => dat to mau vang 
// gia < 5000 => re to mau xanh 
echo "Test tesst"
?>
<table border="1"> 
    <tr>
        <td>Ten Sinh Vien</td>
        <td>Nam sinh</td>
    </tr>
    <?php foreach($mangSV as $key=>$value) {?>
    <tr>
        <td><?php echo $value["ten_sv"]; ?></td>
        <td><?php echo $value["nam_sinh"]; ?></td>
    </tr>
    <?php } ?>
</table>
