<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Test;

class TestController extends Controller
{
	public function test()
	{	
	$test = new Test;//$B%5!<%S%9%/%i%9$r%$%s%9%?%s%92=$9$k(B
	$user = $test->getTestUser();//$B4X?t$r8F$V(B
	dd($user);//test
	}
}
