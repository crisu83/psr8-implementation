<?php

namespace Object;

use Psr\Hug\Huggable;

class Astronaut implements Huggable
{
    protected $happiness = 0;

    /**
     * {@inheritdoc}}
     */
    public function hug(Huggable $object)
    {
        if ($this->happiness === 3) {
            return;
        }

        $this->happiness++;
        echo $this->talk();
        $object->hug($this);
    }

    public function talk()
    {
        return "That's one small step for (a) man; one giant leap for mankind" . PHP_EOL;
    }
}
