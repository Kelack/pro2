<?php

//intdiv(12345,10) = 1234
//12345 % 10 = 5
//12345 / 10 = 1234,5

//intdiv(10,10) = 1
//10 % 10 = 0
//10 / 10 = 0



//--------------------------------№1
// //число введенное для вычислений
// $number = 5;

// //Колличество цифр меньших 5 в "$number"
// $numberOfDigits = 0;


// while($number > 0)
// {
//     if(($number % 10) < 5)
//         $numberOfDigits ++;

//     $number = intdiv($number, 10);
// }

// echo $numberOfDigits;

//--------------------------------№2

// $number = 5;

// if(37 > $number)
// {
//     for($i = 1000; $i < 10000; $i++)
//     {
//         $currentDate = $i; 
//         $sum = 0;

//         for($k = 0; $k < 4; $k++)
//         {
//             $sum += $currentDate % 10;
//             $currentDate = intdiv($currentDate, 10);
//         }

//         if($number == $sum)
//             echo $i.' ';

//     }
// }

// --------------------------------№3

// $number = 123458;

// $examination = true;

// while($number > 1)
// {
//     $lastNumber = 0;

//     $penultimateNumber = 0;

//     $lastNumber = $number % 10;

//     $number = intdiv($number, 10);

//     $penultimateNumber = $number % 10;

//     if(($lastNumber != $penultimateNumber+1) and $penultimateNumber != 0)
//     {
//         $examination = false;
//         break;
//     }
// }

// if($examination)
//     echo "Образуют";
// else
//     echo "Не образуют";

// 4. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
    
// $number = 975443912349876;

// if(intdiv($number, 1000) > 0)
// {
//     if((intdiv($number, 1000) < 10))
//     {
//         if($number % 2 == 0 and (consistencyСheckIncreasing($number) or consistencyСheckDiminishing($number)))
//             echo $number;
            
//     }
//     else
//     {
//         while(intdiv($number , 1000) > 0)
//         {
//             $fourDigit = $number % 10000;

//             if($number % 2 == 0 and (consistencyСheckIncreasing($fourDigit) or consistencyСheckDiminishing($fourDigit)))
//                 echo $fourDigit. ' ';

//             $number = intdiv($number, 10);

//         }

//     }
    

// }

// function consistencyСheckIncreasing($fourDigit)
// {
//     $examination = true;

//     for($i = 0; $i < 3; $i++)
//     {
//         $lastNumber = 0;
//         $penultimateNumber = 0;

//         $lastNumber = $fourDigit % 10;

//         $fourDigit = intdiv($fourDigit, 10);

//         $penultimateNumber = $fourDigit % 10;

//         if($lastNumber >= $penultimateNumber)
//         {
            
//             $examination = false;
//             break;
//         }
//     }

//     if($examination)
//         return true;
//     else
//         return false;
// } 

// function consistencyСheckDiminishing($fourDigit)
// {
//     $examination = true;

//     for($i = 0; $i < 3; $i++)
//     {
//         $lastNumber = 0;
//         $penultimateNumber = 0;

//         $lastNumber = $fourDigit % 10;

//         $fourDigit = intdiv($fourDigit, 10);

//         $penultimateNumber = $fourDigit % 10;

//         if($lastNumber <= $penultimateNumber)
//         {
//             $examination = false;
//             break;
//         }
//     }

//     if($examination)
//         return true;
//     else
//         return false;
// } 


// 5. По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.-----

// $number = 53300001;
// $answer = 0;



// while($number >= 1)
// {
//     if($number > 9)
//         $answer = ($answer + $number % 10) * 10;
//     else
//         $answer += $number;
    
//     $number = intdiv($number, 10);
// }

// echo $answer;



// 6. Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.-----

// for($i = 1000; $i < 10000; $i++)
// {
//     $currentDate = $i; 

//     for($k = 0; $k < 4; $k++)
//     {
//         $exam = $currentDate % 10;

//         if($exam == 0 or $exam == 2 or $exam == 3 or $exam == 7)
//             $inf = true;
//         else
//         {
//             $inf = false;
//             break;
//         }
            
