<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>红包</title>
</head>
<body>
<div id="container">
    <h1><?php echo $title; ?></h1>
<?php
    echo "总金额" . $lucky_money->total_amount;
    echo nbs();
    echo "数量" . $lucky_money->quantity;
echo nbs();
    echo "领取数量" . $lucky_money_package_count;
echo nbs();
    echo "领取金额" . $lucky_money_package_count_amount;
echo nbs();
?>

    <?= form_open('lucky_money/receive/'.$lucky_money->id); ?>
    <input type="submit" value="领取">
    <?= form_close(); ?>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>金额</td>
            <td>用户</td>
        </tr>
        <?php
        foreach ($lucky_money_package as $obj){
            echo '<tr>';
            echo '<td>'.$obj->id.'</td>';
            echo '<td>'.$obj->amount.'</td>';
            echo '<td>'.$obj->uid.'</td>';
            echo '<tr>';
        }?>
    </table>


<!---->
<!--    --><?php
//$total=$lucky_money->total_amount;//红包总金额
//$num=$lucky_money->quantity;// 分成10个红包，支持10人随机领取
//$min=0.01;//每个人最少能收到0.01元
//
//for ($i=1;$i<$num;$i++)
//{
//    $safe_total=($total-($num-$i)*$min)/($num-$i);//随机安全上限
//    $money=mt_rand($min*100,$safe_total*100)/100;
//    $total=$total-$money;
//
//    echo '<p>第'.$i.'个红包：'.$money.' 元，余额：'.$total.' 元 </p>';
//}
//echo '<p>第'.$num.'个红包：'.$total.' 元，余额：0 元</p>';
//
//?>
    </div>
</body>
</html>
