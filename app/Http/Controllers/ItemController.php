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
      public function createTask () {
        return view('createItem');
      }
      public function store(CreateItemRequest $request){
        $task = new Item();
          $task->title=$request->title;
           $task->description=$request->description;
           $task->status=$request->status;
           $task->createTime=$request->createTime;
           $task->statusTime=$request->statusTime;
           $task->category=$request->category;
           Item::createOrExist($task);
         return redirect()->route('todo.taskList');
         }
}
