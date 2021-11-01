<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {


        return view('');
    }


    public function create()
    {
        return view('');

    }

    public function store(Request $request)
    {
        Company::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'description'=>$request->description,
            'photo_product'=>$request->photo,
            'rating'=>$request->rating,
            'description_product'=>$request->description_product,
            'price'=>$request->price,
            'category_id'=>$request->category_id
        ]);
        return  redirect()->route('home');
    }
}
