<?php 
//Изменение вывода ошибки.
set_error_handler('errorDisplay');

try
{
    //Проверка на тип значений введенных в класс. Если пройдена успешно, продолжение работы; если нет, остановка класса.
    $outputCombinations = new OutputCombinations(1111111,5);
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
    private $countingCombinations = 0;

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
        //Вызов функции для нахождения всех возможных комбинаций
        $combinations = $this->calculationWithoutException($this->characteString, '', $this->long);
        
        return "Нашло $this->countingCombinations комбинаций.<br><br> Комбинации:<br> $combinations";
    }

    private function calculationWithoutException($characteString, $whatToAdd, $long)
    {
        $answer = '';
        $countString = strlen($characteString);
    
        for($i = 1; $i <= $countString; $i++)
        {   
            if($long == 1)
            {
                $this->countingCombinations++;
                $answer .= '<font size="1">' .$this->countingCombinations .') </font>' .$whatToAdd .$characteString[0] .'<br>'; 
            }
    
            $characteString1 = $characteString; $characteString1 =  substr($characteString1, 1);
    
            $answer .= $this->calculationWithoutException($characteString1, $whatToAdd .$characteString[0], $long-1);
    
            
            $firstElement = $characteString[0];
            $characteString = substr_replace($characteString, '', 0, 1);
            $characteString .= $firstElement;
        }
        
        return $answer;
    } 

    private function placementWithoutRepetitions()
    {
        return (($this->factorialNumber($this->length)) / ($this->factorialNumber($this->length - $this->long)));
    } 

    private function factorialNumber($number)
    {
        if($number <=1) 
        {
            return 1;
        }

        return $number * $this->factorialNumber($number-1); 
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
        return "Изначальная строка символов = '$this->characteString'; Длинна комбинаций = $this->long <br> По формуле надо найти  "
        .$this->placementWithoutRepetitions() .' комбинаций.<br>'
        //вывод основного алгоритма
        .$this->calculations();
    }
}

//3)метод отображения ошибки
function errorDisplay($no, $msg, $file, $line)
{
    echo "Произошел - FATAL ERROR!!! <br><br> Значение ошибки - $msg. <br><br> Где находиться ошибка - $file. <br><br> Номер строки - $line.<br><br>";
}