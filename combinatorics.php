<?php 

$number = new OutputCombinations('123', 2);

echo $number;



class OutputCombinations   
{
    private $characteString;
    private $long;
    private $length;

    public function __construct($characteString, $long)
    {
        $this->characteString = $characteString;
        $this->long = $long;
        $this->length = strlen($characteString);
    }


    private function calculations()
    {
        $alteredCharacteString = $this->characteString;
        $do = true;
        $combinations = '';

        while($do)
        {
            for($i = 1; $i < $this->length; $i++)
            {
                $combination = $alteredCharacteString[0];
                $item = $i;
                for($k = 1; $k < $this->long; $k++)
                {
                    if($item+1 == $this->length+1)
                    {
                        break 2;
                    }

                    $combination .= $alteredCharacteString[$item];
                    $item++;
                }
                $combinations .= "$combination <br>";
            }

            $firstElement = $alteredCharacteString[0];
            $alteredCharacteString = substr_replace($alteredCharacteString, '', 0, 1);
            $alteredCharacteString .= $firstElement;

            if($this->characteString == $alteredCharacteString)
            {
                $do = false;
            }
        }
        return $combinations;
    }


    public function __toString()
    {
        return $this->calculations();
    }







}
?>