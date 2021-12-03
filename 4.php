<?php
//4. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
    
$number = 975443912349876;

if(intdiv($number, 1000) > 0)
{
    if((intdiv($number, 1000) < 10))
    {
        if($number % 2 == 0 and (consistencyСheckIncreasing($number) or consistencyСheckDiminishing($number)))
            echo $number;
            
    }
    else
    {
        while(intdiv($number , 1000) > 0)
        {
            $fourDigit = $number % 10000;

            if($number % 2 == 0 and (consistencyСheckIncreasing($fourDigit) or consistencyСheckDiminishing($fourDigit)))
                echo $fourDigit. ' ';

            $number = intdiv($number, 10);

        }

    }
    

}

function consistencyСheckIncreasing($fourDigit)
{
    $examination = true;

    for($i = 0; $i < 3; $i++)
    {
        $lastNumber = 0;
        $penultimateNumber = 0;

        $lastNumber = $fourDigit % 10;

        $fourDigit = intdiv($fourDigit, 10);

        $penultimateNumber = $fourDigit % 10;

        if($lastNumber >= $penultimateNumber)
        {
            
            $examination = false;
            break;
        }
    }

    if($examination)
        return true;
    else
        return false;
} 

function consistencyСheckDiminishing($fourDigit)
{
    $examination = true;

    for($i = 0; $i < 3; $i++)
    {
        $lastNumber = 0;
        $penultimateNumber = 0;

        $lastNumber = $fourDigit % 10;

        $fourDigit = intdiv($fourDigit, 10);

        $penultimateNumber = $fourDigit % 10;

        if($lastNumber <= $penultimateNumber)
        {
            $examination = false;
            break;
        }
    }

    if($examination)
        return true;
    else
        return false;
} 

?>