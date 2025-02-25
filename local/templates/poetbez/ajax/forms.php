<?php
return 12;
// return $_POST['first_name'];


// define('SMARTCAPTCHA_SERVER_KEY', 'ysc2_3bDdFJNPyUKRkFg4xSwOktE64oys2TyeSGMqyXAue1de8d6e');

// function check_captcha($token) {
//     $url = "https://smartcaptcha.yandexcloud.net/validate";
//     $args = [
//         "secret" => SMARTCAPTCHA_SERVER_KEY,
//         "token" => $token,
//         "ip" => $_SERVER['REMOTE_ADDR'], // Нужно передать IP-адрес пользователя.
//     ];

//     // Создаем контекст потока для POST-запроса
//     $options = [
//         'http' => [
//             'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
//             'method'  => 'POST',
//             'content' => http_build_query($args),
//             'timeout' => 1,
//         ],
//     ];
//     $context  = stream_context_create($options);

//     // Выполняем запрос
//     $server_output = file_get_contents($url, false, $context);
    
//     if ($server_output === false) {
//         echo "Allow access due to an error\n";
//         return true;
//     }

//     $resp = json_decode($server_output);

//     return isset($resp->status) && $resp->status === "ok";
// }

// $token = $_POST['smart-token'];

// return $token;

// if (check_captcha($token)) {
//     return "success";
// } else {
//     return "Robot\n";
// }
