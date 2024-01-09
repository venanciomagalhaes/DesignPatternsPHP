<?php

namespace Venancio\DesignPatterns\Criacionais\Prototype;

class Car
{
    public function __construct(
        private string $color,
        private string $chassi,
        private string $motor,
        private string $suspension,
        private string $power,
        private float $price,
        private int $year,
    ){}

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setChassi(string $chassi): void
    {
        $this->chassi = $chassi;
    }

    public function setMotor(string $motor): void
    {
        $this->motor = $motor;
    }

    public function setSuspension(string $suspension): void
    {
        $this->suspension = $suspension;
    }

    public function setPower(string $power): void
    {
        $this->power = $power;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }



    private function getColor(): string
    {
        return $this->color;
    }

    private function getChassi(): string
    {
        return $this->chassi;
    }


    private function getMotor(): string
    {
        return $this->motor;
    }

    private function getSuspension(): string
    {
        return $this->suspension;
    }


    private function getPower(): string
    {
        return $this->power;
    }

    private function getPrice(): float
    {
        return $this->price;
    }

    private function getYear(): int
    {
        return $this->year;
    }

    public function clone(): Car
    {
        return new Car(
            $this->getColor(),
            $this->getChassi(),
            $this->getMotor(),
            $this->getSuspension(),
            $this->getPower(),
            $this->getPrice(),
            $this->getYear()
        );
    }
}