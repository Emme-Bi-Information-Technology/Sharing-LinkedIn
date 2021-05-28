<?php

namespace EmmeBi\SharingLinkedin\Facades;

use EmmeBi\SharingLinkedin;


class SharingLinkedin extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return EmmeBi\SharingLinkedin\SharingLinkedin::class;
    }
}
