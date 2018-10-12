<?php

namespace Vehikl\LaravelFlip\Middlewares;

use Vehikl\Flip\Feature;

class SomeFeature extends Feature
{
    protected static $forcedState;

    public function toggles(): array
    {
        return [];
    }
}
