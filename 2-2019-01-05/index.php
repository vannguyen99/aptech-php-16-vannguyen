<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        th{
			text-align: center;
			color:red;
			border: 1px solid;
		}
		td{
			text-align: center;
			border: 1px solid;
		}
		table
		{
			border: 1px solid ;
			border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th rowspan="2">STT</th>
                <th rowspan="2">Type</th>
                <th>Price</th>
                <th>Size</th>
                <th>Ram</th>
                <th>Made by</th>
                <th>Made in</th>      
            </tr>
        </thead>
        <tbody>
        <?php 
            $data = [
                [
                    'type' => 'iphone',
                    'property' => [
                        'price' => 100,
                        'size' => 6.5,
                        'ram' => '2GB',
                        'made' => [
                            'by' => 'California',
                            'in' => 'China'
                        ]
                    ]
                ],
                [
                    'type' => 'ipad',
                    'property' => [
                        'price' => 190,
                        'size' => 7.9,
                        'ram' => '4GB',
                        'made' => [
                            'by' => 'California',
                            'in' => 'China'
                        ]
                    ]
                ]
            ];
            foreach ($data as $key => $value){
                echo "<tr>";
                echo "<td>".++$key."</td>";   
                echo "<td>".$value['type']."</td>";
                foreach ($value as $key1 => $value1) {
                    if ($key1 === 'property') {
                        foreach ($value1 as $key2 => $value2) {
                            if ($key2 !== 'made')
                                echo "<td>".$value2."</td>";
                            else {
                                foreach ($value2 as $key3 => $value3) 
                                    echo "<td>".$value3."</td>";
                            }
                        }
                    }
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>