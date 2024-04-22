<?php

// TODO
if (isset($_COOKIE['action']) && $_COOKIE['action'] == 'get_cookies') {
    printf("从用户请求中读取Cookie数据：{name: %s, website: %s}", $_COOKIE['name'], $_COOKIE['website']);
    exit();
}

setcookie('name', 'andy');
$expires = time() + 3600;
setcookie('website', 'http://andyron.top', $expires);

header('Location: /cookie.php?action=get_cookies');