<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title'];


    public static function createOrExist($data){
        self::firstorcreate(['title'=>$data->title],['title'=>$data->title]);
  return true;
      }

    public function items()
    {
           
        return $this->hasMany(Item::class);

    }
}
