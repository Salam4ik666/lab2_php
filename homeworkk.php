<!DOCTYPE html>
<html>
<head>
    <title>График работы докторов</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>График работы докторов, каб. 333</h2>
    <table>
        <tr>
            <th>П.н.</th>
            <th>Фамилия, имя</th>
            <th>График</th>
        </tr>
        <?php
        // Получаем текущий день недели (1 - понедельник, 7 - воскресенье)
        $dayOfWeek = date("N");
        
        // Определяем график работы в зависимости от дня недели
        if ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) {
            $schedule = "8:00 - 12:00";
        } elseif ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6) {
            $schedule = "12:00 - 16:00";
        } else {
            $schedule = "Нерабочий день";
        }
        
        // Выводим строки таблицы с данными докторов
        echo "<tr>";
        echo "<td>1.</td>";
        echo "<td>Аксенти Елена</td>";
        echo "<td>$schedule</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>2.</td>";
        echo "<td>Петрова Мария</td>";
        echo "<td>$schedule</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>
