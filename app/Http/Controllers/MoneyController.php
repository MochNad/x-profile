<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BreadCrumb;

class MoneyController extends Controller
{
    protected $breadcrumbs;

    public function __construct()
    {
        $this->breadcrumbs = BreadCrumb::init("money");
    }

    public function index()
    {
        return view('pages.money.index', [
            'title' => 'Money',
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }
}
