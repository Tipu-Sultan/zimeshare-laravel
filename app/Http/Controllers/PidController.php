<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pid;
use Illuminate\Http\Request;

class PidController extends Controller
{
    public function ShowPidData()
    {
        $pids = Pid::all();

        return view('searchpid', compact('pids'));
    }
}
