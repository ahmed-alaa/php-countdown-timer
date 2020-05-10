<?php

namespace Ahmed\Countdown\ApplicationServices;

use Ahmed\Countdown\DomainServices\EventPersistence;
use Ahmed\Countdown\DomainServices\StartEvent;
use Ahmed\Countdown\Entities\Event;
use DateTime;

class StartEventTimer implements StartEvent
{
    /**
     * @var EventPersistence
     */
    private EventPersistence $eventPersistence;

    public function __construct(EventPersistence $eventPersistence)
    {
        $this->eventPersistence = $eventPersistence;
    }

    public function startEventTimer(string $name, DateTime $date)
    {
        $event = new Event($name, $date);

        $this->eventPersistence->persist($event);
    }
}
