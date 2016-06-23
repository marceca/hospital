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

    public function store(Request $request, userData $userData){
        $this->validate($request, [
            'name' => 'required|min:10',
            'name' => 'required|min:10'
        ]);

        $note = new Note($request->all());

        $card->addNote($note, 1);

        return back();
    }

        public function update(Request $request, userData $userData){
            $this->validate($request, [
                'name' => 'required|min:1',
                'address' => 'required|min:1',
                'city' => 'required|min:1',
                'state' => 'required|:1',
            ]);

            $userData->update($request->all());

            $userData = DB::table('userData')->get();

            return view('pages.hospital', compact('userData'));
        }
};