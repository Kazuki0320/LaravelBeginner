<?php

namespace App\Services;

use DB;

class MessageService {

    public function create($attribute)
    {
        DB::table('messages')->insert($attribute);
    }
}
