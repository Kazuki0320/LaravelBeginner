<?php

namespace App\Http\Controllers;

use App\Facades\MyService;

class TestController extends Controller
{
    public function test()
    {
        MyService::getTest();
    }
}
