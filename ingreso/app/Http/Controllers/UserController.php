<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dates = 1;
        return view('welcome', compact('dates'));
        
    }
    public function store(Request $request)
    {
        //
        $code = $request->get('code');
        $dates = DB::table('users')
        ->where('Codigo','LIKE','%'.$code.'%')
        //->paginate(5)
        ;
        //return view('welcome', compact('dates'));
        return response()->json($dates);

    }
}
