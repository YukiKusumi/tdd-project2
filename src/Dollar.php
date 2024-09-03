<?php

namespace Yukikusumi\MyTddProject2;

class Dollar extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
