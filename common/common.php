<?php

/*
 * 检测客户端运行页面情况
 * */

$common_path = dirname(dirname(__FILE__)); // 项目index的根目录
include $common_path.'/common/config.php';

$api = $api_url;
$web = $web_url;


// 获取IP
function get_real_ip(){

    $ip = FALSE;
    //客户端IP 或 NONE
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }

    //多重代理服务器下的客户端真实IP地址（可能伪造）,如果没有使用代理，此字段为空
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
        for ($i = 0; $i < count($ips); $i++) {
            if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    //客户端IP 或 (最后一个)代理服务器 IP
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

// 返回404
function back_404($txt = 'Route Error Or Page Not Found.'){
    header('HTTP/1.1 404 Not Found');
    header('Content-Type: text/html; charset=utf-8');

    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">';
    echo '<title>404-'.$txt.'</title>';
    echo '<style>body{font-size: 18px;color: #555555;margin: 20px;background: #EEEEEE;font-weight: bold;text-align: center;letter-spacing: 2px;}</style>';

    exit($txt);
}
