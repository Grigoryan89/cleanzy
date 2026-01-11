<?php

namespace App\Http\Controllers;

use App\Models\Milling;
use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class ServiceController extends Controller
{
    public function home()
    {
        return view('services.home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function portfolio()
    {
        return view('portfolio');
    }


    public function contact()
    {
        return view('contact');
    }

    public function partners()
    {
        return view('partners');
    }

}