//         $currentDate = intdiv($currentDate, 10);
//     }

//     if($inf)
//         echo $i .' ';

// }



// 7. Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

// $numberPermanent = 123456789;
// $number = $numberPermanent;
// $number2 = $numberPermanent;


// if(exception($numberPermanent))
//     while ($number > 0)
//     {
//         $checkedNumber =  $number % 10;
//         $number2 = $numberPermanent;
//         $exam = 0;

//         while ($number2 > 0)
//         {
//             if($checkedNumber ==  $number2 % 10)
//                 $exam++;
            
//             $number2 = intdiv($number2, 10);
            
//         }
        
//         if($exam > 1)
//         {
//             echo "В числе $number есть две одинаковые цифы ";
//             break;
//         }

//         $number = intdiv($number, 10);
//     }


// function exception($number)
// {
//     if(intdiv($number, 10) < 1)
//     {
//         echo "В числе $number нет двух одинаковых цифр, советую написать число побольше";
//         return false;
//     }
//     if(intdiv($number, 10000000000) > 0)
//     {
//         echo "В числе $number 100% есть две одинаковые цифры, я даже считать не буду, напишите число поменьше";
//         return false;
//     }
//     return true;
//}



// 8. Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.

// for($i = 1000; $i < 10000; $i++)
// {
//     $number = $i; 
//     $exam = true;

//     for($k = 0; $k < 3; $k++)
//     {
//         $currentNumber = $number % 10;
//         $checkedNumber = $i;
//         $coincidences = 0;

//         while ($checkedNumber > 0)
//         {
//             if($currentNumber ==  $checkedNumber % 10)
//                 $coincidences++;
        
//             $checkedNumber = intdiv($checkedNumber, 10);
            
//         }
//         if($coincidences > 1)
//         {
//             $exam = false;
//             break;
//         }
//         $number = intdiv($number, 10);
//     }
    
//     if($exam)
//         echo $i .' ';
    

// }





// 9. Дано  натуральное  число  N.  Определить,  является  ли  оно автоморфным. Автоморфное число  равно последним разрядам квадрата этого числа. 
// Например,  5 и 25,  6 и 36,  25 и 625.

// $originalNumber = 36;
// $number = $originalNumber;
// $numberSquared = pow($number, 2);
// $exam = true;

// while($number > 0)
// {
//     if($number % 10 !== $numberSquared % 10)
//     {
//         $exam = false;
//         break;
//     }
//     $number = intdiv($number, 10);
//     $numberSquared = intdiv($numberSquared, 10);
// }

// if($exam)
//     echo "Число $originalNumber является автоморфным";
// else
//     echo "Число $originalNumber не является автоморфным";



// 10. Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром. 
// Число называется палиндромом, если его запись читается одинаково с начала и с конца.

// $n = 500;

// for($i = 0; $i !== $n+1; $i++)
// {
//     if(palindromeComputation ($i))
//     {
//         $palindrome = $i;
        
//         if(palindromeComputation(pow($palindrome,2)))
//             echo $i .' возведении в квадрат = ' .pow($palindrome,2) .'; ';
//     }
// }

// function palindromeComputation ($number)
// {
//     $checkedNumber = $number;
//     $currentNumber = $number;
//     $number_ViceVersa = 0;

//     while($checkedNumber > 0)
//     {
//         $number_ViceVersa = $number_ViceVersa * 10 + $checkedNumber % 10;
//         $checkedNumber = intdiv($checkedNumber, 10);
//     }

//     if($currentNumber == $number_ViceVersa)
//         return true;
        
//     return false;
// }



// 11. Напечатать   те   элементы   последовательности   натуральных   чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.

// $n = 100;

// for($i = 1; $i !== $n+1; $i++)
// {
//     $number = $i;
//     $sum = 0;
//     while($number > 0)
//     {
//         $sum += $number % 10;
       
//         $number = intdiv($number,10);
//     }
    
//     if($i % $sum == 0)
//     {
//         echo $i .' ';
//     }
// }



// 12. Определить, является ли заданное целое число N простым.

