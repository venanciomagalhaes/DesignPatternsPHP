<?php

namespace Venancio\DesignPatterns\Criacionais\Builder;

interface IBuilder
{
    public function addBreads(string $breads): self;
    public function addProteins(string $proteins): self;
    public function addCheeses(string $cheeses): self;
    public function addSalads(array $salads): self;
    public function addSauces(array $sauces): self;
    public function addAdditions(array $additions): self;
    public function make():Subway;
}
