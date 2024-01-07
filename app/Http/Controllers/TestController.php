<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Test;

class TestController extends Controller
{
	public function test()
	{	
	$test = new Test;//サービスクラスをインスタンス化する
	$user = $test->getTestUser();//関数を呼ぶ
	dd($user);//test
	}
}
