<?php

namespace App\Http\Controllers;

use App\Models\CraftListUser;
use Cody\LaravelDevelopTools\SpeedCurd;

class TestController extends Controller
{
    public function test()
    {
        //return $this->success(SpeedCurd::SearchLists(CraftListUser::query(),[])->get());
    }
}
