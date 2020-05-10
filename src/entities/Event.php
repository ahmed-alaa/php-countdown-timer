<?php

namespace Ahmed\Countdown\Entities;

use Cassandra\Date;
use DateTime;

class Event implements EventInterface
{
    private string $name;

    private DateTime $date;

    public function __construct(string $name, DateTime $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }
}
