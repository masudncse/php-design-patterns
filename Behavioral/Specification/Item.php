<?php


namespace DesignPatterns\Behavioral\Specification;

class Item
{
    public function __construct(private float $price)
    {
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
