<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function Hello($id='noname', $pass='unknow')
    {
    return <<< EOF
	<html>
		<head>
		<title>Hello</title>
		<style>
			body {font-size:16pt; color:#9999; }
			h1 {font-size:100pt; text-aligin:right, Bolor:#eee;
			margin:-40px 0px -50px 0px; }
		</style>
		</head>
	<body>
		<h1>Hello</h1>
		<p>これは、Helloコントローラのindexです</p>
		<ul>
			<li>ID: {$id}</li>
			<li>PASS: {$pass}</li>
		</ul>
	</body>
	</html>
	EOF;
    }
}
