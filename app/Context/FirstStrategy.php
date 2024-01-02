<?php


namespace App\Context;


class FirstStrategy extends FormatStrategy
{


    protected function formatProperty($key, $value)
    {
        return "$key - $value\n";

    }

    protected function getStrategyName()
    {
        return 'first_strategy_' . date('Ymd_His') . '.txt';
    }
}
