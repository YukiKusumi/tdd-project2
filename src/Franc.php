<?php

namespace Yukikusumi\MyTddProject2;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        parent::__construct($amount, "CHF");
    }

    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
