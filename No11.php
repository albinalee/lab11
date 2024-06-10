<?php
$var  = 'hello';
echo $var[0] . $var[1] . $var[4];
?>

<?php
echo 60*60 . ' seconds';
?>

<?php
$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var . "\n";
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;
?>

<?php
$a = 3;
echo $a;
?>

<?php
$a = 10;
$b = 2;
echo $a + $b . "\n";
echo $a - $b . "\n";
echo $a * $b . "\n";
echo $a / $b;
?>

<?php
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
?>

<?php
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;
?>

<?php
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
?>

<?php
$text = 'Hello, world!';
echo $text;
?>

<?php
$text1 = 'Hello, ';
$text2 = 'world!';
echo $text1 . $text2;
?>

<?php
$name = 'Bob';
echo "Hello, {$name}!"; 
?>

<?php
$age = 10;
echo "I am {$age} years old"; 
?>

<?php
$text = 'abcde';
echo $text[0] . $text[2] . $text[4]; 
?>

<?php
$text = 'abcde';
$text[0] = '!';
echo $text; 
?>

<?php
$num = '12345';
for($i = 0, $sum = 0; $i < strlen($num); $i++)
    $sum += intval($num[$i]); 
echo $sum; 
?>

<?php
$hour = 60 * 60;
$day = $hour * 24;
$month = $day * 30;
echo $hour . " seconds\n";
echo $day . " seconds\n";
echo $month . "-" . $month + $day . " seconds";
?>

<?php
$hr = date('H');
$min = date('i');
$sec = date('s');
echo "{$hr}:{$min}:{$sec}";
?>

<?php
$num = 7;
echo $num * $num;
?>

<?php
$var = 47;
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
echo $var;
?>

<?php
$text = "i ";
$text = $text . "want ";
$text = $text . "to learn ";
$text = $text . "PHP!";
echo $text . "\n";
$text = "i ";
$text .= "want ";
$text .= "to learn ";
$text .= "PHP!";
echo $text;
?>

<?php
$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var . "\n";
$var = 10;
$var++;
$var++;
$var--;
echo $var;
?>

<?php
$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var . "\n";
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
?>