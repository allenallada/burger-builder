<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

class Cheese extends Ingredient
{
    protected function shouldAdd(Order $order): bool
    {
        return $order->cheese();
    }

    protected function visual(): string
    {
        return "\r\n       ██████████████ CHEESE█████████████████";
    }
}