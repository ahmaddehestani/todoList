<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Http\Requests\CreateItemRequest;
use Carbon\Carbon;


class ItemController extends Controller
{
    
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
           $task->category_id=$request->category_id;
           Item::createOrExist($task);
         return redirect()->route('todo.taskList');
         }




         public function test () {
          
          $cat= Category::find(2)->items;
          return response()->json([$cat],status:200);
        }
        public function taskList () {

          $result=Category::join('items', 'categories.id','=','items.category_id')
          ->get(['items.id','items.title as title','items.description','items.createTime','items.status','items.statusTime','categories.title as category_id']);
        
        return view('taskList', ["tasks"=>$result]);
        }

        public function taskUpdate(){
          $id=request('id');
      
          $dt = Carbon::now();
          $dateNow = $dt->toDateTimeString();

         if(request('title')){
          $title=request('title');
          Item::query()->where('id',$id)->update(['title'=>$title]);
        }
        if(request('status')){
          $status=request('status');
          if($status=='done'){
            
          Item::query()->where('id',$id)->update(['status'=>$status,'statusTime'=>$dateNow]);
          }
        }
        if(request('description')){
          $description=request('description');
          Item::query()->where('id',$id)->update(['description'=>$description]);
        }
          
  
        
  
          // $task = Item::query()->where('id',$id)->update(['title'=>$title,'description'=>$description,'status'=>$status]);
  
      error_log("id do");
     
          return redirect()->route('todo.taskList');
        
      
      }

         public function about () {
          return view('about');
        }
        public function edit () {
          return view('edit');
        }
}
