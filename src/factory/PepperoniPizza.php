<?php

namespace HFDP\factory;


class PepperoniPizza extends AbstractPizza
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
        $this->pepperoni = $this->ingredientPizza->createPepperoni();

        return "Preparing ". $this->name;
    }
}