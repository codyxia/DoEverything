<?php

namespace App\Http\Controllers;

use App\Models\CraftListUser;
use Cody\LaravelDevelopTools\SpeedCurd;

class TestController extends Controller
{
    public function test()
    {
        $needle = [
            'fruit' => 'banana', 'vegetable' => 'carrot',
        ];

        $haystack = [
            ['vegetable' => 'carrot', 'fruit' => 'banana'],
            ['fruit' => 'apple', 'vegetable' => 'celery'],
        ];

        dump(in_array($needle, $haystack, true) ? 'true' : 'false');
        // Output is 'false'

        dump(in_array($needle, $haystack) ? 'true' : 'false');

        //return $this->success(SpeedCurd::SearchLists(CraftListUser::query(),[])->get());
    }
}
