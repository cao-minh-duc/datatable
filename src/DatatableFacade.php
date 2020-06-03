<?php

namespace UiBuilder\Datatable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Datatable\Skeleton\SkeletonClass
 */
class DatatableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatable';
    }
}
