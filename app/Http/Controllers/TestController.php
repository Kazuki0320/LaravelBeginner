<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Test;
use App\Facades\MyService;

class TestController extends Controller
{
    public function test()
    {
        MyService::getTestUser();
    }
}
