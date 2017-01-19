<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 8:51
 */

namespace HFDP\factory;


class ClamPizza extends AbstractPizza
{

    /** @var  PizzaIngredientFactoryInterface */
    protected $ingredientPizza;

    public function __construct(PizzaIngredientFactoryInterface $ingredientFactory)
    {
        $this->ingredientPizza = $ingredientFactory;
    }

    public function prepare()
    {
        $this->dough = $this->ingredientPizza->createDough();
        $this->sauce = $this->ingredientPizza->createSauce();
        $this->cheese = $this->ingredientPizza->createCheese();
        $this->clams = $this->ingredientPizza->createClam();

        return "Preparing ". $this->name;
    }
}