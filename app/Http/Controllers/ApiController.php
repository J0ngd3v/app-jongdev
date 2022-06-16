<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\toxic;

class ApiController extends Controller
{
   public function katakotor(){
        $toxic = DB::table('toxic')->get();
        return $toxic;
   }
}
