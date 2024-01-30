<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use HasFactory;
    use softDeletes;
    
    protected $guarded;
    protected $fillable = [
        'category_id',
        'category_Name',
        'photo'   
    ];
    public function sub_Category(){
        return $this->hasMany(Sub_Category::class,'category_id');
    }
    public function company(){
        return $this->hasMany(Company::class,'category_id');
    }
}
