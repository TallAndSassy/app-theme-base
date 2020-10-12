<?php

namespace TallAndSassy\AppThemeBase;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallAndSassy\AppThemeBase\AppThemeBase
 */
class AppThemeBaseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'app-theme-base';
    }
}
