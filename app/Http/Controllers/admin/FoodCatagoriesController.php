<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodCatagoriesController extends Controller
{
    public function index(){
        return view('admin/food-catagories/all');
    }
    public function create(){
        return view('admin/food-catagories/create');
    }
    public function edit(){
        return view('admin/food-catagories/edit');
    }
}
