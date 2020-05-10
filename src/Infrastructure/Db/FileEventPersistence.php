<?php

namespace Ahmed\Countdown\Infrastructure\Db;

use Ahmed\Countdown\DomainServices\EventPersistence;
use Ahmed\Countdown\Entities\EventInterface;

class FileEventPersistence implements EventPersistence
{
    public function persist(EventInterface $event)
    {
        // TODO: Implement persist() method.
    }
}
