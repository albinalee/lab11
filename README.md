<p align = "center">МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ<br>
РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ<br>
ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ<br>
«САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</p>
<br><br><br><br><br><br>
<p align = "center">Институт естественных наук и техносферной безопасности<br>Кафедра информатики<br>Ли Альбина Тевоновна</p>
<br><br><br>
<p align = "center"><br><strong>Лабораторная работа №11. «PHP»</strong><br>01.03.02 Прикладная математика и информатика</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p align = "right">Научный руководитель<br>
Соболев Евгений Игоревич</p>
<br><br><br>
<p align = "center">г. Южно-Сахалинск<br>2024 г.</p>
<br><br><br><br><br><br><br><br><br><br><br><br>

<h1 align = "center">Введение</h1>

<p><b>Веб-разработка</b> — процесс создания веб-сайта или веб-приложения. Основными этапами процесса являются: </p>

<ul>
<li>Проектирование сайта или веб-приложения (сбор и анализ требований, разработка технического задания, проектирование интерфейсов);</li>
<li>Создание дизайн-концепции сайта;</li>
<li>Создание страниц;</li>
<li>Программирование;</li>
<li>Оптимизация и размещение материалов сайта;</li>
<li>Тестирование и внесение корректировок;</li>
<li>Публикация проекта на хостинге;</li>
<li>Обслуживание работающего сайта.</li>
</ul>

<br>

<h1 align = "center">Цели и задачи</h1>


<p>Цель: ознакомиться со скриптовым языком PHP</p>

<p>Задачи:</p>

<ul>
<li>Изучить синтаксис PHP</li>
<li>Научиться писать скрипты для решения постановленных задач на PHP</li>
</ul>

<p></p>

<h1 align = "center">Решение</h1>

<p>Для выполнения этой лабораторной работы, я пользовалась лекционным материалом и интернет-ресурсами для поиска решений задач оформления и для поиска медиаресурсов:</p>

<ul>
<li><a href="https://youtube.com/">YouTube</a></li>
<li><a href="https://stackoverflow.com/">Stack Overflow</a></li>
</ul>

<p>Примеры кода:</p>
<code>$name = 'Bob';
echo "Hello, {$name}!";</code>
</br></br>
<code>$age = 10;
echo "I am {$age} years old";</code>
</br></br>
<code>$text = 'abcde';
echo $text[0] . $text[2] . $text[4];</code>
</br></br>
<code>$text = 'abcde';
$text[0] = '!';
echo $text;</code>
</br></br>
<code>$num = '12345';
for($i = 0, $sum = 0; $i < strlen($num); $i++)
    $sum += intval($num[$i]); 
echo $sum;</code>
</br></br>
<code>$hour = 60 * 60;
$day = $hour * 24;
$month = $day * 30;
echo $hour . " seconds\n";
echo $day . " seconds\n";
echo $month . "-" . $month + $day . " seconds";</code>
</br></br>
<code>$hr = date('H');
$min = date('i');
$sec = date('s');
echo "{$hr}:{$min}:{$sec}";</code>
</br></br>
<code>$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var . "\n";
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;</code>
</br></br>
<h1 align = "center">Вывод</h1>
<p>В результате проделанной лабораторной работы, я познакомилась с новыми элементами языка PHP и попрактиковалась в решении задач.</p>
