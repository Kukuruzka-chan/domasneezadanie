<?php

$users = [
    [
        "user_name" => "Алексей",
        "user_age" => 21,
        "user_login" => "alex",
        "user_password" => "Alex@123"
    ],
    [
        "user_name" => "Мария",
        "user_age" => 19,
        "user_login" => "maria",
        "user_password" => "Maria#456"
    ],
    [
        "user_name" => "Иван",
        "user_age" => 25,
        "user_login" => "ivan",
        "user_password" => "Ivan_789"
    ]
];

$user_login = "alex";
$user_password = "Alex@123";

if ($user_login !== $users["user_login"]) {
    echo "Пользователь с таким логином не существует.";
}

?>