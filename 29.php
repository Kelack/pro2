<?php 
// 29. Для  каждого  числа  заданной  последовательности  натуральных   чисел n0 ,n1,...,nm
// установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к.

$number = 2135;
$sum = 5;




if(sumNumberEqualsGiven($number,$sum))
{
    echo 'равна';
}
else
{
    echo 'Не равна';
}

function sumNumberEqualsGiven($number,$sum)
{
    if(intdiv($number,100) == 0)
    {
        return false;
    }



    return false;
}

function sumNumber($number)
{
    $sum = 0;

    while($number > 0)
    {
        $sum += $number % 10;
        $number = intdiv($number,10);
    }
    
    return $sum; 
}