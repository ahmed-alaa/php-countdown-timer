<?php

namespace Ahmed\Countdown\Input\Console;

use Ahmed\Countdown\ApplicationServices\StartEventTimer;
use Ahmed\Countdown\Infrastructure\Db\FileEventPersistence;

class EventTimer
{
    public function handle()
    {
        $startEventTimer = new StartEventTimer(new FileEventPersistence());
        $startEventTimer->startEventTimer('Ahmed', '2020-10-28T10:00:00');
    }
}
