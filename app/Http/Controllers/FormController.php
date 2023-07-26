<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form1() {
        return view('forms.form1');
    }

    function form1_data(Request $request) {
        // dd( $request->all() );
        // dd( $request->except('_token') );
        // dd( $request->only('_token', 'name') );

        // $name = $request->input('name');
        // $age = $request->input('age');
        $accept = $request->input('accept', 'No');
        $name = $request->name;
        $age = $request->age;

        return "Welcome $name, your age is $age, Accept: $accept";
    }
    function form5() {
        return view('forms.form5');
    }

    function form5_data (Request $request) {
        // dd($request->all());
        // Validate
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
    }
        function form3() {

            return view('forms.form3');
        }

        function form3_data(Request $request) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'age' => 'required',
                'gender' => 'required',
                'education' => 'required',
            ]);

            //dd($request->all());
        }
    }
