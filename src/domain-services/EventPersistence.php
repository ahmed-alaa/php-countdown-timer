<?php

namespace Ahmed\Countdown\DomainServices;

use Ahmed\Countdown\Entities\EventInterface;

interface EventPersistence
{
    public function persist(EventInterface $event);
}
