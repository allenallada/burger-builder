<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

class BottomBun extends Ingredient
{
    protected function shouldAdd(Order $order): bool
    {
        return $order->bottomBun();
    }

    protected function visual(): string
    {
        return "
          ████████████████████████████████  
        ██                                ██
          ██    ██    ██████    ██    ████  
          ██████  ████      ████  ████  ██  
          ██                            ██  
            ████████████████████████████ ";
    }
}