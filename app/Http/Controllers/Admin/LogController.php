<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class LogController extends Controller
{

    /**
     * Construct
     * 
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.logs.index', ['logs' => Log::with('employee')->get()]);
    }
}
