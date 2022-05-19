<?php

namespace App\classes;

use App\Facade;
use Illuminate\Support\Facades\Facade as FacadesFacade;

class TestFacade extends FacadesFacade
{
    public static function getFacadeAccessor()
    {
        return "TestClass";
    }
}
