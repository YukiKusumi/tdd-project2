<?php

namespace Yukikusumi\MyTddProject2;

class Bank
{
    private array $rates = [];
    public function __construct()
    {
        $this->rates = [];
    }

    public function reduce(Expression $source, string $to):Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate):void
    {
        $this->rates[(string) new Pair($from, $to)] = $rate;
    }

    public function rate(string $from, string $to)
    {
        if ($from === $to) return 1;
        return $this->rates[(string) new Pair($from, $to)];
    }
}
