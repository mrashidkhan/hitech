<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function automation()
    {
        $page = 'Automation';
        return view('services.automation', compact('page'));
    }

    public function staffing()
    {
        $page = 'Staffing';
        return view('services.staffing', compact('page'));
    }

    public function itservice()
    {
        $page = 'IT Services';
        return view('services.itservice', compact('page'));
    }

    public function itsolutions()
    {
        $page = 'IT Solutions';
        return view('services.itsolutions', compact('page'));
    }

    public function training()
    {
        $page = 'Training';
        return view('services.training', compact('page'));
    }

    public function softwaredevelopment()
    {
        $page = 'Software Development';
        return view('services.softwaredevelopment', compact('page'));
    }
}
