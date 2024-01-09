<?php

namespace Venancio\DesignPatterns\Criacionais\Builder;

class SubwayBuilder implements IBuilder
{

    private Subway $subway;

    public function __construct()
    {
        $this->subway = new Subway();
    }

    public function addBreads(string $breads): IBuilder
    {
        $this->subway->setBreads($breads);
        return $this;
    }

    public function addProteins(string $proteins): IBuilder
    {
       $this->subway->setProteins($proteins);
       return $this;
    }

    public function addCheeses(string $cheeses): IBuilder
    {
        $this->subway->setCheeses($cheeses);
        return $this;
    }

    public function addSalads(array $salads): IBuilder
    {
        $this->subway->setSalads($salads);
        return $this;
    }

    public function addSauces(array $sauces): IBuilder
    {
        $this->subway->setSauces($sauces);
        return $this;
    }

    public function addAdditions(array $additions): IBuilder
    {
        $this->subway->setAdditions($additions);
        return $this;
    }

    public function make(): Subway
    {
        return $this->subway;
    }
}