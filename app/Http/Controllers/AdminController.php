<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminFormRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {


        return view('');
    }


    public function create()
    {
        return view('');

    }

    public function store(AdminFormRequest $request)
    {
       Admin::create([
          'name'=>$request->name,
          'password'=>$request->password,
           'email'=>$request->email
       ]);
        return  redirect()->route('home');
    }
}
