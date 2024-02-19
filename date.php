<?php
$dayOfWeek = date("N"); // Получаем текущий день недели в виде числа (1 для понедельника, 7 для воскресенья)

switch ($dayOfWeek) {
    case 1:
        $dayName = "понедельник";
        break;
    case 2:
        $dayName = "вторник";
        break;
    case 3:
        $dayName = "среда";
        break;
    case 4:
        $dayName = "четверг";
        break;
    case 5:
        $dayName = "пятница";
        break;
    case 6:
        $dayName = "суббота";
        break;
    case 7:
        $dayName = "воскресенье";
        break;
    default:
        $dayName = "неизвестный день";
}

$currentDate = date("d.m.Y"); // Получаем текущую дату в формате "дд.мм.гг"

echo "Сегодня, $dayName, $currentDate";
