<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HospitalController extends Controller
{
    public function index(){
        $people = ['miek', 'vinny'];
        return view('pages.hospital', compact('people'));
    }
};
