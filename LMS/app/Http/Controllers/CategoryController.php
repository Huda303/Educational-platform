<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find()->all($id);
        $categories = Category::get()->all();
        return view('layouts.categories')->with(['categories' => $categories, 'category' => $category])->with('id', $id);
    }
}
