<?php

namespace Ahmed\Countdown\DomainServices;

use DateTime;

interface StartEvent
{
    public function startEventTimer(string $name, DateTime $date);
}
