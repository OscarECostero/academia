<?php
    require '../vendor/autoload.php';
    use MixPlay\Math\Calculator;
    use MixPlay\Math\CientificCalculator;
    use MixPlay\Math\CalculatorFactory;

    try{
        $calc=CalculatorFactory::createCalculator(1);

        $calc
        ->add(45)
        ->div(1)
        ->pow(2)
        ->mul(6)
        ->sub(10);

        echo $calc->getResult();
    }catch(Exception $e){
        echo $e->getMessage();
    }



