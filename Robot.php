<?php

namespace Object;

use Psr\Hug\Huggable;

class Robot implements Huggable
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
        return "beep beep beeeep".PHP_EOL;
    }
}
