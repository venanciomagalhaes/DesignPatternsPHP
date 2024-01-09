<?php

namespace Venancio\DesignPatterns\Criacionais\Builder;

class SubwayDirector
{
    public function makeChickenTeriyaki(): Subway
    {
        return (new SubwayBuilder())->addBreads('Italian')
        ->addProteins('Chicken Teriyaki')
        ->addCheeses('Mozzarella')
        ->addSalads(['Lettuce', 'Tomato', 'Onion'])
        ->addSauces(['Honey Mustard'])
        ->make();
    }

    public function makeCreamyCheddarSteak():Subway
    {
        return (new SubwayBuilder())->addBreads('Parmesan Oregano')
        ->addProteins('Creamy Cheddar Steak')
        ->addCheeses('Cheddar')
        ->addSalads(['Lettuce', 'Tomato', 'Green Pepper'])
        ->addSauces(['Chipotle Southwest'])
        ->make();
    }
}
