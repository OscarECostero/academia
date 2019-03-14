<?php
    namespace MixPlay\Math;

    use InvalidArgumentException;
    
class Calculator
{
    protected $result=0;

    public function __construct($initial=0)
    {
        $this->result=$initial;
    }

    public function getResult()
    {
        return $this->result;
    }
    public function add($x =0)
    {
        $this->result += $x;
        return $this;    
    }
    public function sub($x =0)
    {
        $this->result -=$x;
        return $this;
    }
    public function mul($x =1)
    {
        $this->result *=$x;
        return $this;
    }
    public function div($x =1)
    {
        if($x==0){
            throw new InvalidArgumentException('no se puede dividir por 0');
        }
        $this->result /=$x;
        return $this;
    }


}
