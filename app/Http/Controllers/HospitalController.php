<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\UserData;

class HospitalController extends Controller
{
        public function index(){
            $userData = DB::table('userData')->get();
            //$userData = DB::select('select * from userData');

            return view('pages.hospital', ['userData' => $userData]);
    }

        public function show(){
            $userData = UserData::all();

            return view('pages.ID', compact('userData'));
        }

        public function edit(userData $userData){

            return view('pages.edit', ['userData' => $userData]);
        }

        public function update(Request $request, userData $userData){
            $userData->update($request->all());

            $userData = DB::table('userData')->get();

            return view('pages.hospital', compact('userData'));
        }
};