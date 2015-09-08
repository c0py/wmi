<?php

namespace Stevebauman\Wmi\Processors;

use Stevebauman\Wmi\Models\Processor;
use Stevebauman\Wmi\Schemas\Classes;

class Processors extends AbstractProcessor
{
    public function get()
    {
        $processors = [];

        $result = $this->connection->newQuery()->from(Classes::WIN32_PROCESSOR)->get();

        foreach($result as $processor) {
            $processors[] = new Processor($processor);
        }

        return $processors;
    }
}
