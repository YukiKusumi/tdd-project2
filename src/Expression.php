<?php
namespace Yukikusumi\MyTddProject2;
interface Expression
{
    public function reduce(string $to):Money;
}
