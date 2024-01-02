<?php


namespace App\Context;


class SecondStrategy extends FormatStrategy
{

    protected function formatProperty($key, $value)
    {
        return "|$key|$value|\n";
    }

    protected function getStrategyName()
    {
        return 'second_strategy_' . date('Ymd_His') . '.txt';
    }
}
