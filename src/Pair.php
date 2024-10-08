<?php
namespace Yukikusumi\MyTddProject2;
class Pair
{
    private string $from;
    private string $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function __toString(): string
    {
        return $this->from . '->' . $this->to;
    }

    public function equals(object $object): bool
    {
        $pair = $object;
        return $this->from === $pair->from && $this->to === $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }
}
