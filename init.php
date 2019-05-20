<?php
/**
 * Created by PhpStorm.
 *
 * @author zenghlw<zeng.hongliang@kepuchina.org.cn>
 * @email zeng.hongliang@kepuchina.org.cn
 * User: whosafe
 * Date: 2017/4/10
 * Time: 下午12:38
 */
define('APP_PATH', __DIR__);
require_once '/data/www/fw/Autoload.php';
Autoload::instance()
    ->setIncludePath(APP_PATH)
    ->register();
