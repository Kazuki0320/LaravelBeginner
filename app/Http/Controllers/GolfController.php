<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\GolfService;

class GolfController extends Controller
{
    public function playGolf(Request $request)
    {
        $golfCourse = '太郎カントリークラブ';
        GolfService::playGolf($golfCourse);

        $data = [
            'golfPlace' => $request->golf
        ];
        dd($data);
    }
}
