<?php

namespace Goldenboy\LaravelBatch;

use Illuminate\Support\Facades\Facade;

class LaravelBatchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
       return 'Batch';
    }
}