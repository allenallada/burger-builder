<?php

namespace App\Classes;

class Order
{
    private $order;

    public function __construct(array $order) {
        $this->order = $order;
    }

    public function topBun()
    {
        return $this->order['top_bun'];
    }

    public function bottomBun()
    {
        return $this->order['bottom_bun'];
    }

    public function cheese()
    {
        return $this->order['cheese'];
    }

    public function pattyCount()
    {
        return $this->order['patty_count'];
    }

    public function lettuce()
    {
        return $this->order['lettuce'];
    }

    public function tomato()
    {
        return $this->order['tomato'];
    }
}