<?php

namespace Emme-Bi\Sharing-Linkedin\Facades;

class LinkedinShare extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return Emme-Bi\Sharing-Linkedin\Sharing-Linkedin::class;
    }
}
