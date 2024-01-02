<?php


namespace App\Context;


interface InterfaceStrategy {
    public function formatData(array $objects): array;
}
