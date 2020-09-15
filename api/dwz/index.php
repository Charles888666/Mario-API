<?php
// 只是调用了其他人的接口
$url = $_GET['url']; // 获取缩短的链接
$dwz = "https://api.uomg.com/api/long2dwz?dwzapi=suoim&url=";  // 网上抓的防红接口
$url = $dwz . $url;  // 拼接完整请求URL
$json_Array = json_decode(file_get_contents($url), true);
echo $json_Array['ae_url'];
