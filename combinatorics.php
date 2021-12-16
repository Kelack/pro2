<?php 
//Изменение вывода ошибки.
set_error_handler('errorDisplay');

try
{
    //Проверка на тип значений введенных в класс. Если пройдена успешно, продолжение работы; если нет, остановка класса.
    $outputCombinations = new OutputCombinations('0', 1);
    //Вывод получившихся комбинаций.
    echo $outputCombinations;
}
catch(TypeError $e)
{
    //Вывод ошибки.
    echo $e->getMessage();
}

class OutputCombinations   
{
    private $characteString;
    private $long;
    private $length;

    public function __construct(string $characteString, int $long)
    {
        //Проверка на ошибки
        $this->errorsGetting($characteString, $long);

        $this->characteString = $characteString;
        $this->long = $long;
        $this->length = strlen($characteString);
    }

    private function calculations()
    {
        $alteredCharacteString = $this->characteString;
        $combinations = '';
        $countingCombinations = 0;

        if($this->long == 1)
        {
            for($i = 0; $i < $this->length; $i++)
            {
                $combinations .= "$alteredCharacteString[$i] <br>";
                $countingCombinations++;
            }
            return "Вывод комбинаций:<br> $combinations <br> Количество комбинаций = $countingCombinations <br>";
        }

        //Вызов функции для нахождения всех возможных комбинаций без исключений 
        $combinations = $this->calculationWithoutException($alteredCharacteString, $combinations, $countingCombinations);
        
        return "Вывод комбинаций:<br> $combinations <br> Количество комбинаций = $countingCombinations <br>";
    }

    private function calculationWithoutException($alteredCharacteString, $combinations, &$countingCombinations)
    {
        //Используем число, потом его сдвигаем на одну позицию; повторяем, пока число не вернется в изначальное состояние.
        for($x = 0; $x < $this->length; $x++)
        {
            //Проходимся по всему полученому числу, добавляем полученые комбинации.
            for($i = 1; $i < $this->length; $i++)
            {
                $combination = $alteredCharacteString[0];
                $item = $i;

                //Собираем число. Первый элемент этого числа всегда = $alteredCharacteString[0]. Количество элементов в собраном числе = $this->long.
                for($k = 1; $k < $this->long; $k++)
                {
                    //Если мы выходим за границу количества элементов изначального числа, в следующем повторении цикла, останавливаем 2 цикла.
                    if($item+1 == $this->length+1)
                    {
                        break 2;
                    }

                    $combination .= $alteredCharacteString[$item];
                    $item++;
                }

                $combinations .= "$combination <br>";

                $countingCombinations++;
            }

            $firstElement = $alteredCharacteString[0];
            $alteredCharacteString = substr_replace($alteredCharacteString, '', 0, 1);
            $alteredCharacteString .= $firstElement;
        }

        return $combinations;
    } 

    //1)метод записи ошибки
    private function errorRecording($characteString, $long, &$exe)
    {
        if(strlen($characteString) < $long)
        {
            $exe = true;
            return 'Комбинации не найдены! Длина искомого размещения больше длины строки символов';
        }

        switch(false)
        {
            case $characteString !== '':
                $exe = true;
                return 'Комбинации не найдены! Минимальное колличество символов в строке символов должно быть = 1';
        }
        
        switch(false)
        {
            case $long !== 0:
                $exe = true;
                return 'Комбинации не найдены! Минимальная длинна искомого размещения должна быть = 1';

            case $long > 0:
                $exe = true;
                return 'Комбинации не найдены! Минимальная длинна искомого размещения должна быть > 0';
        }

        $exe = false;
    } 
    
    //2)метод получения ошибок
    private function errorsGetting($characteString, $long) 
    {
        $exe = false;

        $errorMessage =  $this->errorRecording($characteString, $long, $exe);

        if($exe)
        {
            trigger_error($errorMessage);
            exit;
        }

    }
    
    public function __toString()
    {
        return "Изначальная строка символов = '$this->characteString'; Установленная длинна комбинаций = $this->long <br><br>"
        //вывод основного алгоритма
        .$this->calculations();
    }
}

//3)метод отображения ошибки
function errorDisplay($no, $msg, $file, $line)
{
    echo "Произошел - FATAL ERROR!!! <br><br> Значение ошибки - $msg. <br><br> Где находиться ошибка - $file. <br><br> Номер строки - $line.";
}