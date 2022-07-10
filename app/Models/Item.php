<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable=['title','description','status','createTime','statusTime','category'];
    
    public static function createOrExist($data){
        self::firstorcreate(['title'=>$data->title],['title'=>$data->title,'description'=>$data->description,'status'=>$data->status,'createTime'=>$data->createTime,'statusTime'=>$data->statusTime,'category'=>$data->category]);
  return true;
      }


    public function categories()
    {
        return $this->hasMany(Category::class,"category_id","category");
    }
}
