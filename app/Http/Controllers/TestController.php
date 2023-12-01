<?php

namespace App\Http\Controllers;

use App\Models\CraftListUser;
use Cody\LaravelDevelopTools\SpeedCurd;

class TestController extends Controller
{
    public function test()
    {
        $needle = array(
            'fruit'=>'banana', 'vegetable'=>'carrot'
        );

        $haystack = array(
            array('vegetable'=>'carrot', 'fruit'=>'banana'),
            array('fruit'=>'apple', 'vegetable'=>'celery')
        );

        dump(in_array($needle, $haystack, true) ? 'true' : 'false') ;
// Output is 'false'

        dump(in_array($needle, $haystack) ? 'true' : 'false') ;

        //return $this->success(SpeedCurd::SearchLists(CraftListUser::query(),[])->get());
    }
}
