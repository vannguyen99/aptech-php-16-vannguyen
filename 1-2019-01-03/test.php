<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông tin điện thoại</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Màu sắc</th>
            </tr>
        </thead>
        <?php
            $products = [
                'IphoneX' => ['price' => 18200000, 'color' => 'rose'],
                'Ipad'    => ['price' => 9000000,  'color' => 'gray']
            ];
            foreach ($products as $key =>$value) {
                echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$value['price']."</td>";
                echo "<td>".$value['color']."</td>";
                echo "</tr>";
            }
        ?>
    </table>    
</body>
</html>