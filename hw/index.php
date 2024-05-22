<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location:' . $redirect);
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ittproger - сайт для ебланов</title>
    <link rel="stylesheet" href = "css/main.css" type="text/css" charset="utf-8">
    <meta name="description" content ="Информационно-развелекательный портал для ебланов ! Курсы">
    <meta name="keywords" content = "ittproger, it, курсы, ебланы">
    <link href ="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
    <header>
        <div id="logo">
            <a href ="https://ittproger.com/" title="На главную">
                <img src="img/logo.png" alt ="logo.png" width="300" height="200" title="ittproger.com" 
alt="ittproger.com">
                <span>ittproger</span>
            </a>
        </div>
        <div id="about">
            <a href ="" title="Узнать детальнее об рекламе">Реклама</a>
            <a href ="" title="Написать нам">обратная связь</a>
        </div>
        <div id="reg_auth">
            <a href="" title="Зарегаться">
                <div id="btn">
                    Регистрация
                </div>
            
    </header>
</body>
</html>