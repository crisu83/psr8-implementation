<?php

namespace Object;

use Psr\Hug\Huggable;

class Ewok implements Huggable
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
        return "OOOOaaarrrkkkk !".PHP_EOL;
    }
}
