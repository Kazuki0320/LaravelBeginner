<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	// public function __invoke() {
	// 	return <<< EOF
	// <html>
	// 	<head>
	// 	<title>Hello</title>
	// 	<style>
	// 	body {font-size:16pt; color:#999;}
	// 	h1 {font-size:30pt; text-align:right; color:#eee;
	// 	margin:-15pt; 0pt 0pt 0pt; }
	// 	}
	// 	</style>
	// 	</head>
	// 	<body>
	// 	<h1>single Action</h1>
	// 	<p>これは、シングルアクションコントローラー</p>
	// 	</body>
	// </html>
	// EOF;
	// }
	public function index()
	{
        $data = ['msg' => 'これはコントローラーから渡されたメッセージです。'];
        return view('hello.index' , $data);
	}

	public function form()
	{
		$data = [
			'msg' => 'お名前を入力してください。',
		];
		return view('hello.index', $data);
	}

	public function post(Request $request)
	{
		$msg = $request->msg;

		$data = [
			'msg' => 'こんにちは、' . $msg . 'さん',
		];
		return view('hello.index', $data);
	}
}
