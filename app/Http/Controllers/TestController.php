<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Test;
use App\Facades\MyService;

class TestController extends Controller
{
#	new$B$G%5!<%S%9%/%i%9$r8F$S$@$9(B
    public function test()
    {
        MyService::getTestUser();
#	$test = new Test;//$B%5!<%S%9%/%i%9$r%$%s%9%?%s%92=$9$k(B
#	$user = $test->getTestUser();//$B4X?t$r8F$V(B
#	dd($user);//test
    }
#	$B%$%s%9%?%s%92=$N>JN,7A(B
	// public function test(Test $test)//$B$3$3$G%$%s%9%?%s%92=$G$-$k(B
	// {
	// 	$test->getTestUser(); //$B4X?t$r8F$V(B
}
