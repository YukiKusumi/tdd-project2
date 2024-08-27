<?php
namespace Yukikusumi\MyTddProject2;

class Money
{
    protected int $amount;

    public function equals(self $other): bool
    {
        return $this->amount === $other->amount;
    }

}
