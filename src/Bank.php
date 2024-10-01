<?php

namespace Yukikusumi\MyTddProject2;

class Bank
{
    public function reduce(Expression $source, string $to):Money
    {
        if($source instanceof Money)
        {
            return $source;
        }

        $sum = $source;
        return $sum->reduce($to);
    }
}
