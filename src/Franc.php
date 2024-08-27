<?php

namespace Yukikusumi\MyTddProject2;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Money
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount;
    }
}
