<?php 
//23. Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры следовали в порядке возрастания.  

$n = 2145333215167;
$ansver = 0;

for($i = 1; $i < 10; $i++)
{
    $number = $n;
    while($number > 0)
    {
        if($i == $number % 10)
        {   
            $ansver *=10;
            $ansver += $i;
        }
        $number = intdiv($number,10);
    }
}

echo $ansver;

?>
