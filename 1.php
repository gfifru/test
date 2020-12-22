<?php
$arr = [
  '1' => 'one',
  '2' => 'two',
  '3' => 'three',
];
$arrFlip = array_flip($arr);
var_dump($arr, $arrFlip);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    'use strict';
    let arr = {
        '1': 'one',
        '2': 'two',
        '3': 'three',
    };
    function array_flip(array)
    {
        let tmp_ar = {};
        for (let key in array)
        {
            if (array.hasOwnProperty(key)) {
                tmp_ar[array[key]] = key;
            }
        }
        return tmp_ar;
    }
    console.log(array_flip(arr));
</script>
</body>
</html>
