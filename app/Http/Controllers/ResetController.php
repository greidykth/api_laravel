<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ResetController extends Controller
{
    public function reset ()
    {
        //reset state before starting tests
        Artisan::call('migrate:fresh');
        return 'OK';
    }
}
