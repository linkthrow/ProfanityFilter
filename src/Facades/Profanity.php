<?php

namespace LinkThrow\ProfanityFilter\Facades;

use Illuminate\Support\Facades\Facade;

class Profanity extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'profanity';
    }
}
