<?php

namespace Object;

use Psr\Hug\Huggable;

class Human implements Huggable
{
    protected $happiness = 0;

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
        return "I'm happy !".PHP_EOL;
    }
}
