<?php

namespace Immersioninteractive\GenericRequest;

use Illuminate\Support\Facades\Facade;

class IIRequestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'IIRequest';
    }
}
