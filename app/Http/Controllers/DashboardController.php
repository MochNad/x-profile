<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BreadCrumb;

class DashboardController extends Controller
{
    protected $breadcrumbs;

    public function __construct()
    {
        $this->breadcrumbs = BreadCrumb::init("dashboard");
    }

    public function index()
    {
        return view('pages.dashboard.index', [
            'title' => 'Dashboard',
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }
}
