<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    // Валидация данных (простейшая)
    if (empty($name) || empty($phone) || empty($comment)) {
        echo "Все поля должны быть заполнены.";
        exit;
    }

    // Подготовка данных для отправки в Bitrix24
    $webhookUrl = 'https://b24-tplrad.bitrix24.ru/rest/1/dyzrsd7iz4qt2nih/crm.lead.add.json';  // Правильный URL
    $data = [
        'fields' => [
            'TITLE' => "Новый лид: " . $name,
            'NAME' => $name,
            'PHONE' => [['VALUE' => $phone, 'VALUE_TYPE' => 'MOBILE']],
            'COMMENTS' => $comment,
        ]
    ];

    // Отправка POST-запроса в Bitrix24
    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($ch);
    curl_close($ch);

    // Подтверждение успешной отправки
    if ($response) {
        echo "Данные успешно отправлены! Ответ от Bitrix24: ";
        echo "<pre>";
        print_r($response);  // Выводим ответ для отладки
        echo "</pre>";
    } else {
        echo "Ошибка при отправке данных.";
    }
}
?>
