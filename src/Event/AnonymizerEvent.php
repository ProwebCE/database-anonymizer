<?php

namespace WebnetFr\DatabaseAnonymizer\Event;

class AnonymizerEvent extends Event
{
    public $tableName;
    public $values;

    public function __construct(string $tableName, array $values = [])
    {
        $this->tableName = $tableName;
        $this->values = $values;
    }
}
