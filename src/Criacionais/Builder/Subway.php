<?php

namespace Venancio\DesignPatterns\Criacionais\Builder;

class Subway
{
    private string $breads;
    private ?string $proteins = null;
    private ?string $cheeses = null;
    private array $salads = [];
    private array $sauces = [];
    private array $additions = [];

    public function setBreads(string $breads): void
    {
        $this->breads = $breads;
    }

    public function setProteins(string $proteins): void
    {
        $this->proteins = $proteins;
    }

    public function setCheeses(string $cheeses): void
    {
        $this->cheeses = $cheeses;
    }

    public function setSalads(array $salads): void
    {
        $this->salads = $salads;
    }

    public function setSauces(array $sauces): void
    {
        $this->sauces = $sauces;
    }

    public function setAdditions(array $additions): void
    {
        $this->additions = $additions;
    }

    public function toString(): string
    {
        return "
        Breads: {$this->breads}, Proteins: {$this->proteins},
        Cheeses: {$this->cheeses},
        Salads: " . implode(',', $this->salads) . ", Sauces: " . implode(',', $this->sauces) . ",
        Additions: " . implode(',', $this->additions);
    }


}
