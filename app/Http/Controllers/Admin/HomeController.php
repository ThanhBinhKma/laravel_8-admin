<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function flot()
    {
        return view('admin.pages.charts.flot');
    }
    public function chartjs()
    {
        return view('admin.pages.charts.chartjs');
    }
    public function inline()
    {
        return view('admin.pages.charts.inline');
    }

    public function uplot()
    {
        return view('admin.pages.charts.uplot');
    }


    public function button()
    {
        return view('admin.pages.UI.buttons');
    }
    public function general()
    {
        return view('admin.pages.UI.general');
    }
    public function icons()
    {
        return view('admin.pages.UI.icons');
    }
    public function modal()
    {
        return view('admin.pages.UI.modals');
    }
    public function navbar()
    {
        return view('admin.pages.UI.navbar');
    }
    public function ribbons()
    {
        return view('admin.pages.UI.ribbons');
    }
    public function sliders()
    {
        return view('admin.pages.UI.sliders');
    }
    public function timeline()
    {
        return view('admin.pages.UI.timeline');
    }
}
