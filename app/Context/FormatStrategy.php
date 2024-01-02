<?php


namespace App\Context;


abstract class FormatStrategy implements InterfaceStrategy

{
    abstract protected function formatProperty($key, $value);
    abstract protected function getStrategyName();

    public function formatData(array $data): array
    {
        $formattedText = '';
        foreach ($data as $object) {
            $formattedObject = "";
            foreach ($object as $key => $value) {
                $formattedObject .= $this->formatProperty($key, $value);
            }

            $formattedObject .= "\n-------------\n";
            $formattedText .= $formattedObject;

        }

        return [
            'name' => $this->getStrategyName(),
            'text' => $formattedText
        ];


    }


}
