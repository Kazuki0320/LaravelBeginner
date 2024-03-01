<?php

namespace App\Http\Controllers;

use App\Facades\GolfService;

class GolfController extends Controller
{
    public function playGolf()
    {
        $golfCourse = '太郎カントリークラブ';
        GolfService::playGolf($golfCourse);
    }
}
