<?php/*
// Ваш токен бота Telegram
$botToken = '7805092884:AAGsp6c82RfGwKBy-A-zmO5R_SUm4oPbTI0';

// Список chat_id для получения уведомлений
$chatIds = ['502194414', '6554247476'];

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Формируем текст сообщения
    $textMessage = "Новое сообщение из формы обратной связи:\n";
    $textMessage .= "Имя: $name\n";
    $textMessage .= "Email: $email\n";
    $textMessage .= "Сообщение: $message\n";

    // Функция для отправки сообщения в Telegram
    function sendMessage($chatId, $message, $botToken) {
        $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
        
        // Отправка GET-запроса
        $response = file_get_contents($url);
        
        return json_decode($response, true);
    }

    // Отправка сообщения каждому chat_id
    foreach ($chatIds as $chatId) {
        $result = sendMessage($chatId, $textMessage, $botToken);
        
        if ($result['ok']) {
            echo "Сообщение отправлено в чат: $chatId\n";
        } else {
            echo "Ошибка при отправке сообщения в чат: $chatId. Ошибка: " . $result['description'] . "n";
        }
    }
} else {
    echo "Форма не была отправлена.";
}*/
?>
