<?php
class train
{
    private $id;
    private $departureTime;
    private $arrivalTime;
    private $delay;

    public function __construct($id, $depTime, $duration)
    {
        $this->setId($id);
        $this->setDepTime($depTime);
        $this->setArivTime($duration);
        $this->delay = 0;
    }

    private function setId($id)
    {
        if (is_integer($id)) {
            $this->id = $id;
        } else {
            echo "ID must be of type Integer";
        }
    }

    private function setDepTime($timestamp)
    {
        if (is_integer($timestamp)) {
            $this->departureTime = $timestamp;
        } else {
            echo "Departure Time must be of type integer";
        }
    }

    private function setArivTime($tripDuration)
    {
        $this->arrivalTime = $this->departureTime + $tripDuration;
    }

    private function setDelay($delay)
    {
        $this->delay = $delay;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDepTime()
    {
        return $this->departureTime;
    }
    public function getArrTime()
    {
        return $this->arrivalTime;
    }
    public function getDelay()
    {
        return $this->delay;
    }

    public function getTime()
    {
        $rand = rand(0, 1);
        if ($rand == 1) {
            $this->setDelay(rand(300, 1200));
        }

        if ($this->delay > 0) {
            echo "<p style='color : red;'> Will arrive by " . gmdate("H:i:s", $this->departureTime + $this->delay) .  " with a delay of " . round($this->getDelay() / 60) . " minutes</p>";
        } else {
            echo "<p style='color : green;'> Will arrive by " . gmdate("H:i:s ", $this->departureTime + $this->delay) . "</p>";
        }
    }
}

rand(0, 1);
