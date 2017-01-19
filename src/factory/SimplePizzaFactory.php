<?php

namespace HFDP\factory;


class SimplePizzaFactory
{
    public function createPizza($type)
    {
        $pizza = null;

        if ($type = "cheese"){
            $pizza = new CheeseAbstractPizza();        
        } else if ($type = "pepperoni") { 
            $pizza = new PepperoniAbstractPizza();        
        } else if ($type = "clam") { 
        $pizza = new ClamAbstractPizza();        
        } else if ($type = "veggie") {
        $pizza = new VeggieAbstractPizza();        
        }

        return $pizza; 
    }
}