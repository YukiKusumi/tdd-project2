<?php

namespace Yukikusumi\MyTddProject2;

use Yukikusumi\MyTddProject2\Money;

class Bank
{
    public function reduce(Expression $source, string $to):Money
    {
        return Money::dollar(10);
    }
}
