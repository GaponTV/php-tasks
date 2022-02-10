<?php
class Combination {
    private $str;
    private $length;
    private $combs;

    public function __construct(string $str, int $length)
    {
        try {
            if(strlen($str) < 1) throw new Exception('empty string');
            if($length > strlen($str)) throw new Exception('length is greater than string length');
            $this->str = $str;
            $this->length = $length;
            $this->setCombs($this->str, $this->length);
        } catch (Exception $e){
            die($e->getMessage());
        }

    }

    private function setCombs($str, $length, $result = '')
    {
        if($length == 0){
            $this->combs[] = $result;
        }else{
            $length--;
            for($i = 0; $i < strlen($str); $i++)
            {
                $remStr = $str;
                $nextResult = $result . $str[$i];
                $remStr = substr_replace($remStr, '', $i, 1);
                $this->setCombs($remStr, $length, $nextResult);
            }
        }
    }


    public function printCombs()
    {
        foreach ($this->combs as $comb){
            echo $comb . "\n";
        }
        echo "count of combinations: " . count($this->combs) . "\n";
    }

    public function printAmount()
    {
        echo "count of combinations(formula): ";
        echo gmp_fact(strlen($this->str)) / gmp_fact(strlen($this->str) - $this->length);
    }

}




$comb = new Combination('1234567890', 5);
$comb->printCombs();
$comb->printAmount();
