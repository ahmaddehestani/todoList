<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
    public function taskList(){
        $tasks= Item::all();
        return view('taskList', ["tasks"=>$tasks]);
      }
}
