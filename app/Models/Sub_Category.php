<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    protected $guarded;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function auctions(){
        return $this->hasMany(Auction::class, 'sub_category_id');
    }
}
