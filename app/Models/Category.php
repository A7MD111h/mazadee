<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded;
    public function sub_Category(){
        return $this->hasMany(Sub_Category::class,'category_id');
    }
}
