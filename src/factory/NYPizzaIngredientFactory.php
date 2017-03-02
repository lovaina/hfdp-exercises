<?php

namespace HFDP\factory;


class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{

    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        return [new Garlic(), new Onion(), new Mushroom()];
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    public function createClam()
    {
        return new FreshClams();
    }
}