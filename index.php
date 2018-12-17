<?php
require_once ('functions.php');
require_once('data.php');


// Подключаем шаблоны

$page_content = include_template('index.php', [
    'categories' => $categories,
    'elements' => $elements,
]);
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'is_auth' => $is_auth,
    'title' => $title,
    'categories' => $categories ?? [],
]);
print($layout_content);