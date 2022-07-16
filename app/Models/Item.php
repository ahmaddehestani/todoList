<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable=['title','description','status','createTime','statusTime','category_id'];
    
    public static function createOrExist($data){
        self::firstorcreate(['title'=>$data->title],['title'=>$data->title,'description'=>$data->description,'status'=>$data->status,'createTime'=>$data->createTime,'statusTime'=>$data->statusTime,'category_id'=>$data->category_id]);
  return true;
      }

      public static function destroy($id){
        $task = self::findOrFail($id);
      $task->delete();
        }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
