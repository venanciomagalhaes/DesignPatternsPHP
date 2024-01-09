<?php

namespace Venancio\DesignPatterns\Criacionais\Builder;

class SubwayDirector
{
    public function makeChickenTeriyaki(array $additions = []): Subway
    {
        return (new SubwayBuilder())->addBreads('Italian')
            ->addProteins('Chicken Teriyaki')
            ->addCheeses('Mozzarella')
            ->addSalads(['Lettuce', 'Tomato', 'Onion'])
            ->addSauces(['Honey Mustard'])
            ->addAdditions($additions)
            ->make();
    }

    public function makeCreamyCheddarSteak(array $additions = []):Subway
    {
        return (new SubwayBuilder())->addBreads('Parmesan Oregano')
            ->addProteins('Creamy Cheddar Steak')
            ->addCheeses('Cheddar')
            ->addSalads(['Lettuce', 'Tomato', 'Green Pepper'])
            ->addSauces(['Chipotle Southwest'])
            ->addAdditions($additions)
            ->make();
    }
}
