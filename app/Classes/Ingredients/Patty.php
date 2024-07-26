<?php

namespace App\Classes\Ingredients;

use App\Classes\Order;

class Patty extends Ingredient
{
    protected function shouldAdd(Order $order): bool
    {
        return $order->pattyCount() > 0;
    }

    public function draw(Order $order):string
    {
        if (!$this->shouldAdd($order)) {
            return '';
        }

        $patties = '';

        for ($count = 0 ; $count < $order->pattyCount() ; $count++) {
          $patties .= $this->visual();
        }
        return $patties;
    }

    protected function visual(): string
    {
        return "\r\n         ██████████████████████████████████ 
        ██▒▒▒▒▒        PATTY        ▒▒▒▒▒▒██";
    }
}