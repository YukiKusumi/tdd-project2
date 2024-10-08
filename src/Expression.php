<?php
namespace Yukikusumi\MyTddProject2;
interface Expression
{
    public function reduce(Bank $bank, string $to):Money;
}
