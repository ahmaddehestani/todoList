<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Http\Requests\CreateItemRequest;


class ItemController extends Controller
{
    public function taskList(){
        $tasks = Item::with('categories')->get();
        //$tasks= Item::all();
        return view('taskList', ["tasks"=>$tasks]);
      }
}
