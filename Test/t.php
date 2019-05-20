<?php
/**
 * Created by PhpStorm.
 *
 * @author 田玉星<tianyuxing@scimall.org.cn>
 * @email tianyuxing@scimall.org.cn
 * User: Yasin
 * Date: 2019/5/17
 * Time: 下午4:19
 */
include_once '../init.php';


//print_r(new \Handler\Test());die;
$client = new swoole_client(SWOOLE_SOCK_TCP);
if (!$client->connect('127.0.0.1', 6006, 3))
{
    exit("connect failed. Error: {$client->errCode}\n");
}
$arr = ['class'     => 'Test',
        'method' => 'say',
        'params' => []
];
$content = json_encode($arr);
$content = pack('N',strlen($content)).$content;
    $client->send($content);
    print_r(json_decode( $client->recv(),true));


$client->close();

