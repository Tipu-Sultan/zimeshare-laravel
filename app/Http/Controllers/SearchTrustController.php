<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trust;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchTrustController extends Controller
{
    public function showTrustPage()
    {
        $trusts = Trust::all();
        $trusts = DB::table('trust')->paginate(10);


        return view('search_trusts', compact('trusts'));
    }
}
