<?php

namespace App\Http\Controllers\Admin;

use Citmatel\Sales\Admin\Dashboard\Dashboard;
use Citmatel\Support\Http\Controllers\Controller;
use Citmatel\Support\Routes\RouteResolver;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    function __construct() {

    }

    public function index()
    {
       return view('admin.dashboard');
    }
}