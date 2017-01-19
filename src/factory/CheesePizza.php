<?php

namespace HFDP\factory;


class CheesePizza extends AbstractPizza
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

        return "Preparing ". $this->name;
    }


}