<?php

namespace Object;

use Psr\Hug\GroupHuggable;
use Psr\Hug\Huggable;

class GroupHug implements GroupHuggable
{
    /**
     * {@inheritdoc}
     */
    public function hug(Huggable $h)
    {
        return;
    }

    /**
     * {@inheritdoc}}
     */
    public function groupHug($huggables)
    {
        $hugged = [];

        /** @var Huggable $object */
        foreach ($huggables as $object) {
            if (!$hugged) {
                $hugged[] = $object;
                continue;
            }

            foreach ($hugged as $eltHugged) {
                $object->hug($eltHugged);
            }

            $hugged[] = $object;
        }
    }
}
