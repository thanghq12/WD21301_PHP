<?php 
//mảng liên hợp 
$mangColor = ["red"=>"Màu đỏ","pink"=>"Màu hồng","green"=>"Xanh lá cây","black"=>"Màu đen"];
?>
<table border="1">
    <tr>
        <td>KEY</td>
        <td>VALUE</td>
    </tr>
    <?php foreach($mangColor as $key=>$value) { ?>
     <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php  }?>
</table>