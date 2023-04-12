<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2e2e30">
    <meta content="width=device-width" name="viewport" id="viewport">
    <link rel="stylesheet" href="./fonts/stylesheet.css">
    <!--    <link rel="stylesheet" href="./build/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="main.css">
    <link rel="basket" href="basket.html">
    <title>KISY</title>
</head>
<body>
<script
>
    var popup;

    auth();

    // 1. Открывает окно предоставления доступов
    function auth() {
        popup = window.open('https://www.amocrm.ru/oauth?client_id={{env('AMO_CRM_CLIENT_ID')}}&state=123&mode=post_message', 'Предоставить доступ', 'scrollbars, status, resizable, width=750, height=580');
    }
    // 2. Регистрируем обработчика сообщений из popup окна
    window.addEventListener('message', updateAuthInfo);

    // 3. Функция обработчик, зарегистрированная выше
    function updateAuthInfo(e) {
        if (e.data.error !== undefined) {
            console.log('Ошибка - ' + e.data.error)
        } else {
            console.log('Авторизация прошла')
        }
        // 4. Закрываем модальное окно
        popup.close();
    }
</script>
</body>


