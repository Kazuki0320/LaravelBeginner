<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class GolfService extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'golfService';
	}
}
