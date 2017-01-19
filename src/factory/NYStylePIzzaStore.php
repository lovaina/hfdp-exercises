<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 9:18
 */

namespace HFDP\factory;


class NYStylePIzzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();
        //here will go the concrete integrations for NYStyle. In this casa, I didn't put all of them.
        if ($type = "cheese"){
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('“New York Style Cheese Pizza');
        } else if ($type = "pepperoni") {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('“New York Style Pepperoni Pizza');
        } else if ($type = "clam") {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('“New York Style Clam Pizza');
        } else if ($type = "veggie") {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('“New York Style Veggie Pizza');
        }

        return $pizza;
    }
}