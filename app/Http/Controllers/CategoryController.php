<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {


        return view('');
    }


    public function create()
    {
        return view('');

    }

    public function store(CategoryFormRequest $request)
    {
        Category::create([
           'name'=>$request->name_category
        ]);
        return  redirect()->route('home');
    }
}
