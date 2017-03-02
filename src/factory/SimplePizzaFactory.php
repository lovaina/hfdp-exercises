<?php

namespace HFDP\factory;


class SimplePizzaFactory
{
    public function createPizza($type)
    {
        $pizza = null;

        if ($type = "cheese"){
            $pizza = new CheesePizza();        
        } else if ($type = "pepperoni") { 
            $pizza = new PepperoniPizza();        
        } else if ($type = "clam") { 
        $pizza = new ClamAbstractPizza();        
        } else if ($type = "veggie") {
        $pizza = new VeggiePizza();        
        }

        return $pizza; 
    }
}