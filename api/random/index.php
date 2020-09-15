<?php
$arr = file('images.txt');
$n = count($arr) - 1;
$x = rand(0, $n);
$size = $_GET['size'];
$return = $return['return'];

// 图片大小
if ($size == 1) {         # 中等图片
    $url = substr_replace($arr[$x], ".md", -6, 0);
} elseif ($size == 2) {   # 缩略图片
    $url = substr_replace($arr[$x], ".th", -6, 0);
} else {                 # 原图
    $url = $arr[$x];
}

// 返回类型
if ($return == 'text') {
    echo $url;
} else {
    header("Location:" . $url, "\n");
}
