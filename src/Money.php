<?php
namespace Yukikusumi\MyTddProject2;

abstract class Money
{
    protected int $amount;

    abstract public function times(int $multiplier): Money;

    public function equals(self $other): bool
    {
        if (!($other instanceof Money)){
            return false;
        }
        return $this->amount === $other->amount;
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}
