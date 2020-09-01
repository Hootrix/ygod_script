<?php
/**
 * 代理访问url
 */

$map = [
    //请求访问的uri路径  =>  需要返回的网址内容
    '/test' => 'http://mock-api.com/VnZ8Eqzw.mock/boluo',
];
function curl($url)
{
    return file_get_contents($url);
}
if (isset($_GET['s']) && !empty($_GET['s'])) {
    $req = $_GET['s'];// 当前请求的路径uri
    if (isset($map[$req])) {
        echo curl($map[$req]);die;
    }
}
echo json_encode([
    'States'=>-1,
]);