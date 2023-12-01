<?php

namespace App\Http\Controllers;

use Cody\LaravelDevelopTools\HttpResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, HttpResponse,ValidatesRequests;
}
