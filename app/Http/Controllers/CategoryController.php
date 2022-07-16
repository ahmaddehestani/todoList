<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class CategoryController extends Controller
{
    public function createCategory () {
        return view('category.create');
      }

      public function store(){
        $category = new Category();
           $category->title=request('title');
           Category::createOrExist($category);
         return redirect()->route('category.categoryList');
         }
}
