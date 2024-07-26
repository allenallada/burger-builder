<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

class Lettuce extends Ingredient
{
    protected function shouldAdd(Order $order): bool
    {
        return $order->lettuce();
    }

    protected function visual(): string
    {
        return "\r\n       ██████████████LETTUCE ████████████████";
    }
}