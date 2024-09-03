<?php
namespace Yukikusumi\MyTddProject2;

class Money
{
    protected int $amount;

    public function equals(self $other): bool
    {
        if (!($other instanceof Money)){
            return false;
        }
        return $this->amount === $other->amount;
    }

}
