<?php
//3. В массиве А(N) первый положительный элемент и последний отрицательный элемент переставить местами.  

$m = [1,2,3,-4,5,6,7,-8,9,1,10,1];
$k = '';
$firstPositive = '';

echo '<pre>';
print_r($m);
echo '</pre>';

for($i = 0; $i < count($m); $i++)
{
    if($m[$i] > -1)
    {
        $k = $i;
        $firstPositive = $m[$i]; 
        break;
    }
}

if($k !== '')
{
    for($i = count($m)-1; $i > -1; $i--)
    {
        if($m[$i] < 0)
        {
            $m[$k] = $m[$i];
            $m[$i] = $firstPositive;
            break;
        }
    }
}

echo '<pre>';
print_r($m);
echo '</pre>';

