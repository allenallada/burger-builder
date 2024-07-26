<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

abstract class Ingredient
{
    //default implementation of draw
    public function draw(Order $order) : string
    {
        if ($this->shouldAdd($order)) {
            return $this->visual();
        }
        return '';
    }

    //visual of the ingredients
    abstract protected function visual(): string;

    //if ingredient should be added
    abstract protected function shouldAdd(Order $order): bool;
}