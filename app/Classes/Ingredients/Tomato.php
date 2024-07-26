<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

class Tomato extends Ingredient
{
    protected function shouldAdd(Order $order): bool
    {
        return $order->tomato();
    }

    protected function visual(): string
    {
        return "\r\n        ████████████████████████████████████
           ██▒▒▒▒▒    TOMATO     ▒▒▒▒▒▒██";
    }
}