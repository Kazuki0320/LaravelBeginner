<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Test;

class TestController extends Controller
{
#	newでサービスクラスを呼びだす
#	public function test()
#	{	
#	$test = new Test;//サービスクラスをインスタンス化する
#	$user = $test->getTestUser();//関数を呼ぶ
#	dd($user);//test
#	}
#	インスタンス化の省略形		
	public function test(Test $test)//ここでインスタンス化できる
	{
		$user = $test->getTestUser(); //関数を呼ぶ
		dd($user);
	}
}
