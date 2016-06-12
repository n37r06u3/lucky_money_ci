<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>红包</title>
</head>
<body>
<div id="container">
    <h1><?php echo $title; ?></h1>
<h3>创建红包</h3>
    <?= form_open('lucky_money/add'); ?>
    总金额:<input type="text" name="total_amount">
    数量:<input type="text" name="quantity">
    <input type="submit">
    <?= form_close(); ?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>总额</td>
        <td>数量</td>
        <td>操作</td>
    </tr>
    <?php
    foreach ($all_lucky_money as $obj){
        echo '<tr>';
        echo '<td>'.$obj->id.'</td>';
        echo '<td>'.$obj->total_amount.'</td>';
        echo '<td>'.$obj->quantity.'</td>';
        echo '<td>';
        $segments = array('lucky_money','show',$obj->id);
        echo anchor($segments,"查看");
        echo '</td>';
        echo '<tr>';
    }?>
</table>
    </div>
</body>
</html>
