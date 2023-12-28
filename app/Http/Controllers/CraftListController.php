<?php

namespace App\Http\Controllers;

use App\Models\CraftListUser;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CraftListController extends Controller
{
    public function userList()
    {
        $data = CraftListUser::all();
        return Inertia::render('CraftList/List',['data'=>$data]);
    }
}
