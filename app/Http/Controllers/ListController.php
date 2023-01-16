<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

use PDF;

class ListController extends Controller
{
    public function preview()
    {
        $data = Person::all()->sortBy('created_at');

        return view('list', compact('data'));
    }

    public function index(Request $request)
    {
        $data = Person::all()->sortBy('created_at');

        $pdf = PDF::loadView('list', compact('data'));
        return $pdf->download('demo.pdf');
    }
}
