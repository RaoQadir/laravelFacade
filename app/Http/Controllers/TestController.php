<?php

namespace App\Http\Controllers;

use App\classes\TestFacade;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        dd(TestFacade::getTestNumber());
    }
}
