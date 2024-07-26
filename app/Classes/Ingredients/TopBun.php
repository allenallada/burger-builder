<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

class TopBun extends Ingredient
{
    protected function shouldAdd(Order $order): bool
    {
        return $order->topBun();
    }

    protected function visual(): string
    {
        return "
                ████████████████████       
              ██                    ██
            ██                        ██
          ██                            ██
          ██                            ██  
          ██                            ██";
    }
}