// $n = 998;
// $exam = true;
// for($i = 2; $i !== $n; $i++)
// {
//     if($n % $i == 0)
//     {   
//         $exam = false;
//         break;
//     }
// }

// if($exam)
//     echo 'является';
// else
//     echo 'не является';




// 13. Определить, является ли число  2n  m  симметричным, т. е. запись  числа содержит четное количество цифр и совпадают его левая и правая  половинки.  

// $number = 886688;

// if(digitsInNumber($number) % 2 == 1)
//     echo "Число $number не является симметричным";
// else if(!honestPalindromeComputation($number))
//     echo "Число $number не является симметричным";
// else
//     echo "Число $number является симметричным";

// function digitsInNumber($number)
// {
//     $account = 0;
        
//     while($number > 0)
//     {
//         $account++;
//         $number = intdiv($number,10);
//     }
//     return $account;
// }

// function honestPalindromeComputation($number)
// {
//     $checkedNumber = $number;
//     $currentNumber = $number;
//     $number_ViceVersa = 0;

//     while($checkedNumber > 0)
//     {
//         $number_ViceVersa = $number_ViceVersa * 10 + $checkedNumber % 10;
//         $checkedNumber = intdiv($checkedNumber, 10);
//     }

//     if($currentNumber == $number_ViceVersa)
//         return true;
        
//     return false;
// }


// 14. Парными  простыми числами называются два простых числа, разность  которых равна двум. Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел.  

// $counter = 0;

// $x1 = 52151;
// $x2 = 125251;

// $primeNumber1 = 0;
// $primeNumber2 = 0;

// for($n = $x1; $n !== $x2; $n++)
// {
//     $primeNumber1 = $primeNumber2;
//     $exam = true;
//     for($i = 2; $i !== $n; $i++)
//     {
//         if($n % $i == 0)
//         {   
//             $exam = false;
//             break;
//         }
//     }

//     if($exam)
//         $primeNumber2 = $n;

//     if($primeNumber2 - $primeNumber1 == 2)
//     {
//         echo " $primeNumber1 и $primeNumber2; ";
//         $counter++;
//     }

//     if($counter > 10)
//      break;

// }




// 15. Определить количество различных делителей целого числа N.  

// $n = 555;

// echo "Делитили числа $n: ";
// echo '1';
// for($i = 2; $i !== $n; $i++)
// {
    
//     if($n % $i == 0)
//         echo ", $i";
// }
// echo ", $n."




// 16. Натуральное число называют совершенным, если оно равно сумме всех своих делителей, не считая его самого. 
// Например, 6=1+2+3.  Найти  все совершенные числа в диапазоне от N до M.  

// $n = 3;
// $m = 10000;

// echo "Все совершенные числа, в диапазоне от $n до $m: ";

// for($i = $n; $i !== $m; $i++)
// {
//     $sum = 0;

//     for($k = 1; $k !== $i; $k++)
//         if($i % $k == 0)
//             $sum += $k;

//     if($sum == $i)
//         echo " $i; ";    

    
// }




// 17. Найти наибольший общий делитель (НОД) двух натуральных чисел N и M. 

// $n = 2450;
// $m = 3500;


// if($n > $m)
//     $minNumber = $m;
// else
//     $minNumber = $n;

// for($i = $minNumber; $i > 1; $i--)
// {
//     if(($n % $i == 0) and ($m % $i == 0))
//     {
//         echo "НОД $n и $m = $i";
//         break;
//     }
// }






// 18. Два  натуральных  числа  называют  дружественными,  если  каждое  из них равно сумме всех делителей другого. 
// Найти все пары дружественных чисел, лежащих в диапазоне от N до M.  


// $n = 100;
// $m = 3000;

// $account2 = 0;
// $account3 = 0;



// for($i = $n; $i < $m; $i++)
// {
//     $secondNumber = 0;
    
//     for($k = $i+1; $k < $m; $k++)
//     {
//         $account2++;
//         if($k % 2 !== $i % 2)
//         {
//             continue;
//         }

//         if(sumDivisors2($k, $account3) == $i)
//         {
//             $secondNumber = $k;
//             break;
//         }
//     }
    
//     if($secondNumber == 0)
//     {
//         continue;
//     }
    
