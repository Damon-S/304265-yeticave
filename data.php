<?php
$is_auth = rand(0, 1);
$user_name = 'Иван'; // укажите здесь ваше имя
$user_avatar = 'img/user.jpg';
$title ="привет мир";
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"]; 
$elements = [
                0 => [
                    'name' => '2014 Rossignol District Snowboard',
                    'categories' => 'Доски и лыжи',
                    'price' => 10999,
                    'img' => 'img/lot-1.jpg'
                ], 
                [
                    'name' => 'DC Ply Mens 2016/2017 Snowboard',
                    'categories' => 'Доски и лыжи',
                    'price' => 159999,
                    'img' => 'img/lot-2.jpg'
                ],       
                [
                    'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
                    'categories' => 'Крепления',
                    'price' => 8000,
                    'img' => 'img/lot-3.jpg'
                ],
                [
                    'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
                    'categories' => 'Ботинки',
                    'price' => 10999,
                    'img' => 'img/lot-4.jpg'
                ],
                [
                    'name' => 'Куртка для сноуборда DC Mutiny Charocal',
                    'categories' => 'Одежда',
                    'price' => 7500,
                    'img' => 'img/lot-5.jpg'
                ],
                
                [
                    'name' => 'Маска Oakley Canopy',
                    'categories' => 'Разное',
                    'price' => 5400,
                    'img' => 'img/lot-6.jpg'
                ],
            ];
?>