<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//hai chiều
$multiple2DArr = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]];
echo $multiple2DArr[2][2];//11

$multiple3DArr2 = [
    [
        [1, 2, 3, 4, 5],
        [2, 3, 4, 5, 6]
    ],
    [
        [1, 2, 3, 4, 6],
        [23, 3, 5, 45, 6]
    ]
];
echo $multiple3DArr2[1][1][0];

$multiple3DArr3 = [
    [
        [
            'name' => 'Luan',
            'age' => 18
        ],
        [
            'name' => 'Nam',
            'age' => 20
        ]
    ],
    [
        [
            'name' => 'Thu',
            'age' => 18
        ],
        [
            'name' => 'Linh',
            'age' => 30
        ]
    ]
];
echo $multiple3DArr3[1][1]['name'];
foreach ($multiple3DArr3 as $item) {
    foreach ($item as $item2) {
        foreach ($item2 as $k => $v) {
            echo $k . ': ' . $v . '<br>';
        }
    }
}
?>
</body>
</html>