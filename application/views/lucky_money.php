<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<h1><?php echo $title; ?></h1>

<table border="1">
    <tr>
    <td>ID</td>
    <td>总额</td>
    <td>数量</td>
    <td>分包数</td>
    <td>设置</td>
    </tr>

	<?php
    foreach ($lucky_money as $obj){
        echo '<tr>';
        echo '<td>'.$obj->id.'</td>';
        echo '<td>'.$obj->total_amount.'</td>';
        echo '<td>'.$obj->quantity.'</td>';
        echo '<td>'.$obj->count.'</td>';
        echo '<td>';
        $segments = array('lucky_money','generate_one');
        echo anchor($segments,'生成大额分包');
        echo nbs();
        $segments = array('lucky_money','generate_all');
        echo anchor($segments,'生成全部分包');
        echo '</td>';

        echo '<tr>';
    }?>
</table>

</div>

</body>
</html>