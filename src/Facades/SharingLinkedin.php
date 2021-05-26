<?php

namespace EmmeBi\SharingLinkedin\Facades;

class SharingLinkedin extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return EmmeBi\SharingLinkedin\SharingLinkedin::class;
    }
}
