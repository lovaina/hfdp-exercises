<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 9:19
 */

namespace HFDP\factory;


class ChicagoStylePIzzaStore extends PizzaStore
{

    public function createPizza($type)
    {
        $pizza = null;
//here will go the concrete integrations for ChicagoStyle. In this casa, I didn't put all of them.
        if ($type = "cheese"){
            $pizza = new ChicagoStyleCheeseAbstractPizza();
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