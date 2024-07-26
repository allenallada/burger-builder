<?php

namespace App\Console\Commands;

use App\Classes\Ingredients\BottomBun;
use App\Classes\Ingredients\Cheese;
use App\Classes\Ingredients\Lettuce;
use App\Classes\Ingredients\Patty;
use App\Classes\Ingredients\Tomato;
use App\Classes\Ingredients\TopBun;
use App\Classes\Order;
use Illuminate\Console\Command;

class BurgerBuilder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'burger:build 
                {--top-bun}
                {--bottom-bun}
                {--cheese}
                {--patty-count=}
                {--lettuce}
                {--tomato}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Burger Builder';

    /**
     * Build the burger
     */
    public function handle()
    {
        $burger = '';

        $order = $this->getOrder();

        $ingredients = $this->getIngredients();

        foreach($ingredients as $ingredient) {
            $burger .= $ingredient->draw($order);
        }

        //display the burger
        echo($burger);
    }

    /**
     * Instantiate the ingredients and return in array
     */
    private function getIngredients(): array
    {
        return [
            new TopBun(),
            new Tomato(),
            new Cheese(),
            new Patty(),
            new Lettuce(),
            new BottomBun(),
        ];
    }

    /**
     * create the Order Class
     */
    private function getOrder(): Order
    {
        return new Order([
            'top_bun'     => (bool) $this->option('top-bun'),
            'bottom_bun'  => (bool) $this->option('bottom-bun'),
            'cheese'      => (bool) $this->option('cheese'),
            'patty_count' => (int) $this->option('patty-count'),
            'lettuce'     => (bool) $this->option('lettuce'),
            'tomato'      => (bool) $this->option('tomato'),
        ]);
    }
}