//     $firstNumber = $i;

//     if(sumDivisors2($firstNumber, $account3) == $secondNumber)
//     {
//         // echo $firstNumber .' дружественное числo c ' .$secondNumber .'; <br> ';
//         echo $firstNumber .' дружественное числo c ' .$secondNumber .", account2 = " .$account2 .", account3 = " .$account3 .'; <br> ';
//     }
// }


// function sumDivisors($number, &$account3)
// {
//     $sum = 0;

//     for($k = 1; $k !== $number; $k++)
//     {
//         $account3++;
//         if($number % $k == 0)
//         {
//             $sum += $k;
//         }
//     }

//     return $sum;   
// }

// function sumDivisors2($number, &$account3)
// {
//     $sum = 0;
//     $previousDivisor = 0;

//     for($k = 2; $k !== $number; $k++)
//     {
//         $account3++;
//         if($number % $k == 0)
//         {
//             if($previousDivisor*$k == $number)
//             {
//                 break;
//             }

//             $sum += $number / $k;
//             $sum += $k;
//             $previousDivisor = $k;
//         }
        
//     }

//     return $sum+1;   
// }




// 19. Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.

// $n = 27005;
// $m = 31501;
// $nok = 0;

// if($n > $m)
// {
//     $moreNumber = $n;
// }
// else
// {
//     $moreNumber = $m;
// }

// for($i = $moreNumber; $i <= $n*$m; $i++)
// {
//     if(($i % $n == 0) and ($i % $m == 0))
//     {
//         $nok = $i;
//         break;
//     }
// }

// echo $nok;




// 20. Найти целое число в диапазоне от N до M с наибольшей суммой  делителей.  

// $n = 500;
// $m = 504;
// $maxSumDivisors = sumDivisors2($n);
// $maxNumber = 0;

// for($i = $n+1; $i <= $m; $i++)
// {
//     $currentNumber = sumDivisors2($i);

//     if($currentNumber > $maxSumDivisors)
//     {
//         $maxSumDivisors = $currentNumber;
//         $maxNumber = $i;
//     }
// }

// echo "$maxSumDivisors $maxNumber";

// function sumDivisors2($number)
// {
//     $sum = 0;
//     $previousDivisor = 0;

//     for($k = 1; $k !== $number; $k++)
//     {
//         if($number % $k == 0)
//         {
//             if($previousDivisor*$k == $number)
//             {
//                 break;
//             }

//             $sum += $number / $k;
//             $sum += $k;
//             $previousDivisor = $k;
//         }
        
//     }

//     return $sum;   
// }



//21. Даны  натуральные  числа  N  и  M.  Определить,  являются  ли  они  взаимно простыми числами. 
//Взаимно простые числа не имеют общих делителей, кроме единицы.  

// $n = 521;
// $m = 269;

// if((sumDivisors2($n) == 0) and (sumDivisors2($m) == 0) and ($n !== $m))
// {
//     echo "Числа $n и $m взаимно простые";
// }
// else 
// {
//     echo "Числа $n и $m не взаимно простые";
// }

// function sumDivisors2($number)
// {
//     $sum = 0;
//     $previousDivisor = 0;

//     for($k = 2; $k !== $number; $k++)
//     {
//         if($number % $k == 0)
//         {
//             if($previousDivisor*$k == $number)
//             {
//                 break;
//             }

//             $sum += $number / $k;
//             $sum += $k;
//             $previousDivisor = $k;
//         }
        
//     }

//     return $sum;   
// }




//22. Натуральное число N разложить на простые множители.  

$n = 123799221214;

while($n > 0)
{
    //echo $n .' ';

    for($i = 2; $i <= $n; $i++)
    {
        if($n % $i !== 0)
        {
            continue;
        }

        if(simpleNumber($i))
        {
            echo $i .' ';
            $divider = $i;
            break;
        }
    }

    //echo '<br>';
    
    $n = intdiv($n, $divider);
}

function simpleNumber($number)
{
    for($i = 2; $i !== $number; $i++)
    {
        if($number % $i == 0)
        {   
            return false;
        }
    }

    return true;   
}






?>