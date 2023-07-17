<?php

namespace Xamtirg\Assets\Facades;

use Xamtirg\Assets\Assets;
use Illuminate\Support\Facades\Facade;

/**
 * @since 22/07/2023 11:25 PM
 */
class AssetsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Assets::class;
    }
}
