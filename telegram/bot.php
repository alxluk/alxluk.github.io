//задаём наш токен, полученный при создании бота и указываем путь к API телеграма
define('BOT_TOKEN', '626930684:AAEqk2rFSQXVxZLprcr81vTUbPMNVi4ljrM');
define('API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');

//принимаем запрос от бота(то что напишет в чате пользователь)
$content = file_get_contents('php://input');
//превращаем из json в массив
$update = json_decode($content, TRUE);
//получаем id чата
$chat_id = $update['message']['chat']['id'];
